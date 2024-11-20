<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Brand</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

<section class="add-products">

   <h1 class="title">Brands</h1>
   <p style="text-align: center; font-size: 24px; font-weight: bold;">
    <a href="../view/admindashboard.php" style="text-decoration: none; color: #007bff; padding: 0px 10px; 
    border-radius: 5px; font-weight: bold; background-color: #f8f9fa;">Dashboard</a> / Brands
</p>



   <form action="../actions/add_brand_action.php" method="post" enctype="multipart/form-data">
      <h3>Add brand</h3>
      <input type="text" name="brand" class="box" placeholder="enter brand" required>
      <input type="submit" value="add brand" name="add_brand" class="btn">
   </form>

</section>


<section class="show-products">

   <!-- <h3>Available Brands</h3> -->

   <div class="box-container">
      <?php
      require_once '../controllers/brandcontroller.php';

      $brands = get_brands_controller();
      
      if (!empty($brands)) {
          foreach ($brands as $brand) { 
      ?>
      <div class="box">
         <div class="name"><?php echo htmlspecialchars($brand['brand_name']); ?></div>
         <form action="../actions/delete_brand_action.php" method="post" style="display:inline;">
             <input type="hidden" name="brand_id" value="<?php echo htmlspecialchars($brand['brand_id']); ?>">
             <input type="submit" value="Delete" name="delete_brand" class="delete-btn" onclick="return confirm('Are you sure you want to delete this brand?');">
         </form>
      </div>
      <?php
          }
      } else {
          echo '<p class="empty">No brands added yet!</p>';
      }
      ?>
   </div>

</section>
</html>