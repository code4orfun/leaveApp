<?php
include "connection.php";
function insertQuery($table,$data){

    global $con;
    $column = array_keys($data);
    $col = join(',',$column);

    $val = array_values($data);
    $sql  = join(' ', $data);
    $val = "'" . implode ( "', '", $val ) . "'";

    $sql = "INSERT INTO $table ($col) VALUES ($val)";
    echo $sql;
    $result = mysqli_query($con, $sql);
    if(true === $result){
        return true;
    }
    else{
        printf("error: %s\n", mysqli_error($con));
    }



}
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
    else{
        return "Error " .mysqli_connect_error($con);
    }


}
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

function getQuery($table,$where){

     global $con;

     $sql = "SELECT * from $table where $where";
     print_r($sql);
     $result = mysqli_query($con, $sql);


    if(!$result){
        die(mysqli_error($con));
    }
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo $row[0],$row[1],$row[2],$row[3],$row[4];
        }
    }
}
