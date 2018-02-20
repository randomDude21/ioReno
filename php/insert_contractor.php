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

$password = $_POST["password"];
$passwordConfirm = $_POST["passwordConfirm"];


$nextUrl = '../views/index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!is_numeric($companyNumber) && strlen($companyNumber) != 10) {
        $_SESSION['companyErr1'] = "Company number format is invalid (numbers only), 10 valid digits";
        
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
    
    if (in_array($email, $db->getContractorEmails()) || in_array($email, $db->getCustomerEmails())) {
        $_SESSION['emailErr2'] = "A user already exists with that email"; 
        $nextUrl = '../views/signup_contractor.php';
    }
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone) && strlen($phone) > 14){
        $_SESSION['phoneErr'] = "Invalid phone number"; 
        $nextUrl = '../views/signup_contractor.php';
    }
    if ((strlen($password) < 8) || strlen($password) > 40) {
        $_SESSION["passErr1"] = "Password must be at least 8 characters.";
        $nextUrl = '../views/signup_contractor.php';
    }
    if (!preg_match("#[0-9]+#", $password)) {
        $_SESSION["passErr2"] = "Password must contain at least one number.";
        $nextUrl = '../views/signup_contractor.php';
    }
    if (!preg_match("#[a-zA-Z]+#", $password)) {
        $_SESSION["passErr3"] = "Password must contain at least one letter.";
        $nextUrl = '../views/signup_contractor.php';
    }
    if ($password != $passwordConfirm) {
        $_SESSION['passErr'] = "Passwords do not match. ";
        $nextUrl = '../views/signup_contractor.php';
    }
    
}
if ($nextUrl == '../views/index.php') {
    $password = sha1($_POST["password"]);
    $passwordConfirm = sha1($_POST["passwordConfirm"]);
    $passwordEmail = sha1($_POST["email"] . $_POST["password"]);
    $date = date('Y-m-d', time());
    $contractor = new Contractor($companyNumber, $companyName, $phone, $email, $name, $passwordEmail, $date, false);
    
    $db->insertContractor($contractor);
    $_SESSION["username"] = null;
    $_SESSION["compname"] = null;
    $_SESSION["compnum"] = null;
    $_SESSION["email"] = null;
    $_SESSION["phone"] = null;
    $_SESSION["registerMessage"] = "Thank you for registering your company with IOReno!" . "<br>" .
                                    "We will review your information and send an email notification you when you are approved.";
    header('Location: ' . $nextUrl);
}
else {
    header('Location: ' . $nextUrl);
}



 

?>
