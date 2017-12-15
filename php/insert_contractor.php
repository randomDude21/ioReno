<?php
require "..\\Classes\\Database.php";
session_start();

$name = $_POST["username"];
$companyName = $_POST["companyName"];
$companyNumber = $_POST["companyNumber"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = sha1($_POST["password"]);
$passwordConfirm = sha1($_POST["passwordConfirm"]);
$date = date('Y-m-d', time());
$nextUrl = '../views/index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $_SESSION['nameErr'] = "Only letters and white space allowed"; 
        $nextUrl = '../views/signup_contractor.php';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailErr'] = "Invalid format and please re-enter valid email"; 
        $nextUrl = '../views/signup_contractor.php';
    }
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)){
        $_SESSION['phoneErr'] = "Invalid phone number"; 
        $nextUrl = '../views/signup_contractor.php';
    }
    if ($password != $passwordConfirm) {
        $_SESSION['passErr'] = "Passwords do not match";
        $nextUrl = '../views/signup_contractor.php';
    }
    
}
if ($nextUrl == '../views/index.php') {
    $contractor = new Contractor($companyNumber, $companyName, $phone, $email, $name, $password, $date);
    $db = new Database();
    $db->insertContractor($contractor);
    $_SESSION["registerMessage"] = "Thank you for registering your company with IOReno!" . "<br>" .
                                    "We will review your information and send a notify you when you are approved.";
    header('Location: ' . $nextUrl);
    //insert contractor to database
    //send user to index with message explaining review
    
    header('Location: ' . $nextUrl);
}
else {
    header('Location: ' . $nextUrl);
}


 

?>