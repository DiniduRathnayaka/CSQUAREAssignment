<?php include 'php/update.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title> Update</title>
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

  <script type = "text/javascript">
            function fun() {


               alert ("successfully Updated");
            }
      </script>     

</head>

<body>
  <link rel="stylesheet" type="text/css" href="styles/header.css">

  <br>
  <br>

  <h5><b>
      <center>Store/Register Customer Update Form</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/update.php" method="post">

      <h4 class="display-4 text-center">Update<h4>
          <hr>
          <hr>
          <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>

          <div class="form-group">
        <label for="name">Title</label>
        <select class="form-control " name ="title" data-toggle="dropdown"  id="title" required>
            <option value="">--select--</option>
            <option value="Mr" <?PHP if($row['title']=='Mr'){ echo  "selected";}?>>Mr</option>
            <option value="Mrs" <?PHP if($row['title']=='Mrs'){ echo  "selected";}?>>Mrs</option>
            <option value="Miss" <?PHP if($row['title']=='Miss'){ echo  "selected";}?>>Miss</option>
            <option value="Dr" <?PHP if($row['title']=='Dr'){ echo  "selected";}?>>Dr</option>
        </select>
        
        </div>


          <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control" name="fname" value="<?= $row['first_name'] ?>" id="fname" required>
          </div>

          <div class="form-group">
            <label for="name">Middle Name</label>
            <input type="text" class="form-control" name="mname" value="<?= $row['middle_name'] ?>" id="mname" required>
          </div>

          <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" class="form-control" name="lname" value="<?= $row['last_name'] ?>" id="lname" required>
          </div>

          <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $row['contact_no']  ?>" required>
          </div>

          <div class="form-group">
            <label for="name">District</label>
            <input type="text" class="form-control" name="district" value="<?= $row['district'] ?>" id="district" required>
          </div>



          <br>
          <br>
          <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

          <button type="submit" name="update" class="btn btn-primary" onclick = "fun();">Update</button>

    </form>
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
        <p>© Control print Ltd.</p>
        <p>234/A Makola Road,</p>
        <p>Kiribathgoda</p>
      </div>
    </div>
  </footer>
</body>

</html>