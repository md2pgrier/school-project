
<?php
// Get the user's input from the form
$name = $_POST["name"];

// Validate the input
if (empty($name)) {
    $error = "Please enter your name";
} else {
    // If the input is valid, set the session variable to the user's name
    $_SESSION["user"] = $name;
}
?>