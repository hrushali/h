<?php
session_start();
include ("connect.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$time=$_POST['time'];
$date=$_POST['date'];

if (!empty($email) &&!empty($name) &&! is_numeric($email))
{
    $query="insert into login values('$name','$email','$contact','$time','$date')";
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
        <h2>Appoinment</h2>
        <form action="contact.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact No</label>
                <input type="contact" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" min="12:00" max="17:00" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
           
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
