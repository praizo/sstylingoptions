<?php

session_start();


if (isset($_SESSION['designer'])) {
	session_unset($_SESSION['designer']);
	session_destroy();

    header("location: index.php");

}


?>