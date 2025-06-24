<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM testimonies WHERE id=$id");
}

header("Location: review_testimony.php");
exit;
