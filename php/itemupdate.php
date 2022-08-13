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



    $sql = "SELECT * FROM item WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: readitems.php");
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

    $itcode = validate($_POST['itcode']);
    $itecat = validate($_POST['itecat']);
    $itescat = validate($_POST['itescat']);
    $itname = validate($_POST['itname']);
    $qty = validate($_POST['qty']);
    $uprice = validate($_POST['uprice']);

    $id = validate($_POST['id']);


    if (empty($itcode)) {
        header('Location:../itemupdate.php?id=$id&error=Item Code ID is  required');
    } elseif (empty($itecat)) {
        header('Location:../itemupdate.php?id=$id&error=Item category  required');
    } elseif (empty($itescat)) {
        header('Location:../itemupdate.php?id=$id&error=Item sub category is  required');
    } elseif (empty($itname)) {
        header('Location:../itemupdate.php?id=$id&error= Item Name is  required');
    } elseif (empty($qty)) {
        header('Location:../itemupdate.php?id=$id&error= Item Quantity is  required');
    } elseif (empty($uprice)) {
        header('Location:../itemupdate.php?id=$id&error= Unit price is  required');
    } else {

        $sql = " UPDATE  item
     SET item_code ='$itcode',item_category='$itecat',item_subcategory='$itescat',item_name='$itname',quantity='$qty',unit_price='$uprice'
     WHERE id=$id";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../readitems.php?success=successfully updated');
        } else {

            header('Location:../itemupdate.php?id=$id&error=unknown error occurred&$user_data');
        }
    }
} else {
    header("Location: readitems.php");
}
