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

    $title = validate($_POST['title']);
    $fname = validate($_POST['fname']);
    $mname = validate($_POST['mname']);
    $lname = validate($_POST['lname']);
    $phone = validate($_POST['phone']);
    $district = validate($_POST['district']);
   

    $user_data = 'title=' . $title . '&fname=' . $fname . '&mname=' . $mname .'&lname=' . $lname . '&phone' . $phone. '&district' . $district;

    if (empty($title)) {
        header('Location:../index.php?error=Tile  is  required&$user_data');
    } elseif (empty($fname)) {
        header('Location:../index.php?error=First Name is  required&$user_data');
    } elseif (empty($mname)) {
        header('Location:../index.php?error=Middle Name is  required&$user_data');
    } elseif (empty($lname)) {
        header('Location:../index.php?error=Last Name is  required&$user_data');
    } elseif (empty($phone)) {
        header('Location:../index.php?error=Phone Number is  required&$user_data');

    } elseif (empty($district)) {
        header('Location:../index.php?error=Disrict is  required&$user_data');
    } else {

        $sql = " INSERT INTO  customer(title,first_name,middle_name,last_name,contact_no,district) VALUES('$title','$fname','$mname','$lname','$phone','$district')";

        $result = mysqli_query($conn, $sql);
        if ($result) {

            header('Location:../read.php?success=successfully create');
        } else {

            header('Location:../index.php?error=unknown error occurred&$user_data');
        }
    }
}
