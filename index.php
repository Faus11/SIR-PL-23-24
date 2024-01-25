<?php
require_once __DIR__ . '/infra/middlewares/middleware-not-authenticated.php';
// require_once __DIR__ . '/setupdatabase.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrameMinds</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="./index.html">
            <img src="assets/imagens/logo-icon.png" alt="FrameMinds Icon" width="35" height="35">
            FrameMinds
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mx-auto text-center" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#how-it-works">How It Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
            </ul>
            <div class="login-btn">
                <a class="btn btn-secondary" href="pages/public/signin.php">Login</a>
            </div>
        </div>
    </nav>
    

    <!-- Hero Section -->
    <section id="hero" class="hero text-center"
        style="height: 100vh; display: flex; align-items: center; overflow: hidden;">
        <div id="carouselExample" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url('assets/imagens/background-movie.jpg'); background-size: cover; background-position: center center; height: 100vh;">
                    <div
                        class="container text-white d-flex flex-column justify-content-center align-items-center h-100">
                        <h1 class="display-4">Discover, Share, and Manage Your Favorites</h1>
                        <p class="lead">Your all-in-one solution for film and series management.</p>
                        <a href="pages/public/signup.php" class="btn btn-warning btn-lg">Sign Up Now</a>
                    </div>
                </div>

                <!-- Additional Slides (Add more as needed) -->
                <div class="carousel-item"
                    style="background-image: url('assets/imagens/another-background-movie.jpg'); background-size: cover; background-position: center center; height: 100vh;">
                    <div
                        class="container text-white d-flex flex-column justify-content-center align-items-center h-100">
                        <h1 class="display-4">Discover, Share, and Manage Your Favorites</h1>
                        <p class="lead">Your all-in-one solution for film and series management.</p>
                        <a href="register.html" class="btn btn-warning btn-lg">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <!-- About Section -->
    <section id="about" class="about py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <h2 class="mb-4">About Us</h2>
                    <p>Welcome to My Film & Series Manager, where your entertainment experience is our priority. Our
                        platform is designed for movie and series enthusiasts who want to discover, organize, and share
                        their favorite content with others. We believe in creating a community that appreciates the art
                        of storytelling through films and series.</p>
                    <p>At My Film & Series Manager, we are dedicated to providing a user-friendly and collaborative
                        environment. Join us on this cinematic journey, and let's explore the world of entertainment
                        together!</p>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <!-- Add your image here with a specific width -->
                    <img src="assets/imagens/about-us-movie.png" alt="About Us Image" class="img-fluid rounded"
                        style="max-width: 80%; height: auto;">
                </div>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works py-5">
        <div class="container text-center">
            <h2 class="mb-4">How It Works</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h4>Create an Account</h4>
                    <p>Sign up for a My Film & Series Manager account to unlock personalized features. Save your
                        favorite movies and series, create watchlists, and connect with other users.</p>
                </div>
                <div class="col-md-4">
                    <h4>Discover and Categorize</h4>
                    <p>Explore a vast collection of movies and series. Categorize your favorites, mark watched items,
                        and easily access your curated lists. Our intuitive interface makes it simple to manage your
                        entertainment preferences.</p>
                </div>
                <div class="col-md-4">
                    <h4>Share and Collaborate</h4>
                    <p>Share your movie and series recommendations with friends or the My Film & Series Manager
                        community. Collaborate on watchlists and discover new content based on the preferences of
                        like-minded users.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <!-- Features Section -->
    <section id="features" class="features py-5">
        <div class="container text-center">
            <h2 class="mb-4">Features</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h4>Personalized Profiles</h4>
                    <p>Create a profile that reflects your unique taste in movies and series. Customize your profile,
                        add a bio, and showcase your favorite genres.</p>
                </div>
                <div class="col-md-4">
                    <h4>Advanced Search and Filtering</h4>
                    <p>Effortlessly find specific movies or series using our advanced search and filtering options.
                        Search by genre, release year, or user ratings to discover the perfect content for your
                        mood.</p>
                </div>
                <div class="col-md-4">
                    <h4>Rating and Comments</h4>
                    <p>Rate and comment on movies and series to share your thoughts with the community. Engage in
                        discussions, express your opinions, and discover recommendations based on user reviews.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <!-- Team Section -->
    <section class="team text-white py-5">
        <div class="container text-center">

<!-- Logos with links -->
<div class="row justify-content-center mt-2">
    <div class="col-md-4">
        <a href="https://www.facebook.com/jose.faus.104" target="_blank">
            <img src="assets/imagens/fb-logo.png" alt="Facebook" class="img-fluid logo" width="30" height="30">
        </a>
    </div>
    <div class="col-md-4">
        <a href="https://github.com/Faus11/SIR-TP1" target="_blank">
            <img src="assets/imagens/github-logo.png" alt="GitHub" class="img-fluid logo" width="30" height="30">
        </a>
    </div>
    <div class="col-md-4">
        <a href="https://www.instagram.com/josefaus_03/" target="_blank">
            <img src="assets/imagens/instagram-logo.png" alt="Instagram" class="img-fluid logo" width="30" height="30">
        </a>
    </div>
</div>

    <!-- Footer -->

        <p>&copy; 2024 FrameMinds. Todos os direitos reservados.</p>
    

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Smooth scrolling script -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });

        
            // Logo click to make them bigger
            document.addEventListener("DOMContentLoaded", function () {
        var logos = document.querySelectorAll('.logo');

        logos.forEach(function (logo) {
            logo.addEventListener('click', function () {
                if (this.classList.contains('enlarged')) {
                    this.style.transform = 'scale(1)';
                    this.classList.remove('enlarged');
                } else {
                    this.style.transform = 'scale(1.2)';
                    this.classList.add('enlarged');
                }
            });
        });
    });
    </script>
</body>

</html>
