<?php
session_start();
include ("connect.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if(isset($_POST['save'])){

$name=$_POST['name'];
$photo=$_POST['photo'];
$rating=$_POST['rating'];
$review=$_POST['review'];

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

    $query="insert into reviews values('$name','$photo','$rating','$review')";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        move_uploaded_file($_FILES["photo"]["tem_name"], "upload/".$_FILES["photo"]["name"]);
        $_SESSION['status'] = "image is successfully";
        header('Location: insert.php');
    }
    else{
        
    $query="insert into reviews values('$name','$photo','$rating','$review')";
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



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Panel</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   <div class="card-header bg-info">
                    <h4 class="text-white">Fetch Reviews</h4>
                   </div>
                    <div class="card-body">
                        <?php
                         
                            include("connect.php");

                            $query = "SELECT * FROM reviews";
                            $query_run = mysqli_query($conn, $query);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td>
                                        <?php   echo "<td><img src='" . htmlspecialchars($row['photo']) . "' width='100' height='100'></td>";?>
                                        </td>
                                        <td><?php echo htmlspecialchars($row['rating']); ?></td>
                                        <td><?php echo htmlspecialchars($row['review']); ?></td>
                                        <td><a href="" class="btn btn-info">Edit</a></td>
                                        <td><a href="" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php
                                    }
                                } else {
                                ?>
                                    <tr>
                                        <td colspan="5">No records available</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
