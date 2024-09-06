<?php

/**
 * terminate the session object and redirect the user to the sign in page.
 */
function terminateSessionAndRedirect() {
    session_start();
    session_destroy();
    header("location:../index.php");
    exit();
}

// terminate session
terminateSessionAndRedirect();

?>