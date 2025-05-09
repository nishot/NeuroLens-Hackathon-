<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized");
}

if ($_FILES['audio_file']['error'] == UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $filename = basename($_FILES['audio_file']['name']);
    $target = $uploadDir . time() . "_" . $filename;

    if (move_uploaded_file($_FILES['audio_file']['tmp_name'], $target)) {
        echo "Audio uploaded successfully.";
        // Insert into DB or send to ML backend
    } else {
        echo "Failed to upload audio.";
    }
} else {
    echo "Error uploading file.";
}
?>
