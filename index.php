<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE SHINE!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
            margin: 0;
      }
        .bg-section {
            background-image: url('img/bg2.png');
        }
        .category-item {
            display: flex;
            flex-direction: column;
            text-align: center;
            position: relative;
        }
        .category-item img {
            width: 120px;
            height: 120px;
            border-radius: 60px;
            transition: transform 0.3s ease;
        }
        .category-item span {
            margin-top: 10px;
        }
        .category-item:hover img {
            transform: scale(1.1);
        }
        .navbar {
            position: fixed; /* Tetap pada posisi saat discroll */
            width: 100%; /* Menempati lebar penuh */
            z-index: 1000;
            padding-top: 0; /* Atur padding atas navbar menjadi 0 */
            margin-top: 0;
        }
    </style>
</head>
<body class="bg-light">
<?php include 'navbar.php'; ?>
    <div class="AboutUs">
        <img src="img/skincare1.png" alt="" style="position: absolute; z-index: 1; object-fit: cover; width: 100%; height: 100%; left: 0; top: 115px;">
        <section class="text-dark font-italic" style="margin-left: 300px; margin-right: 300px; margin-top: 30px; text-align: center; padding-left: 30px; padding-right: 30px; padding-top: 100px; padding-bottom: 30px; border-radius: 30px; position: relative; z-index: 2;">
            <h1 class="my-5">About Us</h1>
            <p>We are a digital platform dedicated to helping you discover true beauty and find that spark of confidence you've been looking for. At WE SHINE!, we understand that beauty is about more than just physical appearance, it's about feeling good about yourself, exuding confidence, and finding happiness within yourself.</p>
        </section>
    </div>

    <h1 class="text-dark font-italic text-center" style="margin-top:250px;">All You Need</h1>
    <div class="category-container" style="margin-bottom: 100px; margin-top: 100px; align-items: flex-start; display: flex; justify-content: space-around; text-align: center;">
        <div class="category-item">
            <img src="img/skincare2.jpg">
            <span>SKINCARE</span>
        </div>
        <div class="category-item">
            <img src="img/makeup.jpg">
            <span>MAKE UP</span>
        </div>
        <div class="category-item">
            <img src="img/soap.jpg">
            <span>BODYCARE</span>
        </div>
        <div class="category-item">
            <img src="img/haircare.jpg">
            <span>HAIRCARE</span>
        </div>
        <div class="category-item">
            <img src="img/clotch.jpg">
            <span>FASHION</span>
        </div>
    </div>

    <div class="Story">
        <img src="img/beach.png" alt="" style="position: absolute; z-index: 1; object-fit: cover; width: 100%; height: 100%; left: 0; top: 1155px;">
        <section class="my-5 text-dark font-italic" style="margin-left: 200px; margin-right: 200px; margin-top: 30px; text-align: center; padding-left: 30px; padding-right: 30px; padding-top: 130px; padding-bottom: 30px; border-radius: 30px; position: relative; z-index: 2;">
            <h1 class="my-5">Our Story</h1>
            <p>Starting from simple things in social media comments columns and forums discussing beauty, fashion, problems and skin care, "WE SHINE!" present as a beauty website as a solution for those who are looking for answers to various skin and fashion problems with various reviews from various parties. This website will also help increase awareness of the importance of proper skin care and fashion, so that every user can feel an increase in self-confidence and happiness in their appearance.</p>
        </section>
    </div>

    <div class="class" style="display: flex;">
        <div class="contact mx-5">
            <h5 style="flex: 1; margin-top: 110px; font-weight: bold;">CONTACT US</h5>
                <a class="class text-dark" style="display: flex; margin-bottom: 10px;">Jl. Nomad No. 13, Klegen, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63117</a>
                <a class="class text-dark" href="mailto:weshine.ofc@gmail.com" style="display: flex; margin-bottom: 10px;">weshine.ofc@gmail.com</a>
                <a class="class text-dark" style="display: flex; margin-bottom: 10px;">Contact (+62)83177768080</a>
        </div>

        <div class="sosmed mx-5">
            <h5 style="flex: 1; margin-top: 110px; font-weight: bold;">SOCIAL MEDIA</h5>
            <a class="class text-dark" href="https://www.instagram.com/we_shine.ofc?igsh=YzljYTk1ODg3Zg==" style="display: flex; margin-bottom: 10px;">
                <img src="img/instagram.jpg" style="height: 30px; width: 30px; border-radius: 5px; margin-right: 10px;">@we_shine.ofc
            </a>
            <a class="class text-dark" href="https://x.com/WESHINE_ofc?t=WPCXPPPZZ1-tOQvMXlEdzg&s=09" style="display: flex; margin-bottom: 10px;">
                <img src="img/twitter.jpg" style="height: 30px; width: 30px; border-radius: 5px; margin-right: 10px;">@WESHINE_ofc
            </a>
            <a class="class text-dark" href="https://www.facebook.com/profile.php?id=61560772763062&mibextid=ZbWKwL" style="display: flex; margin-bottom: 10px;">
                <img src="img/facebook.jpg" style="height: 30px; width: 30px; border-radius: 5px; margin-right: 10px;">@We SHINE.ofc
            </a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.com/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
