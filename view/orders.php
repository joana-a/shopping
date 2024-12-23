<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $customer_id = $_SESSION['user_id'];
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
   <title>orders</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="../css/stylee.css">

</head>
<body>
   
<?php include '../view/header.php'; ?>

<div class="heading">
   <h3>your orders</h3>
   <p> <a href="../view/home.php">home</a> / orders </p>
</div>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <?php
         $order_query = mysqli_query($mysqli, "SELECT * FROM `orders` WHERE `customer_id` = '$customer_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
         <p> placed on : <span><?php echo $fetch_orders['order_date']; ?></span> </p>
         <!-- <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p> -->
         <!-- <p> your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p> -->
         <p> invoice number : <span>$<?php echo $fetch_orders['invoice_no']; ?>/-</span> </p>
         <p> order status : <span style="color:<?php if($fetch_orders['order_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['order_status']; ?></span> </p>
         </div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>


<script src="../js/script.js"></script>

</body>
</html>