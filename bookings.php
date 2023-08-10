<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Exploration</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<?php
$Username = null;
if (!empty($_SESSION["Username"])) {
    $Username = $_SESSION["Username"];
}
?>

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
                echo '<li><a href="logout.php">Logout</a></li>';
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

    <section class="boxes">
        <div class="container">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "cw1_test");
            $sql = "SELECT * FROM `bookings` WHERE Booking_ID=1";
            $Result = mysqli_query($conn, $sql);


            while ($Rows = mysqli_fetch_array($Result)) {
                echo '
            <div class="box">
                <h2>' . $Rows[1] . '</h2>
                <img src="' . $Rows[3] . '" alt="' . $Rows[1] . '>"
                <br>
                <p>
                    ' . $Rows[2] . '
                </p>
                <a href="booking_db.php"><button type="button" class="book-btn">Book visit</button></a>
                </div>';
            };
            ?>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "cw1_test");
            $sql = "SELECT * FROM `bookings` WHERE Booking_ID=2";
            $Result = mysqli_query($conn, $sql);


            while ($Rows = mysqli_fetch_array($Result)) {
                echo '
            <div class="box">
                <h2>' . $Rows[1] . '</h2>
                <img src="' . $Rows[3] . '" alt="' . $Rows[1] . '>"
                <br>
                <p>
                    ' . $Rows[2] . '
                </p>
                <a href="booking_db.php"><button type="button" class="book-btn">Book visit</button></a>
                </div>';
                };
            ?>


            <?php
            $conn = mysqli_connect("localhost", "root", "", "cw1_test");
            $sql = "SELECT * FROM `bookings` WHERE Booking_ID=3";
            $Result = mysqli_query($conn, $sql);


            while ($Rows = mysqli_fetch_array($Result)) {
                echo '
            <div class="box">
                <h2>' . $Rows[1] . '</h2>
                <img src="' . $Rows[3] . '" alt="' . $Rows[1] . '>"
                <br>
                <p>
                    ' . $Rows[2] . '
                </p>
                <a href="booking_db.php"><button type="button" class="book-btn">Book visit</button></a>
                </div>';
                };
             ?>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "cw1_test");
            $sql = "SELECT * FROM `bookings` WHERE Booking_ID=4";
            $Result = mysqli_query($conn, $sql);


            while ($Rows = mysqli_fetch_array($Result)) {
                echo '
            <div class="box">
                <h2>' . $Rows[1] . '</h2>
                <img src="' . $Rows[3] . '" alt="' . $Rows[1] . '>"
                <br>
                <p>
                    ' . $Rows[2] . '
                </p>
                <a href="booking_db.php"><button type="button" class="book-btn">Book visit</button></a>
                </div>';
                };
            ?>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "cw1_test");
            $sql = "SELECT * FROM `bookings` WHERE Booking_ID=5";
            $Result = mysqli_query($conn, $sql);


            while ($Rows = mysqli_fetch_array($Result)) {
                echo '
            <div class="box">
                <h2>' . $Rows[1] . '</h2>
                <img src="' . $Rows[3] . '" alt="' . $Rows[1] . '>"
                <br>
                <p>
                    ' . $Rows[2] . '
                </p>
                <a href="booking_db.php"><button type="button" class="book-btn">Book visit</button></a>
                </div>';
                };
            ?>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "cw1_test");
            $sql = "SELECT * FROM `bookings` WHERE Booking_ID=6";
            $Result = mysqli_query($conn, $sql);


            while ($Rows = mysqli_fetch_array($Result)) {
                echo '
            <div class="box">
                <h2>' . $Rows[1] . '</h2>
                <img src="' . $Rows[3] . '" alt="' . $Rows[1] . '>"
                <br>
                <p>
                    ' . $Rows[2] . '
                </p>
                <a href="booking_db.php"><button type="button" class="book-btn">Book visit</button></a></form>
                </div>';
                };
            ?>


        </div>
    </section>

    <button type="button" id="btn-back-to-top">
        <img src="images/top.png" height="25px" width="35px" alt="Top">
    </button>

    <hr>
    <footer>© All rights reserved by Manjul Dahal
    </footer>
    <script src="js/main.js"></script>
    <script src="js/top.js"></script>
</body>

</html>