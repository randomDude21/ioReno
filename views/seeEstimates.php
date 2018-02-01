<?php session_start(); 
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
?>
        <div class="body_all">
            <div style="margin-top: 40px; margin-left: 65px">
           </div>
            <div style="margin-top: 50px; margin-left: 65px">
                  <?php
                 if (isset($_SESSION["error"])) {
                        echo "<div class=\"alert alert-danger text-center\">" .
                        "<strong></strong>" . $_SESSION["error"] .
                        "</div>";
                        $_SESSION["error"] = null;
                    }
                    ?>
                <form action="../php/updateProject.php" method="POST">
                    <table>
                        
                    <?php
                         $project=$db->getProject($_GET["id"]);
                        
                         $estimates=$db->getProjectProposals($project->get_id());
                     if($estimates!=null)
                     {
                        foreach ($estimates as $est)
                        {
                            $contractor=$db->getContractor($est->get_coNum());
                            echo '<tr><td>'.$est->get_estimate().'</td><td>'.$contractor->get_coName().'</td>';
                        }
                     }
                     else
                     {
                         echo "You don't have any estimate for this project yet";
                     }
                    ?>
                    </table>
                    <div style="margin-top: 20px">
                        <a href="HomeCustomer.php" class="btn btn-danger" role="button"><strong>Go back</strong></a>
                    </div>
                </form>
            </div>
<?php
    include("_footer.php");
?>