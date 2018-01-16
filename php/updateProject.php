<?php
session_start(); 
require '../Classes/Database.php';
$db=new Database();
$project=$db->getProject($_SESSION['project']);
$flag=true;
 $_SESSION['error']='';
if(!is_numeric($_POST['budget'])||(double)$_POST['budget']<0)
{
    $flag=false;
    $_SESSION['error'].='You need to input a valid number<br>';
}
if (empty($_POST['desc']))
{
    $flag=false;
    $_SESSION['error'].='Please input data in the description';
}
if($flag)
{
    $pro=new Project($project->get_id(),$project->get_email(), $_POST['desc'], $_POST['budget']);
    $db->updateProject($pro);
    $_SESSION['update']='Your project has been succesfully updated';
    header("location: ../views/HomeCustomer.php" );
}
else
{
    
    header("location:../views/editProject.php?id=".$project->get_id());
}
?>
