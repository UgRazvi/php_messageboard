<?php
    include "common.php";
    session_start();
    $email=$_SESSION["uid"];
    $password=$_SESSION["upass"];
    
    if($email==""&&$password=="")
    header("location:login.php");
?>

<html>
    <head>
        <title>Bin</title>
    </head>
    <body>
        <center>
            <br><br><br><br><br><br><br><br><br><br>
            <h1><b>No Mails Founds</b></h1>
        </center>
    </body>
</html>