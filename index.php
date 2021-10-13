<!DOCTYPE html>
<html lang='eng'> 
<head>
<meta charset="UTF-8">

</head>
<body>
    <div class="login">
<form method ="POST">  </form>
<h1> log in <h1>
    <label for="emailbox" class="blocklabels"></label>
    <input type="text" id="name"></input>

    <label for="password" class="blocklabels"></label>
    <input type="password" class="blocklabels"></label>

    <input type="submit" value="login" id="signinbutton"></button>


    </div>
<?php

include("DB.php");
session_start();


if (isset($_POST["name"])){
    $username = ($_POST["name"]);
    $password =($_POST["password"]);

    $result = mysqli_query();


}


?>

</body>
</html>