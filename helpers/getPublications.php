<?php

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == "443") ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $url_components = parse_url($url);
    if (isset($url_components['query'])) {
        parse_str($url_components['query'], $params);

        $serialNumber = strval($params["serialnumber"]);

        echo "<script> var serialNumber = " . json_encode($serialNumber) . ";</script>";
    } else {
    
        $serialNumber = "";
        echo "<script> var serialNumber = " . json_encode($serialNumber) . ";</script>";
    }


    $isNewPublication = isset($_SESSION["newPublications"]);
    $publicationsList;


    if ($isNewPublication === true) {
        $publicationsList = json_encode($_SESSION["newPublications"]);
    } else {
        $publicationsList = json_encode($publications);
    }

    echo "<script>var allPublications = $publicationsList;</script>";