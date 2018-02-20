<?php
require "..\\Classes\\Database.php";
session_start();



$name = $_POST["username"];
$_SESSION["username"] = $name;

$email = $_POST["email"];
$_SESSION["email"] = $email;

$phone = $_POST["phone"];
$_SESSION["phone"] = $phone;

$password = $_POST["password"];
$passwordConfirm = $_POST["passwordConfirm"];


$nextUrl = '../views/HomeCustomer.php';

$db = new Database();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $_SESSION['nameErr'] = "Only letters and white space allowed"; 
        $nextUrl = '../views/signup_customer.php';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailErr'] = "Invalid format and please re-enter valid email"; 
        $nextUrl = '../views/signup_customer.php';
    }
    if (in_array($email, $db->getCustomerEmails()) || in_array($email, $db->getContractorEmails())){
        $_SESSION['emailErr2'] = "A user already exists with that email";
        $nextUrl = '../views/signup_customer.php';
    }
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone) && strlen($phone) > 14){
        $_SESSION['phoneErr'] = "Invalid phone number"; 
        $nextUrl = '../views/signup_customer.php';
    }
    if (strlen($password) < 8) {
        $_SESSION["passErr1"] = "Password must be at least 8 characters.";
        $nextUrl = '../views/signup_customer.php';
    }
    if (!preg_match("#[0-9]+#", $password)) {
        $_SESSION["passErr2"] = "Password must contain at least one number.";
        $nextUrl = '../views/signup_customer.php';
    }
    if (!preg_match("#[a-zA-Z]+#", $password)) {
        $_SESSION["passErr3"] = "Password must contain at least one letter.";
        $nextUrl = '../views/signup_customer.php';
    }
    if ($password != $passwordConfirm) {
        $_SESSION['passErr'] = "Passwords do not match";
        $nextUrl = '../views/signup_customer.php';
    }
    
    
}
if ($nextUrl == '../views/HomeCustomer.php') {
    $password = sha1($_POST["password"]);
    $passwordConfirm = sha1($_POST["passwordConfirm"]);
    $passwordEmail = sha1($_POST["email"].$_POST["password"]);
    $date = date('Y-m-d', time());
    $customer = new Customer(0, $name, $email, $phone, $passwordEmail, $date);
    $db = new Database();
    $db->insertCustomer($customer);
    $_SESSION["login"] = true;
    $_SESSION["customer"] = $email;
    
    $_SESSION["username"] = null;
    $_SESSION["email"] = null;
    $_SESSION["phone"] = null;   
    header('Location: ' . $nextUrl);
}
else {
    header('Location: ' . $nextUrl);
}


 

?>