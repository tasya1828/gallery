<?php

if (!empty($_SESSION['userid'])) {
    header("location:views/home.php");
} else {
    echo "";
}
