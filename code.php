<?php
session_start();
include ("connect.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if(isset($_POST['save'])){

$name=$_POST['name'];
$photo=$_POST['photo'];
$rating=$_POST['rating'];

$allowed_extension = array('gif','jpg','jpeg');
$filename = $_FILES['photo']['name'];
$file_extension = pathinfo($filename, PATHINFO_EXTENSION);

if (file_exists("uploads/" .$_FILES['photo']['name']))
{
    $filename = $_FILES['photo']['name'];
    $_SESSION['status'] = "image existing" .$filename;
    header('Location: insert.php');
}
else{

    $query="insert into reviews values('$name','$photo','$rating')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        move_uploaded_file($_FILES["photo"]["tem_name"], "upload/".$_FILES["photo"]["name"]);
        $_SESSION['status'] = "image is successfully";
        header('Location: insert.php');
    }
    else{
        
    $query="insert into reviews values('$name','$photo','$rating')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        move_uploaded_file($_FILES["photo"]["tem_name"], "uploads/".$_FILES["photo"]["name"]);
        $_SESSION['status'] = "image store successfully";
        header('Location: insert.php');
    }
    else{
        $_SESSION['status'] = "image not insert";
        header('Location: insert.php');
    }

    }
}


}

}
    
?>
