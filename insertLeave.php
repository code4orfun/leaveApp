<?php
include 'connection.php';
//error_reporting(0);

$data = [
    'description' => $desc = $_POST['description'],
    'date' => $date = $_POST['date'],
];
function insertLeave($table, $data){

    global $con;
    $column = array_keys($data);

    $col = join(',', $column);

    $val = array_values($data);
    $sql = join(' ', $data);
    $val = "'" . implode("', '", $val) . "'";
//    echo $val;

    $sql = "INSERT INTO $table ($col) VALUES ($val)";
//    echo $sql;
    $result = mysqli_query($con, $sql);

    if(true === $result){
        echo '<script>alert("Leave Application Sent to Admin")</script>';

    }
    else{
        echo  mysqli_connect_error($con);
    }
}
insertLeave('leaves', $data);