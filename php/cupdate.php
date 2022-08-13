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



    $sql = "SELECT * FROM customer  WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: read.php");
    }
} elseif (isset($_POST['update'])) {
    include "../db_conn.php";


    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

   


    $title = validate($_POST['title']);
    $fname = validate($_POST['fname']);
    $mname = validate($_POST['mname']);
    $lname = validate($_POST['lname']);
    $phone = validate($_POST['phone']);
    $district = validate($_POST['district']);
    

    $id = validate($_POST['id']);


    if (empty($title)) {
        header('Location:../update.php?id=$id&error=Full Name is  required');
    } elseif (empty($fname)) {
        header('Location:../update.php?id=$id&error=Student ID is  required');
    } elseif (empty($mname)) {
        header('Location:../update.php?id=$id&error=Phone Number is  required');
    } elseif (empty($lname)) {
        header('Location:../update.php?id=$id&error=Acadamic year is  required');
    } elseif (empty($phone)) {
        header('Location:../update.php?id=$id&error=Programme is  required');
    } elseif (empty($district)) {
        header('Location:../update.php?id=$id&error=Programme is  required');
    } else {

        $sql = " UPDATE  customer
     SET title='$title',fname='$fname',mname='$mname',lname='$lname',phone='$phone',district='$district'
     WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../read.php?success=successfully updated');
        } else {

            header('Location:../cupdate.php?id=$id&error=unknown error occurred&$user_data');
        }
    }
} else {
    header("Location: read.php");
}
