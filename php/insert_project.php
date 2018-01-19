<?php

require "..\\Classes\\Database.php";
session_start();
$nextUrl = "../views/HomeCustomer.php";

$title = $_POST["title"];
$_SESSION["title"] = $title;

$budget = $_POST["budget"];
$_SESSION["budget"] = $budget;

$description = $_POST["description"];
$_SESSION["description"] = $description;

$address = $_POST["address"];
$_SESSION["address"] = $address;

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
if (isset($FILES["image"])) {
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
if ($_FILES["image"]["size"] > 500000) {
    echo "File size too large";
    $uploadOk = 0;
}
if (!in_array($imageFileType, $extension)) {
    echo "File not an image. ";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "File not uploaded!";
}
else {
$imgData = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$project = new Project(0, $email, $title, $description, $budget, $address, $imgData);
$db = new Database();
$db->insertProject($project);
header("Location: " . "../views/HomeCustomer.php");
}


