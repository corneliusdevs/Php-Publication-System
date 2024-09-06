<?php
// get variables from validateInput.php
include("../helpers/validateSignIn.php");

session_start();
$isSignedIn = isset($_SESSION["credentials"]);
if ($isSignedIn) {
    header("location:../index.php");
}
?>


<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN IN</title>
    <link rel="stylesheet" type="text/css" href="../styles/signIn.css" />
</head>

<body>
    <main id="" class="signin-wrapper">
        <nav>
            <div class="nav-wrapper">
                <div class="nav-text">
                    <div class="header">
                        <h1>SIGN IN</h1>
                    </div>
                </div>

                <div class="menu-img-container" onclick="toggeleMenu()"><img id="menu-icon" src="../icons/hamburger.png" data-alt-src="../icons/close.png" data-menu-state="closed" /></div>
                <div id="nav-menu-container" class="nav-menu-container">
                    <a href="../index.php">
                        <div class="menu-item">HOME</div>
                    </a>
                    <a href="./cv.php">
                        <div class="menu-item">CV</div>
                    </a>
                    <a href="./charts.php">
                        <div class="menu-item">CHARTS</div>
                    </a>
                    <a href="./submit.php">
                        <div class="menu-item">SUBMIT A PUBLICATION</div>
                    </a>
                </div>
            </div>
        </nav>
        <div class="background">

        </div>
        <!-- SIGN IN FORM -->
        <div class="sign-in-container">
            <div class="sign-in">
                <div class="error-details"><?php echo $errorMsg; ?></div>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <!-- USERNAME -->
                    <div class="user-name">
                        <input id="username" 
                        placeholder="username"
                        type="text" name="username" />
                    </div>
                    <!-- PASSWORD -->
                    <div class="password">
                        <input id="password"    placeholder="password"
                        type="password" name="password" />
                    </div>
                    <!-- SIGN IN BUTTON -->
                    <div class="sign-in-button-wrapper">
                        <button class="sign-in-button" type="submit" name="submit" class="sign-in-button" value="Submit">SIGN IN</button>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <script src="../scripts/toggleMenu.js"></script>
</body>

</html>