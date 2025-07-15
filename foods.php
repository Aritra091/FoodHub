<?php
include "db.php";

// Get selected category from URL (if any)
$selected_category = isset($_GET['category']) ? $_GET['category'] : null;

// Fetch distinct categories
$cat_query = "SELECT DISTINCT category FROM food";
$cat_result = mysqli_query($con, $cat_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Categories</title>

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

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: #fff;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--accent-color);
        }

        .category-section {
            margin-bottom: 40px;
        }

        .food-card {
            background: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 15px;
            transition: 0.3s ease;
            margin-bottom: 30px;
        }

        .food-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .food-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        h2 {
            color: var(--secondary-color);
            font-weight: 600;
        }

        .back-button {
            margin: 25px 0 10px 25px;
        }
    </style>
</head>

<body>

    <!-- Food Items Section -->
    <div class="container py-4">
        <div class="mb-4">
            <button type="button" class="btn btn-outline-primary" onclick="window.location.href='index.php'">
                ← Back to Home
            </button>
        </div>
        <?php
  // If a specific category is selected, only fetch that
  if ($selected_category) {
      $cat = mysqli_real_escape_string($con, $selected_category);
      echo "<div class='category-section'>";
      echo "<h2 class='mb-4'>$cat</h2><div class='row'>";
      
      $food_query = "SELECT * FROM food WHERE category = '$cat'";
      $food_result = mysqli_query($con, $food_query);

      if (mysqli_num_rows($food_result) == 0) {
          echo "<p class='text-muted'>No food found in this category.</p>";
      }

      while ($food = mysqli_fetch_assoc($food_result)) {
  ?>
        <div class="col-md-4">
            <div class="food-card">
                <img src="<?php echo $food['image']; ?>" alt="Food Image" />
                <h4 class="mt-3">
                    <?php echo $food['name']; ?>
                </h4>
                <p>
                    <?php echo $food['description']; ?>
                </p>
                <a href="#" class="btn btn-primary mt-2">Order Now</a>
            </div>
        </div>
        <?php
      }

      echo "</div></div><hr>";
  } 
  ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>