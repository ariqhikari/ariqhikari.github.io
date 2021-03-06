<?php
$firstName = "Ariq";
$lastName = "Hikari";
$job = "Web Developer, Mobile Developer & Freelancer";
$desc1 = "Saya adalah Web Developer, Mobile Developer & Freelancer di Indonesia.";
$desc2 = "Perkenalkan nama saya Ariq Hikari Hidayat. Saya adalah siswa SMK 4 Bandung jurusan RPL (Rekayasa Perangkat Lunak). Saat ini saya sedang bergelut di dunia pemrograman khususnya Web Development dan Mobile Development. Hobi saya, ngulik tentang teknologi, nonton film dan main game.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hikari.</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="container">
            <h2>Hikari.</h2>
            <div class="toggle-dark">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <span class="icon-dark">
                    <i class="far fa-moon"></i>
                </span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="bio">
            <div class="title">
                <h1>
                    <strong><?= $firstName ?></strong><?= $lastName ?>
                </h1>
                <h3><?= $job ?></h3>
            </div>
            <div class="desc">
                <span><?= $desc1 ?></span>
                <p><?= $desc2 ?></p>
            </div>
            <div class="cta">
                <a href="#" class="btn btn-primary">Work together</a>
                <a href="#" class="btn btn-secondary">Resume</a>
            </div>
        </div>
        <div class="thumbnail">
            <div class="img-heading">
                <img src="about.png" alt="about">
                <div class="social-media">
                    <a href="https://www.facebook.com/xabi.alanso.77/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/ariqhikari/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://github.com/ariqhikari" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ariqhikari/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/3101839009.js" crossorigin="anonymous"></script>
    <script>
        const toggle = document.querySelector(".switch");
        const html = document.querySelector("html");

        toggle.addEventListener('change', function() {
            html.classList.toggle('dark');
        });
    </script>
</body>

</html>
