<?php
require "..\\Classes\\Database.php";
session_start();


echo "HEY!";
$name = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = sha1($_POST["password"]);
$date = date('Y-m-d', time());
$nextUrl = '../views/customer_home.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $_SESSION['nameErr'] = "Only letters and white space allowed"; 
        $nextUrl = '../views/signup_customer.php';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailErr'] = "Invalid format and please re-enter valid email"; 
        $nextUrl = '../views/signup_customer.php';
    }
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phone)){
        $_SESSION['phoneErr'] = "Invalid phone number"; 
        $nextUrl = '../views/signup_customer.php';
    }
    
}
if ($nextUrl == '../views/customer_home.php') {
    $customer = new Customer(0, $name, $email, $phone, $password, $date);
    $db = new Database();
    $db->insertCustomer($customer);
    header('Location: ' . $nextUrl);
}
else {
    header('Location: ' . $nextUrl);
}


 

?>