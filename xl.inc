<?php

session_start();
 include_once "dbconnect/dbconnect.php";

if (isset($_SESSION['name_login']) && $_SESSION['name_login'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['name_login'] . "!";
}
else {
    echo "Please log in first to see this page.";
}

?>