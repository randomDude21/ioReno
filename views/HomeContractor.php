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
    $projects = $db->getProjects();
if($projects!=null)
{
?>
<div class="container-fluid" style="width:85%">
    <h1>Project Listings</h1>
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
                        <a href="#" class="btn btn-primary" style="height:30px;">Read More</a>
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