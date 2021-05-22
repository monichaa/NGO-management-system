<?php
session_destroy();
unset($_SESSION["id"]);
unset($_SESSION["name1"]);
header("Location: index.php");
?>