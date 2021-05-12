<?php
session_start();
unset($_SESSION['login']);
//unset($_SESSION['accounttype']);
session_destroy();
header('Location:../index.php');
?>
