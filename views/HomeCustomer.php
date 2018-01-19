<?php session_start(); 
require "../Classes/Database.php";
    if (!$_SESSION["login"])
    {
        header("location:../views/index.php");
    }
    if (isset($_SESSION["customer"]))
    {
        $db=new Database();
        $customer=$db->getCustomerE($_SESSION["customer"]);
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
        
        <!-- Own stylesheet -->
        <link href="../css/ioStyle.css" rel="stylesheet" type="text/css"/>
        <!-- Own Stylesheet -->
        
        <title>IOReno</title>
    </head>
    <body class="container-fluid"  style="padding:0px;margin:0px;">
        <header>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-xl navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="../images/logo.PNG" alt="IOReno" class="logo"></a>
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
    <li>
        <a href="HomeCustomer.php"><strong>Welcome,  
        <?php
            echo $customer->get_name();
            ?></strong></a>
    </li>
<!--
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
  </div>
</nav>
        </header>
        <div class="body_all container-fluid" style="padding:0px;margin:0px;">
                <?php
                 if (isset($_SESSION["update"])) {
                        echo "<div class=\"alert alert-success text-center\">" .
                        "<strong>Success! </strong>" . $_SESSION["update"] .
                        "</div>";
                        $_SESSION["update"] = null;
                    }
                    ?>
                <h1>Your projects:</h1><br>
                <div class="row">
                <?php
                     
                     $projects=$db->getCustomerProject($customer->get_email());
                     if($projects!=null)
                     {
                        foreach ($projects as $pro)
                        { ?>
                            <div class="card shadow_fade" style="width: 18rem; margin:10px">
                              <img class="card-img-top" src="../images/gt.jpg" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $pro->getTitle()?></h5>
                                <p class="card-text"><?php echo $pro->get_budget()."$"?></p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="<?php echo '../views/seeEstimates.php?id='.$pro->get_id()?>" class="btn btn-primary btn-sm">See Estimates</a>
                                        <a href="<?php echo '../views/editProject.php?id='.$pro->get_id()?>" class="btn btn-warning btn-sm">Edit</a>    
                                    </li>
                                    <li class="list-group-item">
                                        <a href="" class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#deleteConfirmation">Delete</a>
                                    </li>
                                </ul>
                                
                              </div>
                            </div>
                                <!-- Modal -->
                            <div class="modal fade" id="deleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you Sure?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Once you delete your project you cannot retrieve it ever again.
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a href="<?php echo '../php/deleteProject.php?id='.$pro->get_id()?>" class="btn btn-primary">Delete</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                    <?php
                        }
                     }
                     else
                     {
                         echo "You don't have any projects yet";
                     }
                     
                ?>
                </div>
                <div style="margin-top: 40px; margin-left: 65px">
                    <a href="createProject.php" class="btn btn-primary" role="button"><strong>Create a new project</strong></a>
                </div>
<?php
    include("_footer.php");
