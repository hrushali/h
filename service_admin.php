<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
  <title>STUDENT PROFILE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <br><br>

<div class="container">
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href='service.php' class='btn btn-square btn-primary'>ADD NEW</a> 
  </div>
  <div class="text-center"><h1>SERVICE DETAILS</h1></div><br>
<table class="table table-striped table-hover table-bordered border-primary text-center">
  <thead>
    <tr>
      <th scope="col">Offer Name</th>
      <th scope="col">Content 1</th>
      <th scope="col">Content 2</th>
      <th scope="col">Content 3</th>
      <th scope="col">Content 4</th>
        <th scope="col">Status</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php   
     $view = mysqli_query($conn, "select * from service");
    while($data = mysqli_fetch_assoc($view)){ 
          $name = $data['offer_name'];
          $content1 = $data['content1'];
          $content2 = $data['content2'];
          $content3 = $data['content3'];
          $content4 = $data['content4'];
         
          $status = $data['status']
      ?>

      <tr>
        <td><?php echo $name ; ?></td>
        <td><?php echo $content1; ?></td>
        <td><?php echo $content2; ?></td>
      <td><?php echo $content3; ?></td>
       <td><?php echo $content4; ?></td>
        <td>  <?php 

           if($data['status']==1) {
             echo '<p><a href="active.php?offer_name='.$data['offer_name'].'&status=0" class="btn btn-success">Active</a></p>';

           }
           else
           {
            echo '<p><a href="active.php?offer_name='.$data['offer_name'].'&status=1" class="btn btn-danger">Deactive</a></p>';
           }

          ?>
        </td>
        

          

      </tr>
    
  
   <?php  } ?>
  </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    document.getElementById('toggle-btn').addEventListener('click', function() {
      let hiddenServices = document.querySelectorAll('.hidden-service');
      hiddenServices.forEach(function(service) {
        if (service.style.display === 'none' || service.style.display === '') {
          service.style.display = 'table-row';
        } else {
          service.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>