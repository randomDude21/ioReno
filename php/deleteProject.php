<?php
session_start(); 
require '../Classes/Database.php';
$db=new Database();
$project=$db->getProject($_GET["id"]);

$db->deleteProject($project);
header("location:../views/HomeCustomer.php");

?>
