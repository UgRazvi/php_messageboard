<?php
include "common.php";
include "connect.php";
session_start();
$email = $_SESSION["uid"];
$password = $_SESSION["upass"];

$s = "SELECT * FROM compose WHERE receiverid = '$email' OR senderid = '$email'"; // Usman (Trial) Concept 

// echo ("\n Query : $s \n"); // To Check Whether Query Is Running Successfully Or Not .... 

$rs = mysqli_query($con, $s);

echo "<center><table border='1' cellpadding='10' width='950px'>";
echo "<tr>";
echo "<th>Mails";
echo "<th>Subject";
echo "<th>Date";
echo "<th>Time";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr>";
    echo "<td>" . $r[0];
    echo "<td>" . $r[2];
    echo "<td>" . $r[4];
    echo "<td>" . $r[5];
    echo "</center>";
}
if ($email == "" && $password == "")
    header("location:login.php");
?>
<html>

<head>
    <title>All Mails</title>
</head>

<body>
    <!-- <center>
        <br><br><br><br><br><br><br><br><br><br>
        <br>
        <h1><b>No Mails Founds</b></h1>
    </center> -->
</body>

</html>