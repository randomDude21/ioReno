<?php
require "..\\Classes\\Database.php";


$name = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = sha1($_POST["password"]);
$date = date('Y-m-d', time());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed"; 
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid format and please re-enter valid email"; 
    }    
    
    
}


$customer = new Customer(0, $name, $email, $phone, $password, $date);
$db = new Database();
$db->insertCustomer($customer);
//header('Location: ..\\views\\index.php');    

?>