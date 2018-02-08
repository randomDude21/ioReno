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
             ?>
                <div class="card">
                    <div class="row" >
                       
                        <div class="col-sm-7 px-3">
                            <div class="card-block px-3">
                               
                                <p class="card-text"><?php echo $pro->get_estimate() ?></p>
                                <p class="card-text">$<?php 
                                                            if ($pro->get_approved()==null)
                                                            {
                                                                echo "Pending";
                                                            }
                                                            else if($pro->get_approved()==1)
                                                            {
                                                                echo "Approved";
                                                            }
                                                            else
                                                                echo "Pending";
                                                            ?></p>
                                
                            </div>
                            
                        </div>
                      
                    </div>
            
                </div>
            <?php
        }
    }
    else
    {
        echo "You don't have any estimates yet!";
    }
   
    include("_footer.php");
?>
