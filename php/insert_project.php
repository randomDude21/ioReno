<?php
require "..\\Classes\\Database.php";
session_start();

$title = $_POST["title"];
$budget = $_POST["budget"];
$description = $_POST["description"];
$address = $_POST["address"];
$email = "test";//get email from session login;
$images = null;//???        
$extension = array("jpeg", "jpg", "png", "gif");

//validate



$project = new Project(0, $email, $title, $description, $budget, $address, $images);
$db = new Database();
$db->insertProject($project);
header("Location: " . "../views/HomeCustomer.php");