<?php
include "db_conn.php";

$sql = "SELECT * FROM customer ORDER BY id ASC";

$result = mysqli_query($conn, $sql);
