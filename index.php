<?php
session_start();
// error_reporting(0);
include "system/controller/connect.class.php";
$class = new system();
include "system/body/header.php";
include "system/body/navbar.php";
include "system/body/loadpage.php";
include "system/body/footer.php";

?>