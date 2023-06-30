<?php

$db_host = "localhost";

// Username for the MySql database

$db_username = "id18818745_saharaf";

// Password for the MySql database

$db_pass = "}^=lpAW8%-U+|lrW";

// Name for the MySQL database

$db_name = "id18818745_scandiweb";

// Running the actual connection

$con = mysqli_connect("$db_host", "$db_username", "$db_pass") or die("could not connect to mysql");

mysqli_select_db($con,"$db_name") or die("no databse");


?>
