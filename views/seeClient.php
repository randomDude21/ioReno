<?php session_start();
if (!$_SESSION["login"]){
        header("Location: index.php");
    }
    include("_header.php");
    if (isset($_SESSION["update"])) {
        echo "<div class=\"alert alert-success text-center\">" .
        "<strong>Success! </strong>" . $_SESSION["update"] .
        "</div>";
        $_SESSION["update"] = null;
    }
    $db=new Database();
    $project=$db->getProject($_GET["id"]);
    $customer=$db->getCustomerE($project->get_email());
    
    echo $customer->get_name()."<br>";
    echo $customer->get_email()."<br>";
    echo $customer->get_phone()."<br>";
    ?>