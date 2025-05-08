<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to NeuroLens</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: linear-gradient(to top left, #1b2b34, #2d4c56, #5c8d8f);
            color: #fff;
            text-align: center;
            padding: 40px 20px;
        }
        .logo {
            max-width: 490px;
            margin: 0 auto 20px;
            cursor: pointer;
        }
        .about {
            max-width: 700px;
            cursor:pointer;
            margin: 5px auto;
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 10px;
        }
        .about h1 {
            margin-bottom: 10px;
            color: #00e5ff;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(6, 1fr); /* 3 boxes per row */
            column-gap: 10px; /* Decrease horizontal gap */
            row-gap: 50px;    /* Vertical gap */
            margin: 80px 0;
            justify-items: center;
            cursor: pointer;
            transition-property: transform;
            transition-duration: 0.8s;
}

        
        
        .gallery img {
            width: 200px;
            height: 250px;
            overflow: hidden;
           object-fit: cover;
        }
        .gallery img:hover{
            transform: translateY(-10px);
        }
        footer {
            margin-top: 70px;
            font-size: 0.9rem;
            color: #ccc;
        }
        .track-button {
            margin-top: 30px;
            padding: 12px 30px;
            font-size: 1rem;
            background-color: #00c2cb;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        .track-button:hover {
            background-color: #008b94;
        }
       
        .login-button {
            position: absolute;
            top: 60px;
            right: 30px;
            padding: 12px 30px;
            font-size: 1rem;
            background-color: #00c2cb;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-button:hover {
            background-color: #008b94;
        }

        .divider {
            border: none;
            height: 2px;
            background-color: grey;
            margin: 40px 0; 
            width: 80%;     
            margin-left: auto;
            margin-right: auto;
}



    </style>
</head>
<body>

    <!-- Logo -->
    <img src="newlogo.png" alt="NeuroLens Logo" class="logo">

    <form action="index.php" method="get">
        <button class="login-button">Login</button>
    </form>
    

    <!-- About Section -->
    <div class="about">
        <h1>About NeuroLens</h1>
        <p>
        NeuroLens is an intelligent tool designed to help identify early signs of memory or thinking difficulties through the way a person speaks or writes. By closely observing everyday communication, it offers insights into changes that may signal cognitive challenges like dementia or Alzheimer’s.
        With gentle, ongoing monitoring, NeuroLens provides a clear and easy-to-understand Cognitive Health Score, supporting individuals and caregivers in staying informed and proactive about brain health.
        </p>
    </div>

    <!-- Gallery Section -->
    <div class="gallery">
        
            <img src="images/daily score_imresizer.png" alt="Daily Scores">
            <img src="images/scheduling.png" alt="Scheduling">
            <img src="images/monthlyreport.png" alt="Monthly Report" >
            <img src="images/AI dashboard_imresizer.png" alt="AI Dashboard">
            <img src="images/user-friendly.png" alt="User-friendly interface">
            <img src="images/calender.PNG" alt="Calender">
    
    </div>

    <!-- Track Button -->
    <form action="index.php" method="get">
        <button class="track-button">Start Tracking ➜ </button>
    </form>
    
    <hr class="divider">

    <!-- Footer -->
    <footer>
        &copy; 2025 NeuroLens. All rights reserved.
    </footer>

</body>
</html>
