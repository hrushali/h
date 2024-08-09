<?php
//session_start();
include ("connect.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if(isset($_POST['save'])){

$name=$_POST['name'];
$photo=$_POST['photo'];
$rating=$_POST['rating'];
$rating=$_POST['review'];

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
    <style>
    .card .img { 
	
	width: 50px; 
	height: 50px; 
	border-radius: 20%; 

} 
.card .img { 
	
	width: 50px; 
	height: 50px; 
	border-radius: 20%; 
    display: flex; 
	align-items: center; 
	justify-content: center;
    margin-top:-0.5px; 



} 

.card .img img { 
	width: 100px; 
	height: 90px; 
	object-fit: cover; 
	border-radius: 50%; 
	border: 4px solid #fff; 
} 

.card h2 { 
	font-weight: 300; 
	font-size: 1rem; 
	margin: 25px 0 5px; 

} 
.card { 
	scroll-snap-align: start; 
	height: 200px; 
	list-style: none; 
	background: wheat; 
	border-radius: 8px; 
	display: flex; 
	cursor: pointer; 
	width: 130%; 
	padding-bottom: 5px; 
	align-items: center; 
	justify-content: center; 
	flex-direction: column;
    opacity: 0.9;
} 
</style>
  </head>
  <body>
    <!-- <div class="container mt-4"> -->
        <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
                <!-- <div class="card"> -->
                  
                    <!-- <div class="card-body"> -->
                        <?php
                         
                            include("connect.php");

                            $query = "SELECT * FROM reviews";
                            $query_run = mysqli_query($conn, $query);
                        ?>
                      
                                <?php
                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $row) {
                                ?>
                                    

                                    <li class="card"> 
                                    <div class="img"><?php   echo "<td><img src='" . htmlspecialchars($row['photo']) . "' width='100' height='100'></td>";?>
                                    </div>
                                   
                                    <h2 style="color: green; font-weight:bold;"> 
                                    <?php echo htmlspecialchars($row['name']); ?>
                            </h2> 

                        
                                           <!-- <div class="star-rating"> 
                                                
                                               // <?php
                                                //$rating = (int) $row['rating'];
                                                //for ($i = 5; $i >= 1; $i--) {
                                                    //$checked = $i == $rating ? 'checked' : '';
                                                  //  echo "<input type='radio' id='{$i}-stars' name='rating' value='{$i}' {$checked}/>";
                                                  //  echo "<label for='{$i}-stars' class='star'>&#9733;</label>";
                                                //}
                                                ?>                                                                                                                          
                                             </div> -->
                                             <h5 style="font-size:smaller; text-align:center;"><?php echo htmlspecialchars($row['review']); ?></h5>
                                            </li>
                                       
                               <?php
                                    }
                                } else {
                                ?>
                                    <td colspan="5">No records available</td>
                                    
                                <?php
                                }
                                ?>
                     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
