<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css"> 
    <title>Admin Dashboard</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <div class="logo">Admin Dashboard <span>Panel</span></div>
            <div class="navbar">
                <a href="brand.php">Brands</a>
                <a href="categories.php">Categories</a>
                <a href="products.php">Products</a>
            </div>
        </div>
    </header>

    <section>
        <h1 class="title">Welcome to the Admin Dashboard</h1>
        <div class="dashboard">
            <div class="box-container">
                <div class="box">
                    <h3>Manage Brands</h3>
                    <p><a href="brand.php" class="btn">Go to Brands</a></p>
                </div>
                <div class="box">
                    <h3>Manage Categories</h3>
                    <p><a href="categories.php" class="btn">Go to Categories</a></p>
                </div>
                <div class="box">
                    <h3>Manage Products</h3>
                    <p><a href="products.php" class="btn">Go to Products</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
