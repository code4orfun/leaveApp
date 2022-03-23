

<html>

<head>



    <style>

        table

        {

            border-style:solid;

            border-width:2px;

            border-color:pink;

        }

    </style>

</head>

<body bgcolor="#EEFDEF">

<?php
include 'connection.php';
error_reporting(0);




function getQuery($table)
{

    global $con;

    $sql = "SELECT * from $table";
//     print_r($sql);
    $result = $con->query($sql);
    if (!$result) {
        die(mysqli_error($con));
    }


    echo "<table border='3'>

<tr>

<th>Id</th>

<th>Description</th>

<th>Date</th>

<th>Accept</th>

<th>Reject</th>


</tr>";

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)) {

        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['description'] . "</td>";

        echo "<td>" . $row['date'] . "</td>";

        echo "<td>" . $row['Accept'] . "</td>";

        echo "<td>" . $row['Reject'] . "</td>";

        echo "</tr>";

    }

    echo "</table>";

}
}
getQuery('leaves');
?>

</body>

</html>