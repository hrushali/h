<?php

include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $content1 = $_POST['content1'];
        $content2 = $_POST['content2'];
        $content3 = $_POST['content3'];
        $content4 = $_POST['content4'];
       

        $query = "INSERT INTO service (name, content1,content2,content3,content4) VALUES ('$name', '$content1','$content2','$content3','$content4')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['status'] = "Service added successfully";
            header('Location: service.php');
            exit();
        } else {
            $_SESSION['status'] = "Failed to add service";
            header('Location: service.php');
            exit();
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
        #services-container {
            padding: 20px;
            background-color: black;
            opacity: 0.9;
        }

        #services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .box {
            background-color: yellow;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            width:250px;
            height: 250px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box h2 {
            text-align: center;
            font-size: 1 rem;
        }

        .box p {
            overflow: auto;
        }
    </style>
</head>
<body>
    <div id="services-container">
        <div id="services">
            <?php
            include("connect.php");

            $query = "SELECT * FROM service";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                    <div class="box">
                        <h2 class="h-secondary center"><?php echo htmlspecialchars($row['offer_name']); ?></h2>
                        <p>
                            <?php echo nl2br(htmlspecialchars($row['content1'])); ?><br>
                            <?php echo nl2br(htmlspecialchars($row['content2'])); ?><br>
                            <?php echo nl2br(htmlspecialchars($row['content3'])); ?><br>
                            <?php echo nl2br(htmlspecialchars($row['content4'])); ?><br>
                            ?>
                        </p>
                    </div>
            <?php
                }
            } else {
                echo '<p>No records available</p>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
