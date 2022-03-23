<?php
include 'connection.php';


function getQuery($table){

    global $con;

    $sql = "SELECT * from $table";
//     print_r($sql);
    $result = $con->query($sql);
    if(!$result){
        die(mysqli_error($con));
    }
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<pre>" . $row[0] . " " . $row[1]. " " . $row[2]. " " .$row[3]. " " .$row[4];
        }
    }
}
getQuery('users');