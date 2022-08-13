
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



    $sql = "SELECT * FROM invoice WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if(isset($_GET['action']) && $_GET['action']=='pdf'){
          require('vendor/html2pdf.php');

          $content = ' <img src="image/logo.jpeg">
          <b><h2>Library Membership</b><br><br>
                      <b>Invoice Number  : </b> '.$row['invoice_no'].'<br><br>
                      <b>Date : </b> '.$row['date'].'<br><br>
                      <b>Customer : </b> '.$row['customer'].'<br><br>
                      <b>Item Count : </b> '.$row['item_count'].'<br><br>
                      <b>Invoice amount : </b> '.$row['amount'].'<br><br>
                      
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
      <center>Invoice report</center>
    </b>
  </h5>

  <div class="container">
    <form action="php/viewinvoice.php" method="post">

      <!-- <h class="display-4 text-center">Library Membership</h> -->
          
          <hr>
          <?php if (isset($_GET['error'])) { ?>

            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
          <?php } ?>
          <div class="form-group">
            <label for="name">Date</label>
            <input type="text" class="form-control" name="idate" value="<?= $row['date'] ?>" id="idate" readonly>
          </div>


          <div class="form-group">
            <label for="name">Time</label>
            <input type="text" class="form-control"  name="time" value="<?= $row['time']  ?>"  id="time"  readonly>
          </div>

          <div class="form-group">
            <label for="name">Invoice Number</label>
            <input type="text" class="form-control"  name="invonum" value="<?= $row['invoice_no']  ?>"  id="invonum" readonly >
          </div>

          <div class="form-group">
            <label for="name">Customer</label>
            <input type="text" class="form-control"  name="cusname" value="<?= $row['customer']  ?>"  id="cusname"  readonly>
          </div>


          <div class="form-group">
            <label for="name">Item Count</label>
            <input type="text" class="form-control"  name="itecount" value="<?= $row['item_count']  ?>"  id="itecount"  readonly>
          </div>


          <div class="form-group">
            <label for="name">Amount</label>
            <input type="text" class="form-control"  name="amount" value="<?= $row['amount']  ?>"  id="amount"  readonly>
          </div>





          <br>
          <br>
          <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

          <a href="viewDetailsInvoice.php?id=<?PHP echo $row['id'];?>&action=pdf" class="btn btn-primary">Generate Report</a>
          

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