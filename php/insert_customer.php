<?php
require "C:\\ioReno\\Classes\\Database.php";


$name = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = sha1($_POST["password"]);
$date = date('Y-m-d', time());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    
}


$customer = new Customer(0, $name, $email, $phone, $password, $date);
$db = new Database();
$db->insertCustomer($customer);
header('Location: ..\\views\\index.php');    

?>