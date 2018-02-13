<?php
session_start();
if (!$_SESSION["login"]) {
    header("Location: index.php");
} else {
    include("_header.php");
}
if (!$_SESSION["login"]) {
    header("location:../views/index.php");
}
if (isset($_SESSION["customer"])) {
    $db = new Database();
    $customer = $db->getCustomerE($_SESSION["customer"]);
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
            <table class="table-striped table-bordered">

<?php
$project = $db->getProject($_GET["id"]);

$estimates = $db->getProjectProposals($project->get_id());
$flag = false;
foreach ($estimates as $est) {
    if ($est->get_approved() == 1) {
        $flag = true;
        echo "You have accepted this estimate for this project:";

    }
}
if ($estimates != null && $flag == false) {
    foreach ($estimates as $est) {

        $contractor = $db->getContractor($est->get_coNum());
        echo '<tr><td>'.$est->get_estimate().'</td><td>'.$contractor->get_coName().'</td><td><a href="" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#selectConfirmation' . $est->get_id() . '">Select</a>';
        ?>
                <div class = "modal fade" id = "selectConfirmation<?php echo $est->get_id() ?>" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalCenterTitle" aria-hidden = "true">
                            <div class = "modal-dialog" role = "document">
                                <div class = "modal-content">
                                    <div class = "modal-header">
                                        <h5 class = "modal-title" id = "exampleModalLongTitle">Are you Sure?</h5>
                                        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                            <span aria-hidden = "true">&times;
                                            </span>
                                        </button>
                                    </div>
                                    <div class = "modal-body">
                                        Are you sure this is the estimate you wish to select?
                                    </div>
                                    <div class = "modal-footer">
                                        <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Cancel</button>
                                        <a href = "<?php echo '../php/approve_estimate.php?id=' . $est->get_id(); ?>" class = "btn btn-primary">Confirm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
        <?php       
        }
} else if ($estimates == null) {
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