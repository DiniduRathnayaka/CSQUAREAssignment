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
      <center>Store/Register Item details Form</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/createitem.php" method="post">

      <?php if (isset($_GET['error'])) { ?>

        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>


      <div class="form-group">
    <label for="phone">Item Code</label>
    <input type="text" class="form-control" name= "itcode"value="<?php if(isset($_GET['itcode'])) 
                                                                         echo($_GET['itcode']); ?>"  id="name"   placeholder="Enter Item Code">
    </div>


    <div class="form-group">
        <label for="name">Item Name</label>
        <input type="text" class="form-control" name="itname" value="<?php if (isset($_GET['itname']))
                                                                        echo ($_GET['itname']); ?>" id="name" placeholder="Enter Item Name">
      </div>






      <div class="form-group">
        <label for="name">Item category</label>
        <select class="form-control " name ="itecat" data-toggle="dropdown" id="name" >
            <option value="">--select--</option>
            <option value="Printers">Printers</option>
            <option value="Laptops">Laptops</option>
            <option value="Gadgets">Gadgets</option>
            <option value="Inkbottels">Ink bottels</option>
            <option value="Cartridges">Cartridges</option>
        </select>

        <!-- <input type="text" class="form-control" name="vtype"  value="<?PHP if(isset($values_array['itecat'])){ echo $values_array['itecat']; }?>" required/> -->
        <?PHP if(isset($errors_array['itecat'])){
            ?>
            <div class="viewError" style="color:red">Please Select Valid Title</div>
        <?PHP }?>
        
       
      </div>

      <div class="form-group">
        <label for="name">Item sub category</label>
        <select class="form-control " name ="itescat" data-toggle="dropdown" id="name" >
            <option value="">--select--</option>
            <option value="HP">HP</option>
            <option value="Dell">Dell</option>
            <option value="Lenovo">Lenovo</option>
            <option value="Acer">Acer</option>
            <option value="Samsung">Samsung</option>
        </select>

        <!-- <input type="text" class="form-control" name="vtype"  value="<?PHP if(isset($values_array['itescat'])){ echo $values_array['itesat']; }?>" required/> -->
        <?PHP if(isset($errors_array['itescat'])){
            ?>
            <div class="viewError" style="color:red">Please Select Valid Title</div>
        <?PHP }?>
        
       
      </div>


      <div class="form-group">
    <label for="phone">Quantity</label>
    <input type="number" class="form-control" name= "qty"value="<?php if(isset($_GET['qty'])) 
                                                                         echo($_GET['qty']); ?>"  id="name"   placeholder="Enter Quantity ">
    </div>

     


      <div class="form-group">
        <label for="name">Unit price</label>
        <input type="text" class="form-control" name="uprice" value="<?php if (isset($_GET['uprice']))
                                                                        echo ($_GET['uprice']); ?>" id="name" placeholder="Enter Unit price">
      </div>

  


      <br>
      <br>

      <button type="submit" name="create" class="btn btn-primary" onclick = "fun();">Submit</button>
      <input type="button" name="clear" value="Clear" class="btn btn-primary" onclick="window.location.href='Item.php'">
      <a href="readitems.php" class="btn btn-primary"> view</a>



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