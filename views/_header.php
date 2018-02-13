<?php 
require "../Classes/Database.php";
    if (isset($_SESSION["customer"]))
    {
        $db=new Database();
        $customer=$db->getCustomerE($_SESSION["customer"]);
    }
    else if (isset($_SESSION["contractor"]))
    {
        $db=new Database();
        $contractor=$db->getContractorE($_SESSION['contractor']);
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Own stylesheet -->
    <link href="../css/ioStyle.css" rel="stylesheet" type="text/css" />
    <!-- Own Stylesheet -->

    <title>IOReno</title>
</head>

<body class="container-fluid" style="padding:0px;margin:0px;">
    <header>
<!-- ----------------------------------- Bootstrap v4 scripts --------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        
<!-- ---------------------------------------------- NAV BAR --------------------------------------------->
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="../images/logo.PNG" alt="IOReno" class="logo"></a>
            <?php
            if (isset($_SESSION["registerMessage"])) {
                echo "<div style=\"margin-left:10px;margin-right:10px;margin-top:0;margin-bottom:0;width:150px;\" class=\"alert alert-success text-center\">" .
                "<strong>Success! </strong>" . $_SESSION["registerMessage"] .
                "</div>";
                $_SESSION["registerMessage"] = null;
            }
            if (isset($_SESSION["invalidLogin"])) {
                echo "<div style=\"margin-left:10px;margin-right:10px;margin-top:0;margin-bottom:0;width:150px;\" class=\"alert alert-danger text-center\">" .
                "<strong>Error! </strong>" . $_SESSION["invalidLogin"] .
                "</div>";
                $_SESSION["invalidLogin"] = null;
            }
        ?>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    
                        
<!-------------------------------------Dropdown example may be useful--------------------------------- 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
-->
                    </ul>
                    <ul class="navbar-nav navbar-right">
                    <?php if(isset($customer)){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="HomeCustomer.php"><strong>Welcome,  
                                <?php
                                    echo $customer->get_name();
                                ?></strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="../php/logout.php"><strong>Logout</strong></a>
                        </li>
                        
                    <?php
                            }
                            if(isset($contractor))
                            {?>
                        <li class="nav-item">
                            <a class="nav-link" href="HomeContractor.php"><strong>Welcome,  
                                <?php
                                    echo $contractor->get_name();
                                ?></strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="../php/logout.php"><strong>Logout</strong></a>
                        </li>
                    <?php
                                
                            }
                    ?>
                    </ul>
                    <?php
                        if (!isset($_SESSION["login"])) {
                            echo '<form class="form-inline my-2 my-lg-0" role="form" action="../php/login.php" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input style="margin-right: 20px;" type="text" class="form-control" id="Email" name="Email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">***</span>
                            </div>
                            <input style="margin-right: 20px;" class="form-control" type="password" id="Password" name="Password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign In</button>
                    </form>';
                        }
                    
                    
                    ?>
                    
                </div>
        </nav>
    </header>
    <div class="body_all container-fluid" style="padding:0px;">