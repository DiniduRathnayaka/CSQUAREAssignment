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



    $sql = "SELECT * FROM invoice  WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: invoiceread.php");
    }
// } elseif (isset($_POST['update'])) {
//     include "../db_conn.php";


//     function validate($data)
//     {
//         $data = trim($data);
//         $data = stripslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }

   


//     $idate = validate($_POST['idate']);
//     $time = validate($_POST['time']);
//     $invonum = validate($_POST['invonum']);
//     $cusname = validate($_POST['cusname']);
//     $itecount = validate($_POST['itecount']);
//     $amount = validate($_POST['amount']);
    

//     $id = validate($_POST['id']);


//     if (empty($idate)) {
//         header('Location:../update.php?id=$id&error=Full Name is  required');
//     } elseif (empty($time)) {
//         header('Location:../update.php?id=$id&error=Student ID is  required');
//     } elseif (empty($invonum)) {
//         header('Location:../update.php?id=$id&error=Phone Number is  required');
//     } elseif (empty($cusname)) {
//         header('Location:../update.php?id=$id&error=Acadamic year is  required');
//     } elseif (empty($itecount)) {
//         header('Location:../update.php?id=$id&error=Programme is  required');
//     } elseif (empty($amount)) {
//         header('Location:../update.php?id=$id&error=Programme is  required');
//     } else {

//         $sql = " UPDATE  invoice
//      SET idate='$idate',time='$time',invonum='$invonum',cusname='$cusname',itecount='$itecount',amount='$amount'
//      WHERE id=$id";

//         $result = mysqli_query($conn, $sql);
//         if ($result) {

//             header('Location:../invoiceread.php?success=successfully updated');
//         } else {

//             header('Location:../update.php?id=$id&error=unknown error occurred&$user_data');
//         }
//     }
} else {
    header("Location: invoiceread.php");
}
