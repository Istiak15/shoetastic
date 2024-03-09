<?php
session_start();
$_SESSION['SECURE'] = '!@#$^%FDSSFDWQR@';
$_SESSION['ORIGIN'] = $_SERVER['PHP_SELF'];

include("../common/header.html");
?>

<body class="body w3-auto">
    <header class="w3-auto">
        <?php
        echo '<div class="w3-border w3-border-black w3-light-grey">';
        include("../common/banner.php");
        include("../common/menus.html");
        echo '</div>';
        ?>
    </header>

<?php
$isMrs = isset($_SESSION['POST_SAVE']["salutation"]) &&
                $_SESSION['POST_SAVE']["salutation"] == "Mrs.";
$isMs = isset($_SESSION['POST_SAVE']["salutation"]) &&
                $_SESSION['POST_SAVE']["salutation"] == "Ms.";
$isMr = isset($_SESSION['POST_SAVE']["salutation"]) &&
                $_SESSION['POST_SAVE']["salutation"] == "Mr.";
$isDr = isset($_SESSION['POST_SAVE']["salutation"]) &&
                $_SESSION['POST_SAVE']["salutation"] == "Dr.";
$firstNameSaved = isset($_SESSION['POST_SAVE']["firstName"]) ?
                $_SESSION['POST_SAVE']["firstName"] : "";
$middleInitialSaved = isset($_SESSION['POST_SAVE']["middleInitial"]) ?
                $_SESSION['POST_SAVE']["middleInitial"] : "";
$lastNameSaved = isset($_SESSION['POST_SAVE']["lastName"]) ?
                $_SESSION['POST_SAVE']["lastName"] : "";
$isFemale = isset($_SESSION['POST_SAVE']["gender"]) &&
                $_SESSION['POST_SAVE']["gender"] == "Female";
$isMale = isset($_SESSION['POST_SAVE']["gender"]) &&
                $_SESSION['POST_SAVE']["gender"] == "Male";
$isOther = isset($_SESSION['POST_SAVE']["gender"]) &&
                $_SESSION['POST_SAVE']["gender"] == "Other";
$emailSaved = isset($_SESSION['POST_SAVE']["email"]) ?
                $_SESSION['POST_SAVE']["email"] : "";
$phoneSaved = isset($_SESSION['POST_SAVE']["phone"]) ?
                $_SESSION['POST_SAVE']["phone"] : "";
$streetSaved = isset($_SESSION['POST_SAVE']["street"]) ?
                $_SESSION['POST_SAVE']["street"] : "";
$citySaved = isset($_SESSION['POST_SAVE']["city"]) ?
                $_SESSION['POST_SAVE']["city"] : "";
$postalCodeSaved = isset($_SESSION['POST_SAVE']["postalCode"]) ?
                $_SESSION['POST_SAVE']["postalCode"] : "";
$isAB = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "AB";
$isBC = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "BC";
$isMB = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "MB";
$isNB = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "NB";
$isNL = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "NL";
$isNS = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "NS";
$isON = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "ON";
$isPE = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "PE";
$isQC = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "QC";
$isSK = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "SK";
$isNT = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "NT";
$isNU = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "NU";
$isYT = isset($_SESSION['POST_SAVE']["region"]) &&
                $_SESSION['POST_SAVE']["region"] == "YT";
$loginNameSaved = isset($_SESSION['POST_SAVE']["loginName"]) ?
                $_SESSION['POST_SAVE']["loginName"] : "";
$password1Saved = isset($_SESSION['POST_SAVE']["password1"]) ?
                $_SESSION['POST_SAVE']["password1"] : "";
$password2Saved = isset($_SESSION['POST_SAVE']["password2"]) ?
                $_SESSION['POST_SAVE']["password2"] : "";
?>

<main class="w3-container">
        <article class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-light-grey">

        <h4 class="w3-center"><strong>Registration Form</strong></h4>
        <h5 class="w3-center">
            (Sorry, but only Canadian residents for the moment)
        </h5>
        <p class="error w3-center">Each * denotes a required field.</p>
        <form id="registrationForm"
        action="scripts/formRegistrationResponse.php"
        method="post" autocomplete="on">

        <div class="w3-row">
        <div class="w3-quarter w3-container">
        Salutation:
        </div>

        <div class="w3-threequarter w3-container">
         <select name="salutation" style="width: 25%" required>
         <option value="" selected disabled hidden>Choose One</option>
         <option value="Mrs." <?php if ($isMrs) echo "selected"; ?> >
                Mrs.
        </option>

        <option value="Ms." <?php if ($isMs) echo "selected"; ?> >
                Ms.
        </option>

        <option value="Mr." <?php if ($isMr) echo "selected"; ?> >
                Mr.
        </option>

        <option value="Dr." <?php if ($isDr) echo "selected"; ?> >
                Dr.
        </option>
    </select>

    <span class="w3-text-red">*</span>
</div>

<div class="w3-row">
    <div class="w3-quarter w3-container">
        First Name:
</div>

<div class="w3-threequarter w3-container">
    <input type="text" name="firstName" required
    style="width: 80%;"
    value="<?php echo $firstNameSaved; ?>"
    title="Initial capital; spaces, apostrophes, &#10;and hyphens allowed"
    pattern="^[A-Z][A-Za-z '-]*$">
    <span class="w3-text-red">*</span>
