<?php
include "connect.php";

$stmt = $db->query('SELECT * FROM assigment ORDER BY id ASC');
// foreach ($stmt as $row)
// {
//     echo $row['aname'] . "\n";
// }

?>