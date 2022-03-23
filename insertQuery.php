<?php

include 'connection.php';
//include 'addEmployee.php';


$data = [
    'emp_name' =>  $emp_name = $_POST['emp_name'],
    'username' => $user = $_POST['username'],
    'password' =>  $pass = $_POST['password'],
    'isAdmin' =>  $isAdmin = $_POST['isAdmin']
    ];
function insertQuery($table, $data)
{


    global $con;
    $column = array_keys($data);

    $col = join(',', $column);

    $val = array_values($data);
    $sql = join(' ', $data);
    $val = "'" . implode("', '", $val) . "'";

    $sql = "INSERT INTO $table ($col) VALUES ($val)";
//    echo $sql;
    $result = mysqli_query($con, $sql);
    if (true === $result) {
//        return true;
        echo "Record Inserted In Table";
    } else {
        printf("error: %s\n", mysqli_error($con));
    }
//    echo "Record Inserted In Table";
}

insertQuery('users', $data);

