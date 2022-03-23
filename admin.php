<?php


?>
<?php
session_start();
?>


<html>

<title> Welcome Home ADMIN </title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1> <?php

//    echo '<h1> Welcome ADMIN </h1> ' .$_SESSION['username'];


    ?>  </h1>

<form action = 'logout.php' method="post">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="getLeave.php">View All Application</a>
                <a class="nav-item nav-link" href="getQuery.php">ALL Employee  </a>
                <a class="nav-item nav-link" href="addEmployee.php">Add Employee</a>

            </div>
        </div>
    </nav>
    <br/>
    <a href = "logout.php" ><input type = "submit" name = 'logout' value="logout"></a>
</form>

</html>
