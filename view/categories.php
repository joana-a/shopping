<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Category</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

<section class="add-products"> 

   <h1 class="title">Categories</h1>
   <p style="text-align: center; font-size: 24px; font-weight: bold;">
    <a href="../view/admindashboard.php" style="text-decoration: none; color: #007bff; padding: 0px 10px;
     border-radius: 5px; font-weight: bold; background-color: #f8f9fa;">Dashboard</a> / Categories
</p>


   <form action="../actions/add_category_action.php" method="post" enctype="multipart/form-data">
      <h3>Add new category</h3>
      <input type="text" name="category" class="box" placeholder="enter category" required>
      <input type="submit" value="add category" name="add_category" class="btn">
   </form>

</section>

<section class="show-products">

   <!-- <h3>Available Brands</h3> -->

   <div class="box-container">
      <?php
      require_once '../controllers/categorycontroller.php';

      $categories = get_categories_controller();
      
      if (!empty($categories)) {
          foreach ($categories as $category) { 
      ?>
      <div class="box">
         <div class="name"><?php echo htmlspecialchars($category['cat_name']); ?></div>
         <form action="../actions/delete_category_action.php" method="post" style="display:inline;">
             <input type="hidden" name="cat_id" value="<?php echo htmlspecialchars($category['cat_id']); ?>">
             <input type="submit" value="Delete" name="delete_category" class="delete-btn" onclick="return confirm('Are you sure you want to delete this category?');">
         </form>
      </div>
      <?php
          }
      } else {
          echo '<p class="empty">No categories added yet!</p>';
      }
      ?>
   </div>

</section>

</html>