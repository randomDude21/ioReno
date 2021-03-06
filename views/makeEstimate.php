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
$project = $db->getProject($_GET["id"]);
$_SESSION["project"] = $_GET["id"];
?>
<div class="container">
    <h1 class="m-2">Project Details</h1>
    <img class="view-img shadow_fade m-2" src="<?php echo $project->getImages() ?>"></div>
<div class="container"> 
    <div class="card m-2">
      <h5 class="card-header"><?php echo $project->getTitle(); ?></h5>
      <div class="card-body">
        <h5 class="card-title">Project Type: <?php echo $project->get_type(); ?></h5>
        <p>Budget: $<?php echo $project->get_budget(); ?></p>
            <p class="card-text" style="white-space: pre-wrap;"><?php echo $project->get_description(); ?></p>
        <p class="font-weight-light">Address: <?php echo $project->getAddress(); ?></p>
        
        <h3 class="m-2">Make Estimate</h3>
        <div class="form-group row m-2">  
            <form action="../php/confirmEstimate.php" method="POST">
                <input class="form-control col-9" type="number" maxlength="15" id="estimate" name="estimate">
                <span name="error" class="form-sm-2 text-danger"><?php if (isset($_SESSION['error'])) echo("{$_SESSION['error']}"); $_SESSION['error'] = ""; ?></span>
            <input type="submit" class="btn btn-success mt-2 mb-2" value="Submit">
            </form>
        </div>
          <a href="HomeContractor.php" class="btn btn-danger ml-2" role="button">Go back</a>
      </div>
    </div>
</div>
    
<?php
include("_footer.php");
?>
