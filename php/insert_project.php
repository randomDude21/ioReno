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

$date = date('Y-m-d', time());
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
if ($_FILES["image"]["size"] > 1000000) {
    $_SESSION["imgErr1"] = "Image size too large. ";
    echo "too big!!!";
    $uploadOk = 0;
    $nextUrl = "../views/createProject.php";
}
if (!in_array($imageFileType, $extension) && $imageFileType != "") {
    $_SESSION["imgErr2"] = "File not an image. ";
    $uploadOk = 0;
    $nextUrl = "../views/createProject.php";
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


if ($nextUrl == "../views/HomeCustomer.php") {
    $project = new Project(0, $email, $title, $description, $projectType, $budget, $address, $city, $imgData, $date);
    $db = new Database();
    $db->insertProject($project);
    $_SESSION["title"] = null;
    $_SESSION["budget"] = null;
    $_SESSION["description"] = null;
    $_SESSION["address"] = null;
    $_SESSION["city"] = null;
    header("Location: " . "../views/HomeCustomer.php");
}
else {
    header("Location: " . "../views/createProject.php");
}




