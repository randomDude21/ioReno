<?php
session_start(); 
require '../Classes/Database.php';
$db=new Database();
$proposal = $db->getProposal($_GET["id"]);
$db->acceptEstimates($proposal);

header("location: ../views/HomeCustomer.php");