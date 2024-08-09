<?php
session_start();
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    
    // Handle photo upload (if needed)
    // Example: Upload photo to 'uploads' directory
    if ($_FILES['photo']['size'] > 0) {
        $photo = $_FILES['photo'];
        $photoName = time() . '-' . $photo['name'];
        $photoPath = 'uploads/' . $photoName;
        move_uploaded_file($photo['tmp_name'], $photoPath);
    } else {
        // Default photo path or handle without photo
        $photoPath = 'default.jpg';
    }
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $sql = "INSERT INTO reviews (name, photo, rating,review) VALUES ('$name', '$photoPath', '$rating','$review')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you for your review!');</script>";
    } else {
        echo "<script>alert('Error: Could not submit your review.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Review</title>
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
        .review-form {
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            opacity: 0.9;
            width: 400px;
        }
        .review-form h2 {
            margin-bottom: 15px;
            text-align: center;
        }
        .review-form .form-group {
            margin-bottom: 15px;
        }
        .review-form .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .review-form .form-group input,
        .review-form .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .review-form .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        .review-form .form-group button {
            background: #5cb85c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            width: 100%;
        }
        .review-form .form-group button:hover {
            background: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="review-form">
        <h2>Add Your Review</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <select id="rating" name="rating" required>
                    <option value="">Select Rating</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>
            <div class="form-group">
                <label for="photo">Photo (upload only jpeg jpg webg files)</label>
                <input type="file" id="photo" name="photo" >
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea id="review" name="review" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit Review</button>
            </div>
        </form>
    </div>
</body>
</html>