<?php
// get list of all publications
include("../helpers/publications.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Details</title>
    <link rel="stylesheet" type="text/css" href="../styles/display.css">
</head>

<body>

    <main>
        <nav>
            <div class="nav-wrapper">
                <div class="nav-text">
                    <div class="header-nav">
                        <h1>ARTICLE</h1>
                    </div>
                </div>
                <div class="menu-img-container" onclick="toggeleMenu()"><img id="menu-icon" src="../icons/hamburger.png" data-alt-src="../icons/close.png" data-menu-state="closed" /></div>
                <div id="nav-menu-container" class="nav-menu-container">
                    <a href="../index.php">
                        <div class="menu-item">HOME</div>
                    </a>
                    <a href="./list.php">
                        <div class="menu-item">PUBLICATION LIST</div>
                    </a>
                    <a href="./cv.php">
                        <div class="menu-item">CV</div>
                    </a>
                    <a href="./charts.php">
                        <div class="menu-item">CHARTS</div>
                    </a>
                    <a href="./submit.php">
                        <div class="menu-item">SUBMIT A PUBLICATION</div>
                </div></a>
            </div>
            </div>
        </nav>
        <!-- THE PUBLICATION IS DYNAMICALLY GENERATED -->
        <div id="publicationContainer">

        </div>
    </main>

    <?php
    include("../helpers/getPublications.php")
    ?>
    <script src="../scripts/generatePublicationHtml.js">

    </script>
    <script>
        document.getElementById("publicationContainer").innerHTML = generatePublicationHtml(allPublications, serialNumber);;
    </script>
    <script src="../scripts/toggleMenu.js">
    </script>
</body>

</html>