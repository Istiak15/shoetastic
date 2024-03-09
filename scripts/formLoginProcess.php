<?php
// formloginProcess.php
// Process the login form data and set up the necessary session data for the user to shop. 
// If incorrect login information (bad username and/or bad password) is entered, the user is redirected back to the login form.

session_start();

if (isset($_SESSION['customer_id'])) 
    header("Location: ../pages/estore.php");

// Save values used to fill in login form values if we have to go back to the login form and try again
$_SESSION['POST_SAVE'] = $_POST;

include("connectToDatabase.php");

$query = "SELECT * FROM my_Customer WHERE login_name = '$_POST[loginName]'";
$rowsWithMatchingLoginName = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($rowsWithMatchingLoginName);

if ($numRecords == 0) {
    // No records retrieved, username entered not in database; go back to form
    header("Location: ../pages/formLogin.php?retrying=true");
}
if ($numRecords == 1) {
    $row = mysqli_fetch_array($rowsWithMatchingLoginName, MYSQLI_ASSOC);
    if (md5($_POST['loginPassword']) == $row['login_password']) 
    {
        $_SESSION['customer_id'] = $row['customer_id'];
        $_SESSION['salutation'] = $row['salutation'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['middle_initial'] = $row['middle_initial'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['login_name'] = $row['login_name'];
        
        // Redirect back to the previous page
        $previousPage = getenv('HTTP_REFERER');
        header("Location: " .$previousPage);
    } else {
        // Passwords (entered/in database) don't match; go back to form
        header("Location: ../pages/formLogin.php?retrying=true");
    }
    }

mysqli_close($db);
?>
