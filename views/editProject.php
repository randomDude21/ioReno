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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="../css/ioStyle.css" rel="stylesheet" type="text/css"/>
        <script src="../js/gen_validatorv4.js" type="text/javascript"></script>
        <title>IOReno</title>
    </head>
    <body>
        <header>
            <nav id="nav" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="../images/logo.PNG" alt="IOReno Logo" class="logo"></a>

                    </div

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-2">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="#">Services</a></li>

                            <li><a href="contact.php">Contact</a></li>

                            <li>
                                <a href="#"><strong>Welcome,  
                                <?php
                                    echo $customer->get_name();
                                    ?></strong></a>
                            </li>
                        </ul>
                       
                    </div><!-- /.navbar-collapse -->
                 
                    
                </div><!-- /.container -->
            </nav><!-- /.navbar -->
        </header>
        <div class="body_all">
            <div style="margin-top: 40px; margin-left: 65px">
           </div>
            <div style="margin-top: 50px; margin-left: 65px">
                  <?php
                 if (isset($_SESSION["error"])) {
                        echo "<div class=\"alert alert-danger text-center\">" .
                        "<strong></strong>" . $_SESSION["error"] .
                        "</div>";
                        $_SESSION["error"] = null;
                    }
                    ?>
                <form action="../php/updateProject.php" method="POST">
                    <table>
                        
                    <?php
                         $project=$db->getProject($_GET["id"]);
                         if($project!=null)
                         {

                                echo '<tr><td>Project Description</td><td><input type="text" name="desc" value="'.$project->get_description().'"></td></tr>'
                                        . '<tr><td>Project budget</td><td><input type="text" name="budget" value="'.$project->get_budget().'"></td></tr>';

                         }
                         else
                         {
                             echo "Something went wrong";
                         }
                         $_SESSION['project']=$project->get_id();
                    ?>
                    </table>
                    <div style="margin-top: 20px">
                        <a href="HomeCustomer.php" class="btn btn-danger" role="button"><strong>Go back</strong></a>

                        <input type="submit" class="btn btn-success" value="Confirm Changes"/>
                    </div>
                </form>
            </div>
<?php
    include("_footer.php");
?>