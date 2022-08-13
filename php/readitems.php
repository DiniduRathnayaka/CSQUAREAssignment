<?php
include "db_conn.php";

$sql = "SELECT * FROM item ORDER BY id ASC";

$result = mysqli_query($conn, $sql);
