<?php
$con = new mysqli("localhost", "root", "", "frith");

    if ($con->connect_error) {
        die("Connection Error!" .$con->connect_error);
    }
?>