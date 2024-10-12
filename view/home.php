<?php 
require_once '../controllers/brandcontroller.php';
require_once '../controllers/categorycontroller.php';
$categories = get_categories_controller();
$brands = get_brands_controller(); 
session_start();

if (isset($_SESSION['c_id'])) {
    $customer_id = $_SESSION['c_id'];
} else {
    $customer_id = null;  
}
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
<?php include '../view/header.php'; ?>

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

         <form action="../actions/add_to_cart_action.php" method="post" style="display:inline;">
    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
    <input type="hidden" name="c_id" value="<?php echo htmlspecialchars($customer_id); ?>"> 
    <input type="submit" value="Add to Cart" name="add_to_cart" class="btn">
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
