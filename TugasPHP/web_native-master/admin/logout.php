<?php
session_start();

unset($_SESSION['MEMBER']);
header("Location:/web_native-master");
?>