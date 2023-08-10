<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Exploration</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    $Username = null;
    ?>
</head>

<body class="dark-theme">
    <nav class="dark-theme-nav">
        <ul class="pc-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="bookings.php">Bookings</a></li>
            <?php if ($Username == null) {
                echo '<li><a href="login.php">Login</a></li>';
            } ?>
            <?php if ($Username == null) {
                echo '<li><a href="register.php">Register</a></li>';
            } else {
                echo '<li><a href="Logout.php">Logout</a></li>';
            } ?>
            <li><a href="#"><span id="Theme_Change" onclick="toggleTheme()">Theme</span></a></li>
        </ul>
        <span onclick="mobilemenu()">
            <div class="mobile-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </span>
    </nav>
    <hr>


    <center>
        <h2>Login</h2>
    </center>
    <form action="login_db.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" pattern="[a-zA-Z0-9_]{3,20}" required>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your Email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <button type="submit">Login</button>
    </form>

    <button type="button" id="btn-back-to-top">
        <img src="images/top.png" height="25px" width="35px" alt="Top">
    </button>

    <hr>
    <footer>© All rights reserved by Manjul Dahal</footer>
    <script src="js/main.js"></script>
    <script src="js/top.js"></script>
</body>

</html>