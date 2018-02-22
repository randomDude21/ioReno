<?php
session_start(); 
require '../Classes/Database.php';
$db=new Database();
$contractor=$db->getContractorE($_SESSION['contractor']);
$project=$db->getProject($_SESSION['project']);
$flag=true;
if(!is_numeric($_POST['estimate'])||(double)$_POST['estimate']<0)
{
    $flag=false;
    $_SESSION['error'].='You need to input a valid number<br>';
}

if($flag)
{  
    if ($db->getProposalByProject($project->get_id()) != null) {
        $proposal= new Proposal($db->getProposalByProject($project->get_id())->get_id(), $contractor->get_coNum(), $project->get_id(), $_POST['estimate'], null);
        $db->replaceProposal($proposal);
    }
    else {
        $proposal= new Proposal(null, $contractor->get_coNum(), $project->get_id(), $_POST['estimate'], null);
        $db->insertProposal($proposal);
    }
    
    
    $_SESSION['update']='Your estimate has been sent to the client';
    
    header("location: ../views/HomeContractor.php" );
}
else
{
    
    header("location:../views/makeEstimate.php?id=".$project->get_id());
}
?>
