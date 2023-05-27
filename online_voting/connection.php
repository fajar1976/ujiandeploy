<?php
error_reporting(1);
mysqli_connect('mysql', 'user', 'root') or die(mysqli_error( $mysqli));
mysqli_select_db('poll') or die(mysqli_error( $mysqli));


?>
