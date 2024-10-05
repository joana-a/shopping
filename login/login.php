<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
    <div class="banner">
        <h2>Login</h2>
    </div>  


    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<div style='color: red;'>" . $_SESSION['error'] . "</div>";
        unset($_SESSION['error']); 
    }
    ?>

    <form id="loginForm" action="../actions/loginprocess.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <script src="../js/loginvalidation.js"></script>
</body>
</html>
