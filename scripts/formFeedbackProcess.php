<?php
session_start();
// Include the database connection file
require_once "connectToDatabase.php";

// Check if session variables are set
if (!isset($_SESSION['SECURE']) || $_SESSION['SECURE'] !== "!@#$^%FDSSFDWQR@") {
    die('SECURE test failed.');
}

if (!isset($_SESSION['ORIGIN']) || $_SESSION['ORIGIN'] !== "/~u17/submissions/submission04/pages/formFeedback.php") {
    die('ORIGIN test failed.');
}

$salutation = $firstName = $lastName = "";
$email = $phoneNumber = "";
$subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salutation = sanitized_input($_POST["salutation"]);
    $firstName = sanitized_input($_POST["firstName"]);
    if (!preg_match("/^[A-Z][A-Za-z -]*$/", $firstName)) {
        die("Bad first name!");
    }
    $lastName = sanitized_input($_POST["lastName"]);
    if (!preg_match("/^[A-Z][A-Za-z -]*$/", $lastName)) {
        die("Bad last name!");
    }
    $email = sanitized_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Bad e-mail!");
    }
    $phoneNumber = sanitized_input($_POST['phone']);
    if (!empty($phoneNumber) && !preg_match("/^\d{3}-\d{3}-\d{4}$/", $phoneNumber)) {
        die("Bad phone number!");
    }
    $subject = sanitized_input($_POST["subject"]);
    $message = sanitized_input($_POST["comments"]);
}

function sanitized_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Step 1
$messageToBusiness =
    "From: $salutation $firstName $lastName\r\n" .
    "E-mail Address: $email\r\n" .
    "Phone number: $phoneNumber\r\n" .
    "_ _ _ _ _ _ _ _ _ _ _ _\r\n" .
    "Subject: $subject\r\n" .
    "_ _ _ _ _ _ _ _ _ _ _ _ _\r\n" .
    "Comments: $message\r\n" .
    "_ _ _ _ _ _ _ _ _ _ _ _ _ _\r\n";

$headerToBusiness = "From: $email\r\n";
mail("u50@mail.cs.smu.ca", $subject, $messageToBusiness, $headerToBusiness);

// Step 2
$messageToClient =
    "Dear $salutation $lastName:\r\n" .
    "The following message was received from you by Shoetastic:\r\n" .
    "- - - - - - - - - - - - - - - - - - - - \r\n" .
    $messageToBusiness .
    "Thank you for your interest and your feedback.\r\n" .
    "From the folks at Shoetastic\r\n" .
    "- - - - - - -- - - - -- -- - -- -\r\n";
if (isset($_POST['reply']))
    $messageToClient .=
        "P.S. We will contact you shortly with more information.";


$headerToClient = "From: u50@ps.cs.smu.ca\r\n";
mail($email, "Re: $subject", $messageToClient, $headerToClient);

// Step 3
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>
    <html lang='en'>
    <head><meta charset='utf-8'><title>Your Message</title></head>
    <body><code>$display</code></body>
</html>";
echo $display;

// Step 4
$fileVar = fopen("../data/feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite(
    $fileVar,
    "\n__  _  _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _  _ _ _ _ _ _\n"
)
    or die("Error: Could not write divider to the log file.");
fwrite($fileVar, "Date received: " . date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write date to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write messasge to the log file.");
?>