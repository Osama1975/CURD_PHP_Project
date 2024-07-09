<?php
/* $con=mysqli_connect("localhost","root","","blog"); */
$con = mysqli_connect("sql8.freesqldatabase.com", "sql8718868", "Y248VYje7x", "sql8718868");

if (!$con) {
    die('Conection Failed' . mysqli_connect_errno());

}

