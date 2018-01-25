<?php
session_start(); 
require '../Classes/Database.php';
$db=new Database();
$project=$db->getProject($_SESSION['project']);
$flag=true;

echo $_POST["type"];

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
    $pro=new Project($project->get_id(),$project->get_email(),$_POST['title'], $_POST['desc'], $_POST["type"], $_POST['budget'], $_POST['address'], $_POST["city"], null);
    echo $pro->get_type();
    $db->updateProject($pro);
    $_SESSION['error']=null;
    $_SESSION['update']='Your project has been succesfully updated';
    header("location: ../views/HomeCustomer.php" );
}
else
{
    
    header("location:../views/editProject.php?id=".$project->get_id());
}
?>
