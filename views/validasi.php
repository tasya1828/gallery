<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!empty($_SESSION['userid'])) {
    echo "";
} else {
    header("location:../index.php");
}
