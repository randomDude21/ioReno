<?php
session_start(); 
require '../Classes/Database.php';
$db=new Database();
$proposal = $db->getProposal($_GET["id"]);
$db->acceptEstimates($proposal);
$_SESSION["estimate"] = "You have confirmed your estimate! The contractor will contact you soon.";
header("location: ../views/HomeCustomer.php");