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
        <a href="pastEstimates.php" class="btn btn-danger" role="button"><strong>Go back</strong></a>
    </div>
    <div class="col-sm-6" style="margin-top: 3%">
    <h3>Customer Information</h3>
        <div>
            <strong>Name:</strong> <?php echo $customer->get_name(); ?><br>
            <strong>Phone Number:</strong> <?php echo $customer->get_phone(); ?><br>
            <strong>Email Address:</strong> <?php echo $customer->get_email(); ?><br>
    </div>


</div>
<?php
include("_footer.php");
?>
