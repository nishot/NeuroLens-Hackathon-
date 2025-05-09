<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NeuroLens Dashboard</title>
    <link rel="stylesheet" href="dashboard2.css">
</head>
<body>
    <div class="dashboard">
        <h1>🧠 NeuroLens Dashboard</h1>
        
        <div class="section">
            <h2>📊 Daily Score</h2>
            <p>Your current Cognitive Score: <span class="score">78</span>/100</p>
        </div>

        <div class="section">
            <h2>📈 Monthly Report</h2>
            <canvas id="reportChart" width="400" height="200"></canvas>
        </div>

        <div class="section">
            <h2>🗓️ Assessment Calendar</h2>
            <input type="date" id="calendar">
        </div>

        <div class="section">
            <h2>🎤 Upload Voice Sample</h2>
            <form action="upload_audio.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="audio_file" accept="audio/*" required>
                <button type="submit">Upload</button>
            </form>
        </div>

        <div class="section">
            <h2>📝 Text Submission</h2>
            <textarea placeholder="Write a short story or journal entry..."></textarea>
            <button>Submit Text</button>
        </div>

        <div class="section">
            <h2>📋 Survey History</h2>
            <ul>
                <li>Sleep quality: Good</li>
                <li>Physical activity: Moderate</li>
                <li>Memory concern: Low</li>
            </ul>
        </div>

        <div class="section">
            <h2>🚨 AI Warnings</h2>
            <p>No unusual patterns detected.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="dashboard2.js"></script>
</body>
</html>
