<?php
include("connect.php");

$name = $_GET['offer_name'];
$status = $_GET['status'];
$updatequery1 = "UPDATE service SET status=$status WHERE offer_name='$name'";
mysqli_query($conn, $updatequery1);
header('Location: service_admin.php');
?>
