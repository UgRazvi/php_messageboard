<?php

include "connect.php";

session_start();
$email = $_SESSION["uid"];
$password = $_SESSION["upass"];
// echo"\n\n $email \n\n ";

$s = "Select * from compose WHERE receiverid='$email';";
echo ("\n Query : $s \n"); // To Check Whether Query Is Running Successfully Or Not .... 

// $s="Select * from compose  where receiverid='$email'";
$rs = mysqli_query($con, $s);
echo "<center>";
echo "<form>";
echo "<input type='submit' name='btn' align='right' value='Delete'></button><br><br>";
echo "<table border='1' cellpadding='10' width='950px'>";
echo "<tr>";
echo "<th>Sender";
echo "<th>Subject";
echo "<th>Date";
echo "<th>Time";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr>";
    // echo"<td> <input type='checkbox'>".$r[0];
    echo "<td>" . $r[0];
    echo "<td>" . $r[2];
    echo "<td>" . $r[4];
    echo "<td>" . $r[5];
}
echo "</table>";
echo "</center>";
echo "</form>";

if ($email == "" && $password == "")
    header("location:login.php");
