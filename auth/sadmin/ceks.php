<?php
session_start();

if(!isset($_SESSION['username'])){
    header ("Location: ../index.php");
}
if($_SESSION['level']!="superadmin")
{
    // die("Anda bukan Super Admin");
    header ("Location: ../admin");
}
?>