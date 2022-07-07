<?php

$con=mysqli_connect("mysql.hostinger.ph","u695029436_root","!pRINCE1347","u695029436_wise_up_youth");
// $con=mysqli_connect("localhost","root","","e-Products");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}