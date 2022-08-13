<?php include "php/invoiceread.php";  ?>

<?php
$con=mysqli_connect('localhost','root','','assignment');
$sub_sql="";
$toDate=$fromDate="";
if(isset($_POST['submit'])){
    $from=$_POST['from'];
    $fromDate=$from;
    $fromArr=explode("/",$from);
    $from=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];

    $to=$_POST['to'];
    $toDate=$to;
    $toArr=explode("/",$to);
    $to=$fromArr['2'].'-'.$toArr['1'].'-'.$toArr['0'];

    $sub_sql=" where date >= '$from' && date <= '$to'";
}
$res = mysqli_query($con,"select * from invoice $sub_sql order by id desc");




?>
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



  <link rel="stylesheet" href="styles/footer.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


</head>

<body>
  <link rel="stylesheet" type="text/css" href="styles/header.css">
 
  <br>
  <br>

  <h5><b>
      <center>Invoice report Table</center>
    </b>
  </h5>


  <div class="container">
    <div class="box">
      <?php if (isset($_GET['success'])) { ?>

        <div class="alert alert-success" role="alert">
          <?php echo $_GET['success']; ?>
        </div>
      <?php } ?>
  
      <?php if (mysqli_num_rows($result)) { ?>

      <div class="form-group">
       
      <form method= "post">
        <input type="text" id="from" name="from"  placeholder="From" required  value="<?php echo $fromDate?>">
        
        <input type="text" id="to" name="to"  placeholder="To" required  value="<?php echo $toDate?>">

        <input type="submit" name="submit" value="   Filter   ">

      </form>
       
      </div>
      <br>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Invoice Number</th>
              <th scope="col">Customer</th>
              <th scope="col">Item Count</th>
              <th scope="col">Amount</th>
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
                <td><?php echo $rows['date'] ?></td>
                <td><?php echo $rows['time']; ?></td>
                <td><?php echo $rows['invoice_no']; ?></td>
                <td><?php echo $rows['customer']; ?></td>
                <td><?php echo $rows['item_count']; ?></td>
                <td><?php echo $rows['amount']; ?></td>

                <td><a href="viewDetailsInvoice.php?id=<?= $rows['id'] ?>" class="btn btn-primary">View Details</a></td>
                

                </td>

              </tr>


            <?php   } ?>
          </tbody>
        </table>
      <?php   } ?>

      <div class="link-right">
        <a href="index.php" class="btn btn-primary">back</a>
      </div>

      <script>
  $( function() {
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          date_format :"dd/mm/yy",
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        date_format:"dd/mm/yy",
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>



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