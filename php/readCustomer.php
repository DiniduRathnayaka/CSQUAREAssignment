<?php
include "connect.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){

    $stmt = $db->prepare('DELETE  FROM customer WHERE id =?');
    $result = $stmt->execute([$_GET['id']]);
    $deleted = $stmt->rowCount();
    if($deleted==1){
        $deleted = true;
    }else{
        $deleted = false;
    }


}

$stmt = $db->query('SELECT * FROM customer ORDER BY id ASC');

?>
<!DOCTYPE html>
<html>

<head>

  <title>Assigmanet List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="sstyle.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />


  <link rel="stylesheet" href="styles/footer.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


</head>

<body>
  <link rel="stylesheet" type="text/css" href="styles/header.css">
 
  <br>
  <br>

  <h5><b>
      <center>Regular Maintenance Request Table</center>
    </b>
  </h5>
  <?PHP if(isset($deleted) && $deleted==true){?>
    <center><h3 style="color:green; font-align:center">Record Deleted !</h3></center>
  <?PHP } ?>


  <div class="container">
    <div class="box">
      <?php if (isset($_GET['success'])) { ?>

        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
      <?php } ?>
      <div class="form-group">
        <form action="searchAssiment.php">
          <input type="text" name="search" placeholder="Enter Maintance ID">
          <input type="submit" value="Search">
      </div>
      <?php if (!empty($stmt)) { ?>


        <table class="table table-striped">
          <thead>
            <tr>
            <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">First Name</th>
              <th scope="col">Middle Name</th>
              <th scope="col">last Name</th>
              <th scope="col">Contact Number</th>
              <th scope="col">District</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach($stmt as $row) {
              $i++;
            ?>

              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['mname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['district']; ?></td>
                

                <td><a href="index.php?id=<?= $row['id'] ?>" class="btn btn-success">Update</a></td>
                <td><a href="readCustomer.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></td>

                </td>

              </tr>


            <?php   } ?>
          </tbody>
        </table>
      <?php   } ?>

      <div class="link-right">
        <a href="index.php" class="btn btn-primary">back</a>
      </div>
    </div>
  </div>
  <!-- <footer class="footer-distributed">


    <div class="footer-right">
      <p class="footer-company-about">
        <span>Follow us on</span>
      </p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="footer-center">

    </div>


    <div class="footer-left">
      <div class="footer-company-name">
        <p>© Control print Ltd.</p>
        <p>234/A Makola Road,</p>
        <p>Kiribathgoda</p>
      </div>
    </div>
  </footer> -->
</body>

</html>