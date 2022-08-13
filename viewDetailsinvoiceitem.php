
<?php

if (isset($_GET['id'])) {
    include "db_conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);



    $sql = "SELECT * FROM invoice LEFT JOIN item c on (c.id = invoice.id) WHERE invoice.id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if(isset($_GET['action']) && $_GET['action']=='pdf'){
          require('vendor/html2pdf.php');

          $content = ' <img src="image/logo.jpeg">
          <b><h2>Invoice item report</b><br><br>
                      <b>Invoice Number  : </b> '.$row['invoice_no'].'<br><br>
                      <b>Date : </b> '.$row['date'].'<br><br>
                      <b>Customer : </b> '.$row['customer'].'<br><br>
                      <b>Item name : </b> '.$row['item_name'].'<br><br>
                      <b>Item code : </b> '.$row['item_code'].'<br><br>
                      <b>Item category : </b> '.$row['item_category'].'<br><br>
                      <b>Item unit price : </b> '.$row['unit_price'].'<br><br>
                     
                      
                    </center>';

          $pdf=new PDF_HTML();
          $pdf->SetFont('Arial','',12);
          $pdf->AddPage();
          $pdf->WriteHTML($content);
          $pdf->Output();
          exit;
          
        }
    } else {
        header("Location: invoiceread.php");
    }
}else{

}

    ?>

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

</head>

<body>
  <link rel="stylesheet" type="text/css" href="styles/header.css">
  
  <br>
  <br>

  <h5><b>
      <center>Invoice Item Report</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/viewinvoiceitem.php" method="post">

      <!-- <h class="display-4 text-center">Library Membership</h> -->
          
          <hr>
          <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>
          <div class="form-group">
            <label for="name">Invoice number</label>
            <input type="text" class="form-control" name="innum" value="<?= $row['invoice_no'] ?>" id="innum" readonly>
          </div>


          <div class="form-group">
            <label for="name">Invoiced date</label>
            <input type="text" class="form-control"  name="indate" value="<?= $row['date']  ?>"  id="indate" readonly>
          </div>

          <div class="form-group">
            <label for="name">Customer name</label>
            <input type="text" class="form-control"  name="cuname" value="<?= $row['customer']  ?>"  id="cuname" readonly>
          </div>

          <div class="form-group">
            <label for="name">Item name</label>
            <input type="text" class="form-control"  name="itname" value="<?= $row['item_name']  ?>"  id="itname" readonly>
          </div>


          <div class="form-group">
            <label for="name">Item code</label>
            <input type="text" class="form-control"  name="itcode" value="<?= $row['item_code']  ?>"  id="itcode" readonly>
          </div>


          <div class="form-group">
            <label for="name">Item category</label>
            <input type="text" class="form-control"  name="itcat" value="<?= $row['item_category']  ?>"  id="itcat" readonly>
          </div>

          <div class="form-group">
            <label for="name">Item unit price</label>
            <input type="text" class="form-control"  name="itprice" value="<?= $row['unit_price']  ?>"  id="itprice" readonly>
          </div>





          <br>
          <br>
          <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

          <a href="viewDetailsinvoiceitem.php?id=<?PHP echo $row['id'];?>&action=pdf" class="btn btn-primary">Generate Report</a>
          

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