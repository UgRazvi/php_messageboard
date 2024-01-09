<?php
include "common.php";
include "connect.php";
session_start();
$email = $_SESSION["uid"];
$password = $_SESSION["upass"];

$s = "Select * from compose where senderid='$email'";
// echo ("\n Query : $s \n");
$rs = mysqli_query($con, $s);
echo "<center><table border='1' cellpadding='10' width='900px'>";
echo "<tr>";
echo "<th>Mark";
echo "<th>Receiver";
echo "<th>Subject";
echo "<th>Date";
echo "<th>Time";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr>";
    echo "<td><input type='checkbox'>";
    echo "<td>" . $r[1];
    echo "<td>" . $r[2];
    echo "<td>" . $r[4];
    echo "<td>" . $r[5];
}
echo "</table></center>";
// include "compose.php";
if ($email == "" && $password == "")
    header("location:login.php");
?>

<html>

<head>
    <title>Sent Mails</title>
</head>

<body>
    <?php
    echo "</table></center>";
    include "compose.php";
    ?>
</body>

</html>