<?php
require "../Classes/Database.php";
session_start();
$db=new Database();
$email=trim($_POST["Email"]);

if($db->getCustomerE($email)!= null)
{
    $customer=$db->getCustomerE($email);
    if($customer->get_password()== sha1($email.$_POST['Password']))
    {

        $_SESSION["invalidLogin"]=null;

        $_SESSION["login"] = true;
        $_SESSION["customer"] = $customer->get_email();

        header("location:../views/HomeCustomer.php");
    }
    else
    {
        $_SESSION["invalidLogin"]="Invalid login attempt";
        header("location:../views/index.php");
    }
}
else if($db->getContractorE($email)!= null)
{
    
    $contractor=$db->getContractorE($email);
    if ($contractor->get_password()== sha1($email.$_POST['Password']))
    {
        if ($contractor->get_approved()==1)
        {
            $_SESSION["invalidLogin"]=null;
            $_SESSION["login"]=true;
            $_SESSION['contractor']=$contractor->get_email();
            header("location:../views/HomeContractor.php");
        }
        else
        {
            $_SESSION["invalidLogin"]="You have not been approved yet";
            header("location:../views/index.php");
        }
    }
    else
    {
        $_SESSION["invalidLogin"]="Invalid login attempt";
        header("location:../views/index.php");
    }
}
else if ($email== 'admin'&& $_POST['Password']== 'admin')
{
    $_SESSION['admin']=true;
    header("location:../views/AdminHome.php?time=All Time&id=Dashboard");
}
else
{
    $_SESSION["invalidLogin"]="Invalid login attempt";
    header("location:../views/index.php");
}
?>
