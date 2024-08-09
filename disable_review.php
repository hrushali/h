<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Reviews</title>
    <style>
        .star-rating {
            display: flex;
            direction: row-reverse;
            font-size: 1.5rem;
            justify-content: center;
            padding: 0 1rem;
        }
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            color: #ffd700;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white">User Reviews</h4>
                    </div>
                    <div class="card-body">
                        <?php
                            session_start();
                            include("connect.php");

                            $query = "SELECT * FROM reviews";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                echo '<div class="row">';
                                foreach ($query_run as $row) {
                                    $rating = intval($row['rating']);
                        ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                        <?php   echo "<td><img src='" . htmlspecialchars($row['photo']) . "' width='100' height='100'></td>";?>
                                       
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                                                <div class="star-rating">
                                                    <!-- <?php for ($i = 5; $i >= 1; $i--) { ?>
                                                        <input type="radio" id="<?php echo $i; ?>-stars-<?php echo $row['id']; ?>" name="rating-<?php echo $row['id']; ?>" value="<?php echo $i; ?>" <?php if ($i == $rating) echo 'checked'; ?> disabled />
                                                        <label for="<?php echo $i; ?>-stars-<?php echo $row['id']; ?>" class="star">&#9733;</label>
                                                    <?php } ?>
                                                </div> -->
                                              
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                }
                                echo '</div>';
                            } else {
                                echo '<p>No reviews available</p>';
                            }
                        ?>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
