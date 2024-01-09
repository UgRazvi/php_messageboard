<?php

session_start();
$email=$_SESSION["uid"];
$password=$_SESSION["upass"];

    include "common.php";
    include "connect.php";
    $s="Select * from compose";
    // echo ("\n Query : $s \n"); // To Check Whether Query Is Running Successfully Or Not .... 
    $rs=mysqli_query($con,$s);
    echo"<center><table border='1' cellpadding='10' width='950px'>";
    echo"<tr>";
    echo"<th>Sender";
    echo"<th>Subject";
    echo"<th>Date";
    echo"<th>Time";
    while($r=mysqli_fetch_array($rs))
    {
        echo"<tr>";
        echo"<td>".$r[0];
        echo"<td>".$r[2];
        echo"<td>".$r[4];
        echo"<td>".$r[5];
    }
    echo"</table></center>";
    include "compose.php";

    if($email==""&&$password=="")
    header("location:login.php");
?>
<html>
    <head>
        <title>Spam Mails</title>
    </head>
    <body>
    </body>
</html>