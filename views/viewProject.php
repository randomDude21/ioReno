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

<div class="container">
<div class="shadow_fade"><img class="view-img" src="<?php echo $project->getImages() ?>" width="82.5%"></div>

<div class="card">
  <h5 class="card-header"><?php echo $project->getTitle(); ?></h5>
  <div class="card-body">
    <h5 class="card-title">Project Type: <?php echo $project->get_type(); ?></h5>
	<h5><strong>Budget: $<?php echo $project->get_budget(); ?></strong></h5>
        <p class="card-text" style="white-space: pre-wrap;"><?php echo $project->get_description(); ?></p>
	<h5><strong>Address: $<?php echo $project->getAddress(); ?></strong></h5>
    <a href="HomeCustomer.php" class="btn btn-primary" role="button">Go back</a>
  </div>
</div>
</div>

<?php
include("_footer.php");
?>
