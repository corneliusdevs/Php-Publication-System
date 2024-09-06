
<?php

//  list of users
$users = array(
    array(
        "username" => "mohammed",
        "password" => "password"
    ),
    array(
        "username" => "asbahi",
        "password" => "asbahi"
    ),
);

$pass = "";
$username = "";
$errorMsg = "";
$signInSuccess = false;


if ("POST" === $_SERVER["REQUEST_METHOD"]) {
     $usernameInput = $_POST["username"];
     $passwordInput = $_POST["password"];
    if (empty($usernameInput)) {
        $errorMsg = "Username or password empty";
    } else {
        $username = removeUnwantedCharsFromInput($_POST["username"]);
    }

    if (empty($passwordInput)) {
        $errorMsg = "Username or password empty";
    } else {
        $pass = removeUnwantedCharsFromInput($_POST["password"]);
    }

    //If no error messages, validate the signin credentials
    if (empty($errorMsg)) {
        foreach ($users as $user) {
            if ($user["username"] === $username) {
                if ($user["password"] === $pass) {
                    // sign in successful, start the session
                    $signInSuccess = true;
                    session_start();
                    // Store credentials in the session
                    $_SESSION["credentials"] = true;
                }
            }
        }

        if(!$signInSuccess){
            $errorMsg = "Invalid sign in credentials";
        }
    }
}

// remove unwanted characters from user input
function removeUnwantedCharsFromInput($userInput)
{
    $userInput = htmlspecialchars($userInput);
    $userInput = trim($userInput);
    $userInput = stripslashes($userInput);
    return $userInput;
}
?>