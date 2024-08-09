<?php
session_start();
include ("connect.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  

$name=$_POST['offer_name'];
$content1=$_POST['content1'];
$content2=$_POST['content2'];
$content3=$_POST['content3'];
$content4=$_POST['content4'];


if (!empty($name))
{
    $query="INSERT INTO service (offer_name, content1, content2, content3, content4) VALUES ('$name','$content1','$content2','$content3','$content4')";
    mysqli_query($conn,$query);
    echo"<script type='text/javascript'> alert('we are catch you soon')</script>";
}
else{
    echo "<script type='text/javascript'>alert('please enter vaild information')</script>";

}


}


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 90px 180px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            background-color: #f4f4f4;
            
        }
        .contact-form {
          
            background: url('https://thumbs.dreamstime.com/z/beauty-salon-symbol-scissor-hairdressing-logo-56389346.jpg')no-repeat  center/cover;
            padding: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            opacity: 0.7;
        }
        .contact-form h2 {
            margin-bottom: 15px;
        }
        .contact-form .form-group {
            margin-bottom: 15px;
        }
        .contact-form .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .contact-form .form-group input,
        .contact-form .form-group textarea {
            /* width: 100%; */
            padding: 10px;
            border: 1px solid brown;
            border-radius: 4px;
            opacity: 0.7;
        }
        .contact-form .form-group textarea {
            resize: horizontal;
        }
        .contact-form .form-group button {
            background: #5cb85c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            justify-content: center;
            align-items: center;
            
        }
        .contact-form .form-group button:hover {
            background: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="contact-form">
        <h2>Services</h2>
        <form action="service.php" method="post">
            <div class="form-group">
                <label for="name">offer Name</label>
                <input type="text" id="offer_name" name="offer_name" required>
            </div>
            <div class="form-group">
                <label for="content1">Content 1</label><br>
                <input type="text" id="content1" name="content1" required>
            </div>
            <div class="form-group">
                <label for="content2">Content 2</label><br>
                <input type="text" id="content2" name="content2" required>
            </div>
            <div class="form-group">
                <label for="content3">Content 3</label><br>
                <input type="text" id="content3" name="content3" required>
            </div>
            <div class="form-group">
                <label for="content4">Content 4</label><br>
                <input type="text" id="content4" name="content4" required>
            </div>
           
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
