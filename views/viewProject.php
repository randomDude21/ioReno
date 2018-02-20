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
    <h1 class="m-2">Your Project</h1>
    <img class="view-img shadow_fade m-2" src="<?php echo $project->getImages() ?>"></div>
<div class="container">
<div class="card m-2">
  <h5 class="card-header"><?php echo $project->getTitle(); ?></h5>
  <div class="card-body">
    <h5 class="card-title">Project Type: <?php echo $project->get_type(); ?></h5>
	<p>Budget: $<?php echo $project->get_budget(); ?></p>
        <p class="card-text" style="white-space: pre-wrap;"><?php echo $project->get_description(); ?></p>
	<p class="font-weight-light">Address: <?php echo $project->getAddress(); ?></p>
    <a href="HomeCustomer.php" class="btn btn-danger" role="button">Go back</a>
  </div>
</div>
</div>

<?php
include("_footer.php");
?>
