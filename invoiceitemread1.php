<?php
include "db_conn.php";

// $con=mysqli_connect('localhost','root','','assignment');
// $sub_sql="";
// $toDate=$fromDate="";
// if(isset($_POST['submit'])){
//     $from=$_POST['from'];
//     $fromDate=$from;
//     $fromArr=explode("/",$from);
//     $from=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];

//     $to=$_POST['to'];
//     $toDate=$to;
//     $toArr=explode("/",$to);
//     $to=$fromArr['2'].'-'.$toArr['1'].'-'.$toArr['0'];

//     $sub_sql=" where date >= '$from' && date <= '$to'";
// }
// $res = mysqli_query($con,"select * from invoice $sub_sql order by id desc");


$sql = "SELECT * FROM customer  ORDER BY id ASC";

$result = mysqli_query($conn, $sql);
