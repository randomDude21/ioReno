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
$_SESSION["project"] = $_GET["id"];
?>
<div class="container-fluid">
    <div class="col-sm-8">
        
        <h2><?php echo $project->getTitle(); ?></h2>
        <h3>Budget</h3>
            <span>$<?php echo $project->get_budget(); ?></span>
        <div><img class="view-img" src="<?php echo $project->getImages() ?>" width="82.5%"></div>
        <h3>Description</h3>
        <div class="description"><?php echo $project->get_description(); ?></div>
    </div>
    <div class="col-sm-6">
        <h3>Address</h3>
    </div>
    
        <h4>Make Estimate</h4>
        <form action="../php/confirmEstimate.php" method="POST">
            <input type="number" id="estimate" name="estimate">
            <span name="error"><?php if (isset($_SESSION['error'])) echo("{$_SESSION['error']}"); $_SESSION['error'] = ""; ?></span>
            
    
    <div style="margin-top: 20px">
        <a href="HomeContractor.php" class="btn btn-danger" role="button"><strong>Go back</strong></a>
        <input type="submit" class="btn btn-success" value="Submit">
        </form>
        </div>


</div>
<?php
include("_footer.php");
?>
