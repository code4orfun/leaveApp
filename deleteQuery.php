<?php
include 'connection.php';

function deleteQuery($table,$where){

    global $con;

    $query = "DELETE FROM $table WHERE $where";
    $result = mysqli_query($con,$query);
    if(true === $result){
        return "Record Deleted Successfully";
    }
    else{
        return "Error " .mysqli_connect_error($con);
    }
}
