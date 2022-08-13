<!DOCTYPE html>
<html>

<head>
  <title> maintence</title>
  <!-- Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="sstyle.css">
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


               alert ("successfully saved");
            }
      </script>     

</head>

<body>
  <link rel="stylesheet" type="text/css" href="styles/header.css">
  
  <br>
  <br>
  <h5><b>
      <center>Store/Register Customer</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/create.php" method="post">

      <?php if (isset($_GET['error'])) { ?>

        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>


      <div class="form-group">
        <label for="name">Title</label>
        <select class="form-control " name ="title" data-toggle="dropdown" id="name" >
            <option value="">--select--</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Miss">Miss</option>
            <option value="Dr">Dr</option>
        </select>

        <!-- <input type="text" class="form-control" name="vtype"  value="<?PHP if(isset($values_array['title'])){ echo $values_array['title']; }?>" required/> -->
        <?PHP if(isset($errors_array['title'])){
            ?>
            <div class="viewError" style="color:red">Please Select Valid Title</div>
        <?PHP }?>
        
       
      </div>




      <div class="form-group">
        <label for="name">First Name</label>
        <input type="text" class="form-control" name="fname" value="<?php if (isset($_GET['fname']))
                                                                        echo ($_GET['fname']); ?>" id="name" placeholder="Enter First Name">
      </div>

      <div class="form-group">
        <label for="name">Middle Name</label>
        <input type="text" class="form-control" name="mname" value="<?php if (isset($_GET['mname']))
                                                                        echo ($_GET['mname']); ?>" id="name" placeholder="Enter Middle Name">
      </div>

      <div class="form-group">
        <label for="name">Last Name</label>
        <input type="text" class="form-control" name="lname" value="<?php if (isset($_GET['lname']))
                                                                        echo ($_GET['lname']); ?>" id="name" placeholder="Enter Last Name">
      </div>


      

      <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="tel" class="form-control" name= "phone"value="<?php if(isset($_GET['phone'])) 
                                                                         echo($_GET['phone']); ?>"  id="phone"   placeholder="Enter Contact Number">
    </div>

   

       
      

     

      <div class="form-group">
        <label for="name">District</label>
        <input type="text" class="form-control" name="district" value="<?php if (isset($_GET['district']))
                                                                        echo ($_GET['district']); ?>" id="name" placeholder="Enter District">
      </div>

  


      <br>
      <br>

      <button type="submit" name="create" class="btn btn-primary" onclick = "fun();">Submit</button>
      <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='index.php'">
      <a href="read.php" class="btn btn-primary"> view</a>



    </form>
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
        <p>© Control print Ltd.</p>
        <p>234/A Makola Road,</p>
        <p>Kiribathgoda</p>
      </div>
    </div>
  </footer>
</body>

</html>