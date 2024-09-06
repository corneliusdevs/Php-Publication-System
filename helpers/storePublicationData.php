<?php
include("../helpers/publications.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $articleTitle = $_POST['articleTitle'];
    $authors = $_POST['authors'];
    $yearOfPublication = $_POST['yearOfPublication'];
    $DOI = $_POST['DOI'];
    $link = $_POST['link'];
    $serialNumber = $_POST['serialNumber'];
    $abstract = $_POST['abstract'];
    $newData;

    // Store data in session object
    session_start();
    if (isset($_SESSION["newPublications"])) {
        // Append new data to the existing data
        $previousData = $_SESSION["newPublications"];
        $newData = array(
            "articleTitle" => $articleTitle,
            "authors" => $authors,
            "yearOfPublication" => $yearOfPublication,
            "DOI" => $DOI,
            "link" => $link,
            "serialNumber" => $serialNumber,
            "abstract" => $abstract
        );

        $_SESSION["newPublications"] = [...$previousData, $newData];
    } else {
        $newData = array(
            "articleTitle" => $articleTitle,
            "authors" => $authors,
            "yearOfPublication" => $yearOfPublication,
            "DOI" => $DOI,
            "link" => $link,
            "serialNumber" => $serialNumber,
            "abstract" => $abstract
        );
        $_SESSION["newPublications"] = [...$publications,$newData];
    }

    // Return a successful status code
    http_response_code(200);
} else {
    // Return an error status code
    http_response_code(500);
}

// Print the session data for debugging purposes
print_r($_SESSION);
