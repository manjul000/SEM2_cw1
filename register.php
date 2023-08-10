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
        <h2>Register<h2>
    </center>
    <form id="myForm" action="register_db.php" method="POST">
        <label for="f-name">First Name</label>
        <input type="text" name="f-name" placeholder="Enter Your First Name" required>
        <label for="m-name">Middle Name</label>
        <input type="text" name="m-name" placeholder="Enter Your Middle Name">
        <label for="l-name">Last Name</label>
        <input type="text" name="l-name" placeholder="Enter Your Last Name" required>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter Your Username" pattern="[a-zA-Z0-9_]{3,20}" required>
        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Enter Your Address" required>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Your Password" required>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="confirm-Password" placeholder="Confirm Your Password" required>
        <button type="submit">Register</button>
    </form>

    <button type="button" id="btn-back-to-top">
        <img src="images/top.png" height="25px" width="35px" alt="Top">
    </button>

    <hr>
    <footer>© All rights reserved by Manjul Dahal
    </footer>

    <script src="js/register.js"></script>
    <script src="js/main.js"></script>
</body>

</html>