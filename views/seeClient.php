<?php session_start();
if (!$_SESSION["login"]){
        header("Location: index.php");
    }
    include("_header.php");
    if (isset($_SESSION["update"])) {
        echo "<div class=\"alert alert-success text-center\">" .
        "<strong>Success! </strong>" . $_SESSION["update"] .
        "</div>";
        $_SESSION["update"] = null;
    }
    $db=new Database();
    $project=$db->getProject($_GET["id"]);
    $customer=$db->getCustomerE($project->get_email());
    ?>

<div class="container">
    <h1 class="m-2">Customer Info and Project</h1>
    <img class="view-img shadow_fade m-2" src="<?php echo $project->getImages() ?>"></div>
<div class="container">
<div class="card m-2">
  <h5 class="card-header"><?php echo $project->getTitle(); ?></h5>
  <div class="card-body">
      <h5 class="card-title"><strong>Project Type:</strong> <?php echo $project->get_type(); ?></h5>
      <p><strong>Budget: </strong>$<?php echo $project->get_budget(); ?></p>
        <p class="card-text" style="white-space: pre-wrap;"><?php echo $project->get_description(); ?></p>
	<p class="font-weight-light">Address: $<?php echo $project->getAddress(); ?></p>
  </div>
</div>
</div>

    <div class="container">
        <div class="card m-2">
            <h5 class="card-header">Customer Information</h5>
            <div class="card-body">
                <p><strong>Name:</strong> <?php echo $customer->get_name(); ?></p>
                <p class="card-text"><strong>Phone Number:</strong> <?php echo $customer->get_phone(); ?></p>
                <p class="card-text"><strong>Email Address:</strong> <?php echo $customer->get_email(); ?></p>
                <a href="pastEstimates.php" class="btn btn-danger" role="button">Go back</a>
            </div>
        </div>
    </div>
<?php
include("_footer.php");
?>
