<?php

if (isset($_POST['create'])) {
    include "../db_conn.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $itcode = validate($_POST['itcode']);
    $itname = validate($_POST['itname']);
    $itecat = validate($_POST['itecat']);
    $itescat = validate($_POST['itescat']);
    $qty = validate($_POST['qty']);
    $uprice = validate($_POST['uprice']);
   

    $user_data = 'itcode=' . $itcode . '&itname=' . $itname . '&itecat=' . $itecat .'&itescat=' . $itescat . '&qty' . $qty. '&uprice' . $uprice;

    if (empty($itcode)) {
        header('Location:../Item.php?error=Item Code  is  required&$user_data');
    } elseif (empty($itname)) {
        header('Location:../Item.php?error=Item Name is  required&$user_data');
    } elseif (empty($itecat)) {
        header('Location:../Item.php?error=Item category is  required&$user_data');
    } elseif (empty($itescat)) {
        header('Location:../Item.php?error=Item sub category is  required&$user_data');
    } elseif (empty($qty)) {
        header('Location:../Item.php?error=Quantity is  required&$user_data');

    } elseif (empty($uprice)) {
        header('Location:../Item.php?error=Unit price  required&$user_data');
    } else {

        $sql = " INSERT INTO  item(item_code,item_category,item_subcategory,item_name,quantity,unit_price) VALUES('$itcode','$itecat','$itescat','$itname','$qty','$uprice')";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../readitems.php?success=successfully create');
        } else {

            header('Location:../Item.php?error=unknown error occurred&$user_data');
        }
    }
}
