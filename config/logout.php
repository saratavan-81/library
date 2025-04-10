<?php
session_start();

session_unset();

session_destroy();
session_name('dashboard');
header("Location: ../index.php");

die();
