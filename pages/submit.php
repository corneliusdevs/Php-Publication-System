<?php
include("../helpers/validateSignIn.php");
 // find out if user is logged in
 session_start();

 $isSignedIn = isset($_SESSION["credentials"]);
if (!$isSignedIn) {
    header("location:./signIn.php");
}

?>


<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Publish your Article</title>
    <link rel="stylesheet" type="text/css" href="../styles/submit.css" />
    <script src="../scripts/validatePublicationData.js"></script>
</head>

<body>
    <main>
        <div class="">
            <nav>
                <div class="nav-wrapper">
                    <div class="nav-text">
                        <div class="header-nav">
                            <h1>SUBMIT PUBLICATION</h1>
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
                        <a href="./list.php">
                            <div class="menu-item">PUBLICATIONS LIST</div>
                        </a>
                    </div>
                </div>
            </nav>

            <div class="submit-form">
                <div class="error-details">
                </div>
                <form id="submit-form" onsubmit="validatePublicationData(event)">
                    <div class="form-field">
                        <label for="serialNumber">Serial Number: </label>
                        <input id="serialNumber" type="text" name="serialNumber" size="40" placeholder="e.g 000012345" required />
                    </div>
                    <div class="form-field">
                        <label for="articleTitle">Title of article: </label>
                        <input id="articleTitle" type="text" name="articleTitle" size="40" placeholder="e.g Role of enzymes in biochemical reactions" required />
                    </div>
                    <div class="form-field">
                        <label for="link">Article link</label>
                        <input id="link" type="text" name="link" size="40" placeholder="e.g https://example.com" required />
                    </div>
                    <div class="form-field">
                        <label for="authors">Author(s): </label>
                        <input id="authors" size="40" type="text" name="authors" placeholder="e.g Warren Buffet" required />
                    </div>

                    <div class="form-field">
                        <label for="yearOfPublication">Year of publication: </label>
                        <input id="yearOfPublication" name="yearOfPublication" size="40" placeholder="e.g 2021" required />
                    </div>

                    <div class="form-field">
                        <label for="DOI">DOI: </label>
                        <input id="DOI" size="40" name="DOI" placeholder="e.g doi.org/11.34216/updf-6t70" required />
                    </div>

                    <div class="abstract-container">
                        <label for="abstract">Abstract: </label>
                        <textarea class="text-input" id="abstract" rows="10" cols="50" name="abstract" placeholder=""></textarea>
                    </div>

                    <div class="submit-button-wrapper">
                        <button type="submit" name="submit" class="submit-button" value="Submit">submit</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <script src="../scripts/toggleMenu.js">
    </script>
</body>

</html>