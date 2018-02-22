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

<div class="container-fluid" style="width:85%">
    <h1 class="mt-2 mb-2">Project Listings</h1>
    <a href="pastEstimates.php" class="btn btn-info m-2">See your estimates</a>
        <div>
            <h3 class="m-2">Filter By: </h3>
            <form class="m-2" action="HomeContractor.php" method="get">
                <ul class="nav m-2">
                    <?php
                        include("../Classes/ProjectTypes.php");
                        foreach ($projectTypes as $val) {
                            ?>
                    <li class="nav-item">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="type[]" value="<?php echo $val; ?>" <?php if (isset($_GET["type"]) && in_array($val, $_GET["type"])) echo "checked=checked";?>>
                                        <label for="<?php echo $val; ?>"><?php echo $val ?></label>
                                    </div>
                                </div>
                                
                            </div>
                    </li>
                            <?php
                        }
                    ?>
                </ul>
                <input class="btn btn-success m-2" type="submit" value="Search">
                
            </form>
        </div>
    <?php
        if($projects!=null)
        {
        ?>
    <?php
        
        foreach ($projects as $pro)
        {
            $flag=true;
            $estimates = $db->getProjectProposals($pro->get_id());
            foreach ($estimates as $estimate) {

            if ($estimate->get_approved() == 1) {
                
                $flag=false;
            }
            }
            if($flag)
            {
            ?>
        <div class="card m-1">
            <div class="row" >
                <div class="col-sm-2">
                        <img src="<?php echo $pro->getImages(); ?>" style="width:100%">
                </div>
                <div class="col-sm-7">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $pro->getTitle() ?></h4>
                        <p class="card-text"><?php echo $pro->get_description(); ?></p>
                        <p class="card-text">$<?php echo $pro->get_budget(); ?></p>

                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <a href="makeEstimate.php?id=<?php echo $pro->get_id(); ?>" class="btn btn-primary center-block m-5">Read More</a>
                </div>
            </div>
        </div>
            
        <?php
            }
        }
        ?>
</div>
<?php
}
else {
?>
    <h3 class="m-2 font-weight-light">No Projects found for your search.</h3>
<?php
}
    include("_footer.php");
?>