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
    $proposals=$db->pastEstimates($contractor);
    if($proposals!=null)
    {
        foreach ($proposals as $pro)
        {
            $pr=$db->getProject($pro->get_project());
             ?>
<div class="card" style="width: 90%; margin-left: auto; margin-right: auto">
                    <div class="row" >
                       <div class="col-sm-1">
                                <img src="<?php echo $pr->getImages(); ?>"  height="100px">
                        </div>
                        <div class="col-sm-7 px-3">
                            <div class="card-block px-3">
                                <h4 class="card-title"><?php echo $pr->getTitle() ?></h4>
                                <p class="card-text">$<?php echo $pro->get_estimate() ?></p>
                                <p class="card-text"><?php 
                                                            if ($pro->get_approved()==null)
                                                            {
                                                                echo '<span style="color: #ec971f">Pending</span>';
                                                            }
                                                            else if($pro->get_approved()==1)
                                                            {
                                                                echo '<span style="color: green">Approved</span>';
                                                            }
                                                            else
                                                                echo '<span style="color: red">Denied</span>';
                                                            ?></p>
                                
                            </div>
                           
                        </div>
                       <?php  if ($pro->get_approved()==1)
                            { ?>
                                <a href="seeClient.php?id=<?php echo $pro->get_project(); ?>" class="btn btn-primary" style="height:40%; margin-top: auto; margin-bottom: auto">Get customer information</a>
                            <?php } ?>
                    </div>
            
                </div>
            <?php
        }
    }
    else
    {
        echo "You don't have any estimates yet!";
    }
   ?>
<a href="HomeContractor.php" class="btn btn-danger" style="margin-left: 5%; margin-top: 2%">Go back</a>
<?php
    include("_footer.php");
?>
