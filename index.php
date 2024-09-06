<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="./styles/styles.css" />
    <?php
    // find out if admin is logged in
    session_start();

    $isSignedIn = isset($_SESSION["credentials"]);

    echo "<script>var isSignedIn = " . ($isSignedIn ? "true" : "false") . ";</script>";
    ?>
</head>

<body>
    <main id="" class="">
        <!-- NAV BAR -->
        <nav>
            <div class="nav-wrapper">
                <div class="nav-text">HOME</div>
                <div id="signIn-message"></div>
                <div class="menu-img-container" onclick="toggeleMenu()"><img id="menu-icon" src="./icons/hamburger.png" data-alt-src="./icons/close.png" data-menu-state="closed" /></div>
                <div id="nav-menu-container" class="nav-menu-container">
                    <div class="menu-item">HOME</div>
                    <a href="./pages/signIn.php">
                        <div class="menu-item">SIGN IN</div>
                    </a>
                    <a href="./pages/list.php">
                        <div class="menu-item">PUBLICATION LIST</div>
                    </a>
                    <a href="./pages/submit.php">
                        <div class="menu-item">SUBMIT A PUBLICATION</div>
                    </a>
                </div>
            </div>
        </nav>

        <div class="background">
        </div>
        <div class="">
            <section class="home-options">
                <a href="./pages/list.php">
                    <div class="card">
                        <span class="card-text">
                            PUBLICATION LIST
                        </span>
                    </div>
                </a>
                <a href="./pages/charts.php">
                    <div class="card">
                        <span class="card-text">
                            CHARTS
                        </span>
                    </div>
                </a>
                <a href="./pages/submit.php">
                    <div class="card">
                        <span class="card-text">
                            SUBMIT A PUBLICATION
                        </span>
                    </div>
                </a>
                <a href="./pages/cv.php">
                    <div class="card">
                        <span class="card-text">
                            CV
                        </span>
                    </div>
                </a>

                <div id="signIn-signOut-cards">

                </div>
                <script src="./scripts/card.js">
                </script>
                <script>
                    let card = renderSigninSignoutCard(isSignedIn);
                    document.getElementById("signIn-signOut-cards").innerHTML = card;
                    isSignedIn && (document.getElementById("signIn-message").innerHTML = "WELCOME")
                </script>
            </section>
        </div>

    </main>
    <script src="./scripts/toggleMenu.js">
    </script>
</body>

</html>