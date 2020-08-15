<?php
include("../Connections/capstone.php");
session_start();
if (isset($_SESSION['username'])) {
header("location:login.php");
}
?>