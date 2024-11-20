<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="../css/stylee.css">
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Checkout</h3>
   <p><a href="../view/home.php">Home</a> / Checkout</p>
</div>


<section class="checkout">

   <form id ="paymentForm">
      <h3>Place Your Order</h3>
      <div class="flex">
         <div class="inputBox">
            <span>Your Name:</span>
            <input type="text" name="name" required placeholder="Enter your name">
         </div>
         <div class="inputBox">
            <span>Amount:</span>
            <input type="number" name="number" required placeholder="Enter the amount" id = "amount">
         </div>
         <div class="inputBox">
            <span>Your Email:</span>
            <input type="email" name="email" required placeholder="Enter your email" id = "email-address">
         </div>
      </div>
      <input type="submit" value="Order Now" class="btn" name="order_btn">
   </form>

</section>

<script src="https://js.paystack.co/v2/inline.js"> </script>
<script src="../js/pay.js"></script>
</body>
</html>
