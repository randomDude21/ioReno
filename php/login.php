<?php
require "../Classes/Database.php";
require "../Classes/Contractor.php";
require "../Classes/Customer.php";
$db=new Database();
if($db->getCustomerE($_POST['Email'])!= null)
{
    $customer=$db->getCustomerE($_POST['Email']);
    if($customer->get_password()== sha1($_POST['Password']))
    {
        header("location:../views/HomeCustomer.php");
    }
}
else if($db->getContractorE($_POST['Email'])!= null)
{
    $contractor=$db->getContractorE($_POST['Email']);
    if ($contractor->get_password()== sha1($_POST['Password']))
    {
        header("location:../views/HomeContractor.php");
    }
}
else
{
    setcookie("message", "Invalid login attemp", time()+7);
}
?>
