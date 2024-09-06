<?php
// get all published articles
include("../helpers/publications.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY CATALOG</title>
    <link rel="stylesheet" type="text/css" href="../styles/list.css">
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <div class="nav-text">
                <div class="header">
                    <h1>Publications</h1>
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
    <div class="pub-list-container">
        <!-- DYNAMICALLY DISPLAY PUBLICATION LIST -->
        <div id="published-articles"></div>
    </div>
    <script src="../scripts/getPublicationsList.js">

    </script>
    <script>
        document.getElementById("published-articles").innerHTML = getPublicationsListHtml(publications)
    </script>
    <script src="../scripts/toggleMenu.js">
    </script>
</body>

</html>