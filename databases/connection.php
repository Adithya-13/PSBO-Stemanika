<?php
$connection = mysqli_connect("localhost", "root", "", "psbo_web");

// Check connection
if (mysqli_connect_errno()) {
    echo "database connection failed : " . mysqli_connect_error();
}
