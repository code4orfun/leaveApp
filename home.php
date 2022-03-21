<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['name'])){
    header('location:index.php');
}
?>

<html>

<title> Welcome Home </title>
<h1> Welcome

    <?php
    echo $_SESSION['username'];
    ?> </h1>

<form action = 'logout.php' method="post">
    <a href = "logout.php" ><input type = "submit" name = 'logout' value="logout"></a>
</form>

</html>
