<?php
session_start();
$_SESSION["customer"] = null;
$_SESSION["contractor"] = null;
$_SESSION["login"] = null;
header("location: ../views/index.php");

?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

