<?php
session_start();
    if (!isset($_SESSION["login"])) {
        header("location: index.php");
    }
    include("_header.php");
    if (isset($_SESSION["update"])) {
        echo "<div class=\"alert alert-success text-center\">" .
        "<strong>Success! </strong>" . $_SESSION["update"] .
        "</div>";
        $_SESSION["update"] = null;
    }
    
    
        ?>
    <h1>Your projects:</h1><br>
    <div class="row">
<?php

     $projects=$db->getCustomerProject($customer->get_email());
     if($projects!=null)
     {
        foreach ($projects as $pro)
        { ?>
            <div class="card shadow_fade" style="width: 18rem; margin:10px">
                <img class="card-img-top" src="../images/gt.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $pro->getTitle()?>
                    </h5>
                    <p class="card-text">
                        <?php echo $pro->get_budget()."$"?>
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="<?php echo '../views/seeEstimates.php?id='.$pro->get_id()?>" class="btn btn-primary btn-sm">See Estimates</a>
                            <a href="<?php echo '../views/editProject.php?id='.$pro->get_id()?>" class="btn btn-warning btn-sm">Edit</a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#deleteConfirmation<?php echo $pro->get_id(); ?>">Delete</a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="deleteConfirmation<?php echo $pro->get_id() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Are you Sure?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                        </div>
                        <div class="modal-body">
                            Once you delete your project you cannot retrieve it ever again.
                            <?php echo $pro->get_id() ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="<?php echo '../php/deleteProject.php?id='.$pro->get_id();?>" class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
     }
     else
     {
         echo "You don't have any projects yet";
     }

?>
    </div>
    <div style="margin-top: 40px; margin-left: 65px">
        <a href="createProject.php" class="btn btn-primary" role="button"><strong>Create a new project</strong></a>
    </div>
    <?php
    include("_footer.php");