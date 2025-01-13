<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adarsh's Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Brygada+1918:wght@400;700&family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        /* Header Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        .container {
            padding: 10px 5%;
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .heading-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
        }
        .navbar {
            display: flex;
            justify-content: center;
            gap: 25px;
        }
        .header__item {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: 0.3s;
            padding: 15px 10px;
        }
        .header__item:hover {
            color: #0ef;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="nav-left">
            <h1 class="heading-title">Portfolio</h1>
        </div>
        <nav class="navbar">
            <a href="#main" class="header__item">Home</a>
            <a href="#about" class="header__item">About</a>
            <a href="#home-skills" class="header__item">Skills</a>
            <a href="#project" class="header__item">Projects</a>
            <a href="#contact-section" class="header__item">Contact</a>
        </nav>
    </div>
</header>
