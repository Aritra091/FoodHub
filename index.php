<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHub - Home</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <style>
        :root {
            --primary-color: #ff7043;
            --secondary-color: #263238;
            --accent-color: #ffa726;
            --text-light: #f5f5f5;
            --card-bg: #ffffff;
            --footer-bg: #1c1c1c;
        }

        body {
            background-color: #f3f4f6;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: var(--secondary-color) !important;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: var(--text-light) !important;
        }

        .navbar-nav .nav-link:hover {
            color: var(--accent-color) !important;
        }

        /* Carousel */
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }

        /* Cards */
        .card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            background-color: var(--card-bg);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-title {
            color: var(--secondary-color);
            font-weight: bold;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }

        /* Footer */
        footer {
            background-color: var(--footer-bg);
            color: var(--text-light);
        }

        footer a {
            color: var(--text-light);
        }

        footer a:hover {
            color: var(--accent-color);
        }

        footer h5 {
            color: var(--accent-color);
        }

        .border-light {
            border-top: 1px solid #444 !important;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">FoodHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="foods.php?category=Indian">Indian</a></li>
                    <li class="nav-item"><a class="nav-link" href="foods.php?category=Chinese">Chinese</a></li>
                    <li class="nav-item"><a class="nav-link" href="foods.php?category=Italian">Italian</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://png.pngtree.com/background/20230528/original/pngtree-variety-of-indian-food-is-served-on-a-table-picture-image_2778395.jpg"
                    class="d-block w-100" alt="Food 1">
            </div>
            <div class="carousel-item">
                <img src="https://t4.ftcdn.net/jpg/03/61/86/91/360_F_361869194_7JGmIOSj2iUNi0AYoVhVyhKvaN6PkOah.jpg"
                    class="d-block w-100" alt="Food 2">
            </div>
            <div class="carousel-item">
                <img src="https://w0.peakpx.com/wallpaper/101/95/HD-wallpaper-burgers-fast-food-delicious-food-sandwiches-harmful-food.jpg"
                    class="d-block w-100" alt="Food 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Welcome Section and Cards -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-2" style="color: var(--secondary-color);">Welcome to FoodHub</h2>
            <p class="text-center text-muted mb-5">Your one-stop place for delicious food from all around the world.</p>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://t4.ftcdn.net/jpg/02/84/46/89/360_F_284468940_1bg6BwgOfjCnE3W0wkMVMVqddJgtMynE.jpg"
                            class="card-img-top" alt="Indian Food">
                        <div class="card-body">
                            <h5 class="card-title">Indian Food</h5>
                            <p class="card-text">A burst of spices and rich traditional flavors in every bite.</p>
                            <a href="foods.php?category=Indian" class="btn btn-primary">Explore Indian Food</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://media.istockphoto.com/id/545286388/photo/chinese-food-blank-background.jpg?s=612x612&w=0&k=20&c=pqOIy07YKO5PlU5VxjscwTGRrrZ8PluKMUjSOz-II60="
                            class="card-img-top" alt="Chinese Food">
                        <div class="card-body">
                            <h5 class="card-title">Chinese Food</h5>
                            <p class="card-text">Savory stir-fries and comforting noodles crafted with balance.</p>
                            <a href="foods.php?category=Chinese" class="btn btn-primary">Explore Chinese Food</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2021/12/30/11/33/italian-cuisine-6903774_640.jpg"
                            class="card-img-top" alt="Italian Food">
                        <div class="card-body">
                            <h5 class="card-title">Italian Food</h5>
                            <p class="card-text">Classic herbs, creamy sauces, and stone-baked perfection.</p>
                            <a href="foods.php?category=Italian" class="btn btn-primary">Explore Italian Food</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-light pt-4">
        <div class="container">
            <div class="row">

                <!-- Brand and About -->
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">FoodHub</h5>
                    <p>Your one-stop place for delicious food from all around the world.</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-decoration-none">Home</a></li>
                        <li><a href="foods.php?category=Indian" class="text-decoration-none">Indian</a></li>
                        <li><a href="foods.php?category=Chinese" class="text-decoration-none">Chinese</a></li>
                        <li><a href="foods.php?category=Italian" class="text-decoration-none">Italian</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-md-4 mb-3">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <p>Email: contact@foodhub.com</p>
                    <p>Phone: +91 98765 43210</p>
                </div>

            </div>

            <!-- Copyright -->
            <div class="text-center py-3 border-top border-light">
                &copy;
                <?php echo date("Y"); ?> FoodHub. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>