<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php

echo "Form was received!<br>";

// Connect to your database
$host = "sql101.infinityfree.com";       
$user = "if0_39216875";             
$pass = "09060946854Tee";                 // Your DB password
$dbname = "if0_39216875_cojim";       // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "DB connected successfully<br>";
}

// Get form data
$name         = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email        = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$phone        = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
$share_live   = isset($_POST['share_live']) ? $_POST['share_live'] : '';
$prayer_date  = isset($_POST['prayer_date']) ? $_POST['prayer_date'] : '';
$summary      = isset($_POST['summary']) ? htmlspecialchars($_POST['summary']) : '';
$attachment   = ''; // Initialize attachment variable

// Handle file upload if a file was sent
if (!empty($_FILES['attachment']['name'])) {
    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    $original_filename = basename($_FILES["attachment"]["name"]);
    $unique_filename = time() . "_" . $original_filename;
    $target_file = $upload_dir . $unique_filename;

    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'pdf'];

    if (in_array($file_type, $allowed_types)) {
        if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) {
            $attachment = $target_file;
        } else {
            echo "<script>alert('Failed to upload file.'); window.history.back();</script>";
            exit();
        }
    } else {
        echo "<script>alert('Unsupported file type. Please upload jpg, png, or pdf.'); window.history.back();</script>";
        exit();
    }
}

// Insert into testimonies table

echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";

$sql = "INSERT INTO testimonies (name, email, phone, share_live, prayer_date, summary, attachment, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, 'pending')";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $name, $email, $phone, $share_live, $prayer_date, $summary, $attachment);

if ($stmt->execute()) {
    echo "<script>alert('✅ Testimony saved!'); window.location.href = 'submit_testimony.php';</script>";
} else {
    echo "<strong style='color:red'>❌ MySQL Error:</strong> " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
