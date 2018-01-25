<?php

require "..\\Classes\\Database.php";
session_start();
$nextUrl = "../views/HomeCustomer.php";

$title = $_POST["title"];
$_SESSION["title"] = $title;

$budget = $_POST["budget"];
$_SESSION["budget"] = $budget;

$projectType = $_POST["projectType"];

$description = $_POST["description"];
$_SESSION["description"] = $description;

$address = $_POST["address"];
$_SESSION["address"] = $address;

$city = $_POST["city"];
$_SESSION["city"] = $city;

$email = $_SESSION["customer"]; //get email from session login;


if (!is_numeric($budget)) {
    $_SESSION["budgetErr"] = "Budget is not numeric";
    $nextUrl = "../views/createProject.php";
}


$extension = array("jpeg", "jpg", "png", "gif");
$image = $_FILES["image"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
//validate
if (isset($_FILES["image"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"];
        $uploadOk = 1;
    }
    else {
        echo "file is not an image!";
        $uploadOk = 0;
    }
}
if ($_FILES["image"]["size"] > 10000000) {
    echo "File size too large";
    $uploadOk = 0;
}
if (!in_array($imageFileType, $extension)) {
    echo "File not an image. ";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    $imgData = "../images/project_images/placeholder.jpg";
}
else {
    $time = time();
    $filename = hash('md5', $time + $email);
    move_uploaded_file($_FILES["image"]["tmp_name"], "../images/project_images/" . $filename . "." . $imageFileType);
    $imgData = "../images/project_images/" . $filename . "." . $imageFileType;
}



$project = new Project(0, $email, $title, $description, $projectType, $budget, $address, $city, $imgData);
$db = new Database();
$db->insertProject($project);
$_SESSION["title"] = null;
$_SESSION["budget"] = null;
$_SESSION["description"] = null;
$_SESSION["address"] = null;
$_SESSION["city"] = null;
header("Location: " . "../views/HomeCustomer.php");



