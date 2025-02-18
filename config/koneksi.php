<?php 

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    database: "db_inventory_fadhil"
);

if (!$conn){
    die("connection is fail" . mysqli_connect_error());
}