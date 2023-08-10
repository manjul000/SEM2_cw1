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
    <section class="section2">
        <div class="col1">
            <center>
                <h2>About Kathmandu</h2>
                <p style="font-size: 18px;">
                    Kathmandu, the capital city of Nepal, is a vibrant metropolis that boasts a rich tapestry of history, culture, and architecture. This city is home to a myriad of historical sites that reflect its deep-rooted heritage and significance in the region. Nestled in the Kathmandu Valley, a UNESCO World Heritage Site, these ancient treasures offer a glimpse into Nepal's past and its diverse cultural influences.</p>

                <p style="font-size: 18px;">
                    The city's historical sites encompass a range of architectural wonders, from the intricately carved temples of Durbar Square to the revered spiritual haven of Swayambhunath Stupa, also known as the "Monkey Temple". These sites stand as testaments to the fusion of Hindu and Buddhist traditions that have shaped Nepal's identity over centuries. As visitors explore the narrow lanes and bustling bazaars, they encounter the Bhaktapur Durbar Square with its royal palace and artful pagodas, as well as the serene beauty of Pashupatinath Temple, a sacred Hindu complex along the banks of the Bagmati River. Together, these historical sites create a captivating journey through Kathmandu's storied past, drawing travelers and pilgrims alike to its enchanting embrace.
                </p>
            </center>

    </section>


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
                </div>';
            } ?>
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
                </div>';
            } ?>

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
                </div>';
            } ?>

    </div>
    <h2>AndMany other places to visit!</h2>
    <div class="info">
        <center><a href="bookings.php"><button class="book-btn">Book a Visit</button></a></center>
    </div>

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