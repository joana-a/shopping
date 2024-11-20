<?php 
require_once '../controllers/brandcontroller.php';
require_once '../controllers/categorycontroller.php';
$categories = get_categories_controller();
$brands = get_brands_controller(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Product</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<section class="add-products">
  
   <h1 class="title">All Products</h1>
   <p style="text-align: center; font-size: 24px; font-weight: bold;">
    <a href="../view/admindashboard.php" style="text-decoration: none; color: #007bff; padding: 0px 10px; 
    border-radius: 5px; font-weight: bold; background-color: #f8f9fa;">Dashboard</a> / Products
</p>



   <form action="../actions/add_product_action.php" method="post" enctype="multipart/form-data">
      <h3>Add New Product</h3> 
      
      <select name="category" class="box" required>
         <option value="" disabled selected>Select category</option>
         <?php foreach ($categories as $category) :  ?>            
            <option value='<?php echo $category['cat_id']; ?>'><?php echo $category['cat_name']; ?></option>
        <?php endforeach;?>
      </select>   
      <select name="brand" class="box" required>
         <option value="" disabled selected>Select brand</option>
         <?php foreach ($brands as $brand) : ?>
            <option value='<?php echo $brand['brand_id']; ?>'><?php echo $brand['brand_name']; ?></option>
            <?php endforeach;?>
      </select>
      <input type="text" name="title" class="box" placeholder="Enter product title" required>

      
      <input type="number" name="price" class="box" placeholder="Enter product price" required>

     
      <textarea name="description" class="box" placeholder="Enter product description" required></textarea>

      
      <input type="text" name="keywords" class="box" placeholder="Enter keywords (comma-separated)" required>


      <input type="submit" value="Add Product" name="add_product" class="btn">
   </form>

</section>

<section class="show-products">

   <h3>Available Products</h3>

   <div class="box-container">
      <?php
      require_once '../controllers/productcontroller.php';

      $products = get_products_controller();
      
      if (!empty($products)) {
          foreach ($products as $product) { 
      ?>
      <div class="box">
         <div class="name"><?php echo htmlspecialchars($product['product_title']); ?></div>
         <div class="price">$<?php echo htmlspecialchars($product['product_price']); ?></div>
         <div class="description"><?php echo htmlspecialchars($product['product_desc']); ?></div>

         <form action="../actions/delete_product_action.php" method="post" style="display:inline;">
             <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
             <input type="submit" value="Delete" name="delete_product" class="delete-btn" onclick="return confirm('Are you sure you want to delete this product?');">
         </form>
      </div>
      <?php
          }
      } else {
          echo '<p class="empty">No products added yet!</p>';
      }
      ?>
   </div>

</section>
</body>
</html>
