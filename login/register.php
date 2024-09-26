<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
    <!-- <h2>Register</h2> -->
    <form id="registerForm" action="../actions/registerprocess.php" method="POST">
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="country" placeholder="Country" required>
        <input type="text" name="city" placeholder="City" required>
        <input type="text" name="contact" placeholder="Contact" required>
        <button type="submit">Register</button>
    </form>

    <script src="../js/registervalidation.js"></script>
</body>
</html>
