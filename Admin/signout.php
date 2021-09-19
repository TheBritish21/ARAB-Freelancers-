<?php

session_start();
//unset($_SESSION['userId']);
session_destroy();

header("Location:Admin_login.php");