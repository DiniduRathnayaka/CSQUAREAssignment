<?php include "php/readitem.php";   ?>
<!DOCTYPE html>
<html>

<head>
  <title> Maintenance</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" href="sstyle.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <title>Responsive Footer</title>

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


  <div class="container">
    <div class="box">
      <?php if (isset($_GET['success'])) { ?>

        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
      <?php } ?>
      <!-- <div class="form-group">
        <form action="search.php">
          <input type="text" name="search" placeholder="Enter Maintance ID">
          <input type="submit" value="Search">
      </div> -->
      <?php if (mysqli_num_rows($result)) { ?>


        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Item code</th>
              <th scope="col">Item name</th>
              <th scope="col">Item category</th>
              <th scope="col">Item sub category</th>
              <th scope="col">Quantity</th>
              <th scope="col">Unit price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
              $i++;
            ?>

              <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['item_code'] ?></td>
                <td><?php echo $rows['item_category']; ?></td>
                <td><?php echo $rows['item_subcategory']; ?></td>
                <td><?php echo $rows['item_name']; ?></td>
                <td><?php echo $rows['quantity']; ?></td>
                <td><?php echo $rows['unit_price']; ?></td>

                <td><a href="update.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a></td>
                <td><a href="delete.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a></td>
                <td><a href="viewDetails.php?id=<?= $rows['id'] ?>" class="btn btn-primary">View Details</a></td>

                </td>

              </tr>


            <?php   } ?>
          </tbody>
        </table>
      <?php   } ?>

      <div class="link-right">
        <a href="item.php" class="btn btn-primary">back</a>
      </div>
    </div>
  </div>
  <footer class="footer-distributed">


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
        <p>?? Control print Ltd.</p>
        <p>234/A Makola Road,</p>
        <p>Kiribathgoda</p>
      </div>
    </div>
  </footer>
</body>

</html>