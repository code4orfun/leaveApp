<?php

session_start();
session_unset();
session_destroy();
echo "<br> You have been Logged Out!";
header('location:index.php');

?>