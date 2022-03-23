<?php
include 'connection.php';
include 'login.php';
//include 'home.php';
?>
<?php
session_start();
if(isset($_SESSION['id'])){
    header('location:admin.php');
}
elseif (isset($_SESSION['emp_id'])){
    header('location:employee.php');
}


?>

<html>
<head>
 <title>Index page</title>
</head>
<body>

<form action="login.php" method="post">
    <input type = "username" name = "username" placeholder="User Name">
    <input type = "password" name = "password" placeholder="Password">
    <input type = "submit" name = "login" value = "login">
</form>
</body>
</html>
