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

    $sql = "DELETE FROM item
            WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: readitems.php?success=successfully delete");
    } else {
        header("Location: readitems.php?error=unknown erro occurred&$
            delivery_data");
    }
} else {
    header("Location: readitems.php");
}
