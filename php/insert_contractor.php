<?php
require "..\\Classes\\Database.php";
session_start();
$db = new Database();
$name = $_POST["username"];
$_SESSION["username"] = $name;

$companyName = $_POST["companyName"];
$_SESSION["compname"] = $companyName;

$companyNumber = $_POST["companyNumber"];
$_SESSION["compnum"] = $companyNumber;

$email = $_POST["email"];
$_SESSION["email"] = $email;

$phone = $_POST["phone"];
$_SESSION["phone"] = $phone;

$password = sha1($_POST["password"]);
$passwordConfirm = sha1($_POST["passwordConfirm"]);
$passwordEmail = sha1($_POST["email"].$_POST["password"]);
$date = date('Y-m-d', time());
$nextUrl = '../views/index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!is_numeric($companyNumber)) {
        $_SESSION['companyErr1'] = "Company number format is invalid (numbers only)";
        
        $nextUrl = '../views/signup_contractor.php';
    }
    if (in_array($companyNumber, $db->getContractorsNum())){
        $_SESSION['companyErr2'] = "Company with that number already exists";
        $nextUrl = '../views/signup_contractor.php';
    }
    
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
    $contractor = new Contractor($companyNumber, $companyName, $phone, $email, $name, $passwordEmail, $date);
    
    $db->insertContractor($contractor);
    $_SESSION["username"] = null;
    $_SESSION["compname"] = null;
    $_SESSION["compnum"] = null;
    $_SESSION["email"] = null;
    $_SESSION["phone"] = null;
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
