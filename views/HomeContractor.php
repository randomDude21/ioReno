<?php
if (!$_SESSION["login"]){
        header("Location: index.php");
    }
    include("_header.php");

?>
<?php
    include("_footer.php");
?>