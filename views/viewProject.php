<?php
session_start();

 
if (!$_SESSION["login"]){
        header("Location: index.php");
    }
else {
    include("_header.php");
}
if (!$_SESSION["login"])
{
    header("location:../views/index.php");
}
if (isset($_SESSION["customer"]))
{
    $db=new Database();
    $customer=$db->getCustomerE($_SESSION["customer"]);
}
$project = $db->getProject($_GET["id"]);
?>
<div class="container-fluid row" style="width: 85%; margin-left: auto; margin-right: auto; margin-top: 1%">
    <div class="col-sm-6">
        
        <h3><strong><?php echo $project->getTitle(); ?></strong></h3>
        <h4>Budget</h4>
            <span>$<?php echo $project->get_budget(); ?></span>
        <div><img class="view-img" src="<?php echo $project->getImages() ?>" width="82.5%"></div>
        <h4>Project Type</h4>
        <div class="description"><?php echo $project->get_type();?></div>
        <h4>Description</h4>
        <div class="description"><?php echo $project->get_description(); ?></div>
   
        <h4>Address</h4>
        <div class="description"><?php echo $project->getAddress(); ?></div>
        <a href="HomeCustomer.php" class="btn btn-danger" role="button"><strong>Go back</strong></a>
    </div>


</div>
<?php
include("_footer.php");
?>
