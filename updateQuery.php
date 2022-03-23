<?php
include 'connection.php';
$data = [
    'emp_name' => 'abc',
    'username' => 'abc@gmail.com',
    'password' => 'abc@123',
    'isAdmin' => '0'
];
$where = 'emp_id = 1';
function updateQuery($table, $data, $where){
    global $con;
    $temp = [];
    foreach ($data as $key => $val){
        $sqlQuery = "$key = '$val'";
        array_push($temp, $sqlQuery);
    }
    $temp=join(',',$temp);

    $sql = "UPDATE $table SET {$temp} where $where ";
    echo $sql;
    $result  = mysqli_query($con, $sql);
    if(true === $result){
        return true;
    }
    else {
        return "Error " . mysqli_connect_error($con);
    }
}

updateQuery('users', $data, $where);