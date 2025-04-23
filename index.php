<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Boon</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <!-- Debug output -->
    <?php 
    $cookieConsent = isset($_COOKIE['cookie_consent']);
    echo "<!-- Cookie consent status: ".($cookieConsent ? 'true' : 'false')." -->";
    ?>
</main>

<?php 
echo "<!-- Trying to include cookie-consent.php -->";
include 'cookie-consent.php';
echo "<!-- After include -->";
?>

<?php include 'footer.php'; ?>
    
</body>
</html>