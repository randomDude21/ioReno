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
    if (isset($_GET["type"])) {
        
        $projects = $db->sortProjects($_GET["type"]);
    }
    else {
        $projects = $db->getProjects();
    }
    
    
    ?>
<div class="container-fluid">
    <a href="pastEstimates.php" class="btn btn-primary">See your estimates</a>
</div>
<?php
if($projects!=null)
{
?>
<div class="container-fluid" style="width:85%">
    <h1>Project Listings</h1>
        <div>
            <h3>Project Types</h3>
            <form action="HomeContractor.php" method="get">
                <ul class="nav flex-column">
                    <?php
                        include("../Classes/ProjectTypes.php");
                        foreach ($projectTypes as $val) {
                            ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="type[]" value="<?php echo $val; ?>" <?php if (isset($_GET["type"]) && in_array($val, $_GET["type"])) echo "checked=chekced"; ?>>
                                        <label for="<?php echo $val; ?>"><?php echo $val ?></label>
                                    </div>
                                </div>
                                
                            </div>
                            <?php
                        }
                    ?>
                </ul>
                <input type="submit" value="Search">
                <input type="reset" value="Clear">
            </form>
        </div>
    <?php
        foreach ($projects as $pro)
        { 
            ?>
        <div class="card">
                    <div class="row" >
                        <div class="col-sm-1">
                                <img src="<?php echo $pro->getImages(); ?>"  height="100px">
                        </div>
                        <div class="col-sm-7 px-3">
                            <div class="card-block px-3">
                                <h4 class="card-title"><?php echo $pro->getTitle() ?></h4>
                                <p class="card-text"><?php echo $pro->get_description(); ?></p>
                                <p class="card-text">$<?php echo $pro->get_budget(); ?></p>
                                
                            </div>
                            
                        </div>
                        <a href="makeEstimate.php?id=<?php echo $pro->get_id(); ?>" class="btn btn-primary" style="height:30px;">Read More</a>
                    </div>
            
                </div>
            
        <?php
        }
        ?>
</div>
<?php
}
?>
            
            
<?php
    include("_footer.php");
?>