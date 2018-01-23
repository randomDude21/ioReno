<?php session_start();
if (!$_SESSION["login"]){
        header("Location: index.php");
    }
    include("_header.php");
   
    $db=new Database();
    $projects = $db->getProjects();
    if($projects!=null)
     {
        echo '    <div class="row">';
        
        foreach ($projects as $pro)
        { 
            ?>
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
                            <a href="<?php echo '../views/makeEstimate.php?id='.$pro->get_id()?>" class="btn btn-primary btn-sm">Make a proposal</a>
                           
                        </li>
                       
                    </ul>

                </div>
            </div>
            
           
<?php
        }
     }
       echo '    </div>';

?>
<?php
    include("_footer.php");
?>