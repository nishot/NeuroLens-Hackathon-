<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
        background: linear-gradient(to right, #3ca5a9, #1b2d40);
        color: #fff;
        padding: 20px;

        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; /* Make sure it takes full height */
        flex-direction: column;
}

.logo {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .logo img {
    max-width: 450px;
    height: auto;
    border-radius: 100%;
  }
  
        .container {
        max-width: 800px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        }


        .section {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }

        h2 {
            margin-bottom: 10px;
            color: #00ffe4;
        }

        .full-width {
            grid-column: span 2;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
        }

        button {
            background-color: #00c2cb;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #018e94;
        }
    </style>
</head>
<body>
<div class="logo">
    <div class="logo2">
      <img src="newlogo.png" alt="NeuroLens Logo" />
    </div>
    </div>
    <h1 style="text-align:center; margin-bottom:30px;">Welcome to Your Health Dashboard</h1>

    <div class="container">
        <!-- Upload Text File -->
        <div class="section">
            <h2>Upload Hand Written Image</h2>
            <p>Upload your notes or reports:</p>
            <input type="file" accept=".txt,.pdf">
        </div>

        <!-- Upload Audio File -->
        <div class="section">
            <h2>Upload Audio File</h2>
            <p>Upload voice recordings or memos:</p>
            <input type="file" accept=".mp3,.wav">
        </div>

        <!-- Reports Section -->
        <div class="section full-width" style="text-align: center;">
            <h2>Reports</h2>
            <button>View Past Reports</button>
            <button style="margin-top:10px;">Monthly Summary</button>
        </div>

        <!-- Consult Doctor -->
        <div class="section full-width" style="text-align: center;">
            <h2>Need Help?</h2>
            <p>If you're feeling unwell or need guidance:</p>
            <button onclick="location.href='consult.php'">Consult Doctor</button>
        </div>
    </div>

</body>
</html>
