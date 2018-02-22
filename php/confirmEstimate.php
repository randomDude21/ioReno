<?php
session_start(); 
require '../Classes/Database.php';
$db=new Database();
$contractor=$db->getContractorE($_SESSION['contractor']);
$project=$db->getProject($_SESSION['project']);
$flag=true;
$con=false;
if(!is_numeric($_POST['estimate'])||(double)$_POST['estimate']<0)
{
    $flag=false;
    $_SESSION['error'].='You need to input a valid number<br>';
}
$estimates=$db->getProjectProposals($project->get_id());
foreach ($estimates as $est)
{
    if($contractor->get_coNum()==$est->get_coNum())
    {
        $con=true;
    }
        
}
if($flag)
{  
    if ($con) {
        $proposal= new Proposal($db->getProposalByProject($project->get_id())->get_id(), $contractor->get_coNum(), $project->get_id(), $_POST['estimate'], null);
        echo $proposal->get_id().'<br>';
        $db->replaceProposal($proposal);
        echo "replace";
    }
    else {
        $proposal= new Proposal(null, $contractor->get_coNum(), $project->get_id(), $_POST['estimate'], null);
        echo $proposal->get_id().'<br>';
        $db->insertProposal($proposal);
        echo "insert";
    }
    
    
    $_SESSION['update']='Your estimate has been sent to the client';
    
    header("location: ../views/HomeContractor.php" );
}
else
{
    
    header("location:../views/makeEstimate.php?id=".$project->get_id());
}
?>
