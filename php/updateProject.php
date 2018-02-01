<?php

session_start();
require '../Classes/Database.php';
$db = new Database();
$project = $db->getProject($_SESSION['project']);
$flag = true;

$email = $_SESSION["customer"]; //get email from session login;


$_SESSION['error'] = '';
if (!is_numeric($_POST['budget']) || (double) $_POST['budget'] < 0) {
    $flag = false;
    $_SESSION['error'] .= 'You need to input a valid number<br>';
}
if (empty($_POST['desc'])) {
    $flag = false;
    $_SESSION['error'] .= 'Please input data in the description<br>';
}
if (empty($_POST['city'])) {
    $flag = false;
    $_SESSION['error'] .= 'Please input data in the city field<br>';
}
if (empty($_POST['address'])) {
    $flag = false;
    $_SESSION['error'] .= 'Please input data in the address field<br>';
}
if (!$_FILES["image"]["name"] == "") {
    $extension = array("jpeg", "jpg", "png", "gif");
    $image = $_FILES["image"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
//validate
    if (!empty($_FILES["image"]["name"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"];
            $uploadOk = 1;
        } else {
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
    } else {
        $time = time();
        $filename = hash('md5', $time + $email);
        move_uploaded_file($_FILES["image"]["tmp_name"], "../images/project_images/" . $filename . "." . $imageFileType);
        $imgData = "../images/project_images/" . $filename . "." . $imageFileType;
    }
}
else {
    //get old image location
    $imgData = $project->getImages();
    echo $imgData;
    echo "helloooooooooooooooooooooooooooo";
}




if ($flag) {
    $pro = new Project($project->get_id(), $project->get_email(), $_POST['title'], $_POST['desc'], $_POST["type"], $_POST['budget'], $_POST['address'], $_POST["city"], $imgData);
    $db->updateProject($pro);
    $_SESSION['error'] = null;
    $_SESSION['update'] = 'Your project has been succesfully updated';
    header("location: ../views/HomeCustomer.php");
} else {

    header("location:../views/editProject.php?id=" . $project->get_id());
}
?>
