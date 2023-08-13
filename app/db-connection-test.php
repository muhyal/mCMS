<?php
include '../app/db-config.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
