<?php
session_start();
if (!$_SESSION["login"]) {
    header("Location: index.php");
}
include("_header.php");
if (isset($_SESSION["update"])) {
    echo "<div class=\"alert alert-success text-center\">" .
    "<strong>Success! </strong>" . $_SESSION["update"] .
    "</div>";
    $_SESSION["update"] = null;
}
$db = new Database();
if (isset($_GET["status"])) {
    $proposals = $db->sortEstimates($_GET["status"], $contractor);
}
else {
    $proposals = $db->pastEstimates($contractor);
}

?>
<div class="container-fluid" style="width:85%">
    <h3>Sent Estimates</h3>
    <form action="pastEstimates.php" method="get">
        <ul class="nav">
            <li class="nav-item">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" name="status[]" value="1" <?php if (isset($_GET["status"]) && in_array('1', $_GET["status"])) echo "checked=chekced"; ?>>
                            <label for="approved">Approved</label>
                        </div>
                    </div>                      
                </div>
            </li>
            <li class="nav-item">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" name="status[]" value="2" <?php if (isset($_GET["status"]) && in_array('null', $_GET["status"])) echo "checked=chekced"; ?>>
                            <label for="pending">Pending</label>
                        </div>
                    </div>                      
                </div>
            </li>
            <li class="nav-item">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" name="status[]" value="0" <?php if (isset($_GET["status"]) && in_array('0', $_GET["status"])) echo "checked=chekced"; ?>>
                            <label for="denied">Denied</label>
                        </div>
                    </div>                      
                </div>
            </li>
        </ul>
        <input type="submit" value="Search">

    </form>
    <?php
    if ($proposals != null) {
        foreach ($proposals as $pro) {
            $pr = $db->getProject($pro->get_project());
            ?>
            <div class="card" style="width: 90%; margin-left: auto; margin-right: auto">
                <div class="row" >
                    <div class="col-sm-1">
                        <img src="<?php echo $pr->getImages(); ?>"  height="100px" width="100px">
                    </div>
                    <div class="col-sm-7 px-3">
                        <div class="card-block px-3">
                            <h4 class="card-title"><?php echo $pr->getTitle() ?></h4>
                            <p class="card-text">$<?php echo $pro->get_estimate() ?></p>
                            <p class="card-text"><?php
                            if ($pro->get_approved() == 2) {
                                echo '<strong><span style="color: #ec971f">Pending</span></strong>';
                            } else if ($pro->get_approved() == 1) {
                                echo '<strong><span style="color: green">Approved</span></strong>';
                            } else
                                echo '<strong><span style="color: red">Denied</span></strong>';
                            ?></p>
                        </div>

                    </div>
                                <?php if ($pro->get_approved() == 1) {
                                    ?>
                        <a href="seeClient.php?id=<?php echo $pro->get_project(); ?>" class="btn btn-primary" style="height:40%; margin-top: auto; margin-bottom: auto">Get customer information</a>
            <?php } ?>
                </div>

            </div>
                    <?php
                }
            } else {
                echo "You don't have any estimates yet!";
            }
            ?>
    <a href="HomeContractor.php" class="btn btn-danger" style="margin-left: 5%; margin-top: 2%">Go back</a>
</div>
<?php
include("_footer.php");
?>
