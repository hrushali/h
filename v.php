<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>PHP - AJAX - CRUD</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>PHP - AJAX - CRUD | Data without page reload using jQuery AJAX in PHP.</h4>
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#Student_AddModal">
                            Add
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="message-show"></div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Appointant Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>time</th>
                                    <th>date</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="studentdata"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            getdata();
        });

        function getdata() {
            $.ajax({
                type: "GET",
                url: "http://localhost/lucky/ajax-curd/fetch.php",
                dataType: "json", // Expecting JSON response
                success: function (response) {
                    $('.studentdata').empty(); // Clear previous data
                    $.each(response, function (key, value) {
                        $('.studentdata').append('<tr>' +
                            '<td class="stud_id">' + value.name + '</td>' +
                            '<td>' + value.email + '</td>' +
                            '<td>' + value.contact + '</td>' +
                            '<td>' + value.time + '</td>' +
                            '<td>' + value.date + '</td>' +
                            '<td>' + value.message + '</td>' +
                            '<td>' +
                            '<a href="#" class="badge btn-info viewbtn">VIEW</a>' +
                            '<a href="#" class="badge btn-primary edit_btn">EDIT</a>' +
                            '<a href="#" class="badge btn-danger">Delete</a>' +
                            '</td>' +
                            '</tr>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error:', status, error);
                }
            });
        }
    </script>

</body>
</html>
