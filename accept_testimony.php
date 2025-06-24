<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("UPDATE testimonies SET status='accepted' WHERE id=$id");
}

header("Location: review_testimony.php");
exit;
