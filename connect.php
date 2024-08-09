<?php
$server ="localhost";
$username="root";
$password="";
$dbname="database";
$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn){
    echo "";
}
else{
die;
}
?>