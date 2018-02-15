<?php

session_start(); 
$flag=true;
if($_SESSION["login"]==true)
{
    require '../Classes/Database.php';
    $db=new Database();
    if ($_SESSION["customer"]!=null)
    {
        $customer=$db->getCustomerE($_SESSION["customer"]);
        $project=$db->getProject($_GET["id"]);
        if ($project->get_email()==$customer->get_email())
        {
                $db->deleteProject($project);
                header("location:../views/HomeCustomer.php");
        }
        else
        {
            $flag=false;
        }
    
    }
    else
    {
        $flag= false;
    }
}
else
{
    header("location:../views/index.php");
}
if (!$flag)
{
    header("location:../views/index.php");
}

?>
