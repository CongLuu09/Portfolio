<?php
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <style>
        
        header {
            background: linear-gradient(to right, #2c3e50, #4ca1af);
            padding: 15px 0;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        nav {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: 500;
            padding: 10px 15px;
            transition: 0.3s ease-in-out;
            border-radius: 5px;
        }

        nav ul li a:hover, nav ul li a.active {
            background: rgba(255, 255, 255, 0.2);
        }

        
        .menu-toggle {
            display: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            nav ul {
                display: none;
                flex-direction: column;
                background: #2c3e50;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                text-align: center;
                padding: 10px 0;
            }

            nav ul.show {
                display: flex;
            }

            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>

<header>
    <nav>
        <a href="<?= BASE_URL ?>index.php" class="logo">MyPortfolio</a>
        <span class="menu-toggle"><i class="fas fa-bars"></i></span>
        <ul>
            <li><a href="<?= BASE_URL ?>index.php" class="active">Trang chủ</a></li>
            <li><a href="<?= BASE_URL ?>about.php">Giới thiệu</a></li>
            <li><a href="<?= BASE_URL ?>projects.php">Dự án</a></li>
            <li><a href="<?= BASE_URL ?>contact.php">Liên hệ</a></li>
        </ul>
    </nav>
</header>

<script>
    
    document.querySelector(".menu-toggle").addEventListener("click", function() {
        document.querySelector("nav ul").classList.toggle("show");
    });
</script>
