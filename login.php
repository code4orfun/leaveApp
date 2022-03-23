<?php
include 'connection.php';
?>

<?php
global $con;

if($_SERVER['REQUEST_METHOD'] == "POST"){

$user = $_POST['username'];
$pass = $_POST['password'];
$isAdmin = $_POST['isAdmin'];

if(!empty($_POST['login'])) {

    $query = "SELECT * FROM users where username = '$user' and password = '$pass' and isAdmin = '1'";
    $sql = "SELECT * from users where username = '$user' and password = '$pass' and isAdmin = '0'";
    $emp = "SELECT emp_id from users where username = '$user' and password = '$pass'";

    $result = $con->query($query);
    $result_id = $con->query($sql);
//    $result_name = $con->query($name);


    if (!$result) {
        die(mysqli_error($con));
    }
    if (mysqli_num_rows($result)>0) {

        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['id'] = $sql;
//        $_SESSION['name'] = $name;

        header('Location:admin.php');
    }
    else if(mysqli_num_rows($result_id) > 0){
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['emp_id'] = $emp;
//        $_SESSION['name'] = $name;

        header('Location:employee.php');
    }
    else {
        header('Location:index.php');
    }
    }
}


?>

