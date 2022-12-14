  <?php include 'php/itemupdate.php'; ?>

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

  <title>Responsive Footer</title>

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
      <center>Store/Register Item Details Update Form</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/itemupdate.php" method="post">

      <h4 class="display-4 text-center">Update<h4>
          <hr>
          <hr>
          <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>
          <div class="form-group">
            <label for="name">Item code</label>
            <input type="text" class="form-control" name="itcode" value="<?= $row['item_code'] ?>" id="itcode">
          </div>


          <div class="form-group">
            <label for="name">Item name</label>
            <input type="text" class="form-control"  name="itname" value="<?= $row['item_name']  ?>"  id="itname" >
          </div>



          <div class="form-group">
        <label for="name">Item category</label>
        <select class="form-control " name ="itecat" data-toggle="dropdown"  id="itecat" >
            <option value="">--select--</option>
            <option value="Printers" <?PHP if($row['item_category']=='Printers'){ echo  "selected";}?>>Printers</option>
            <option value="Laptops" <?PHP if($row['item_category']=='Laptops'){ echo  "selected";}?>>Laptops</option>
            <option value="Gadgets" <?PHP if($row['item_category']=='Gadgets'){ echo  "selected";}?>>Gadgets</option>
            <option value="Inkbottels" <?PHP if($row['item_category']=='Inkbottels'){ echo  "selected";}?>>Ink bottels</option>
            <option value="Cartridges" <?PHP if($row['item_category']=='Cartridges'){ echo  "selected";}?>>Cartridges</option>
        </select>
        
        </div>

        <div class="form-group">
        <label for="name">Item sub category</label>
        <select class="form-control " name ="itescat" data-toggle="dropdown"  id="itescat" >
            <option value="">--select--</option>
            <option value="HP" <?PHP if($row['item_subcategory']=='HP'){ echo  "selected";}?>>HP</option>
            <option value="Dell" <?PHP if($row['item_subcategory']=='Dell'){ echo  "selected";}?>>Dell</option>
            <option value="Lenovo" <?PHP if($row['item_subcategory']=='Lenovo'){ echo  "selected";}?>>Lenovo</option>
            <option value="Acer" <?PHP if($row['item_subcategory']=='Acer'){ echo  "selected";}?>>Acer</option>
            <option value="Samsung" <?PHP if($row['item_subcategory']=='Samsung'){ echo  "selected";}?>>Samsung</option>
        </select>
        
        </div>


        <div class="form-group">
            <label for="name">Quantity</label>
            <input type="text" class="form-control" id="qty" name="qty" value="<?= $row['quantity']  ?>">
          </div>


          <div class="form-group">
            <label for="phone">Unit price</label>
            <input type="text" class="form-control" id="uprice" name="uprice" value="<?= $row['unit_price']  ?>">
          </div>
     




          <br>
          <br>
          <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

          <button type="submit" name="update" class="btn btn-primary"  onclick = "fun();">Update</button>

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
        <p>?? Control print Ltd.</p>
        <p>234/A Makola Road,</p>
        <p>Kiribathgoda</p>
      </div>
    </div>
  </footer>
</body>

</html>
  