</div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Middle Initial:
</div>
<div class="w3-threequarter w3-container">
    <input type="text" name="middleInitial" 
    style="width: 10%;"
    value="<?php echo $middleInitialSaved; ?>"
    title="Capital letter, followed by an optional period"
    pattern="^[A-Z][\.]?$">
</div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Last Name:
</div>

<div class="w3-threequarter w3-container">
    <input type="text" name="lastName" required
    style="width: 80%;"
    value="<?php echo $lastNameSaved; ?>"
    title="Initial capital; spaces, apostrophes, &#10;and hyphens allowed"
    pattern="^[A-Z][A-Za-z '-]*$">
    <span class="w3-text-red">*</span>
</div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Gender:
    </div>
    <div class="w3-threequarter w3-container">
        <select name="gender" style="width: 80%" required>
            <option value="" <?php if (!$isFemale && !$isMale && !$isOther) echo "selected"; ?>>Choose One</option>
            <option value="Female" <?php if ($isFemale) echo "selected"; ?>>Female</option>
            <option value="Male" <?php if ($isMale) echo "selected"; ?>>Male</option>
            <option value="Other" <?php if ($isOther) echo "selected"; ?>>Other</option>
        </select>
        <span class="w3-text-red">*</span>
    </div>
</div>


<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        E-mail Address:
        <span class="w3-text-red">*</span>
    </div>
    <div class="w3-threequarter w3-container">
        <input type="email" name="email" required
               style="width: 80%;"
               value="<?php echo $emailSaved; ?>"
               placeholder="Must be unique within our database">
        <span class="w3-text-red">*</span>
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Phone Number:
    </div>
    <div class="w3-threequarter w3-container">
        <input type="tel" name="phone"
               style="width: 80%;"
               value="<?php echo $phoneSaved; ?>">
    </div>
</div>


<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Street Address:
    </div>
    <div class="w3-threequarter w3-container">
        <input type="text" name="street" required
               style="width: 80%;"
               value="<?php echo $streetSaved; ?>">
               <span class="w3-text-red">*</span>
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        City:
    </div>
    <div class="w3-threequarter w3-container">
        <input type="text" name="city" required
               style="width: 80%;"
               value="<?php echo $citySaved; ?>">
        <span class="w3-text-red">*</span>
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Region:
        <span class="w3-text-red">*</span>
    </div>
    <div class="w3-threequarter w3-container">
        <select name="region" style="width: 80%" required>
            <option value="" selected disabled hidden>Choose One</option>
            <option value="AB" <?php if ($isAB) echo "selected"; ?>>AB</option>
            <option value="BC" <?php if ($isBC) echo "selected"; ?>>BC</option>
            <option value="MB" <?php if ($isMB) echo "selected"; ?>>MB</option>
            <option value="NB" <?php if ($isNB) echo "selected"; ?>>NB</option>
            <option value="NL" <?php if ($isNL) echo "selected"; ?>>NL</option>
            <option value="NS" <?php if ($isNS) echo "selected"; ?>>NS</option>
            <option value="ON" <?php if ($isON) echo "selected"; ?>>ON</option>
            <option value="PE" <?php if ($isPE) echo "selected"; ?>>PE</option>
            <option value="QC" <?php if ($isQC) echo "selected"; ?>>QC</option>
            <option value="SK" <?php if ($isSK) echo "selected"; ?>>SK</option>
            <option value="NT" <?php if ($isNT) echo "selected"; ?>>NT</option>
            <option value="NU" <?php if ($isNU) echo "selected"; ?>>NU</option>
            <option value="YT" <?php if ($isYT) echo "selected"; ?>>YT</option>
        </select>
        <span class="w3-text-red">*</span>
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Postal Code:
    </div>
    <div class="w3-threequarter w3-container">
        <input type="text" name="postalCode"
               style="width: 80%;"
               value="<?php echo $postalCodeSaved; ?>">
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Login Name:
        <span class="w3-text-red">*</span>
    </div>
    <div class="w3-threequarter w3-container">
        <input type="text" name="loginName" required
               style="width: 80%;"
               value="<?php echo $loginNameSaved; ?>"
               placeholder="Choose your preferred username for login">
        <span class="w3-text-red">*</span>
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Password:
        <span class="w3-text-red">*</span>
    </div>
    <div class="w3-threequarter w3-container">
        <input type="password" name="password1" required
               style="width: 80%;"
               placeholder="Choose a good, strong password">
        <span class="w3-text-red">*</span>
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-quarter w3-container">
        Password again:
        <span class="w3-text-red">*</span>
    </div>
    <div class="w3-threequarter w3-container">
        <input type="password" name="password2" required
               style="width: 80%;"
               placeholder="Re-enter same password as above">
        <span class="w3-text-red">*</span>
    </div>
</div>

<div class="w3-row">
    <div class="w3-third w3-container">
        <p>&nbsp;</p>
    </div>
    <div class="w3-twothird w3-container">
        <p>
            <input type="submit" value="Submit Form Data">
            <input type="reset" value="Reset Form Data">
        </p>
    </div>
</div>

</form>
</article>
</main>
<footer class="w3-container">
    <?php
    echo '<div class="w3-border w3-border-black w3-light-grey">';
    include("../common/footer.html");
    ?>
</footer>

</body>

</html>
