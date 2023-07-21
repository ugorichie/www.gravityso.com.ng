<?php

if (!isset($_GET['allowed']) || $_GET['allowed'] !== 'yes') {
    header("location: client.php"); // Redirect to a different page
    exit;
}

?>