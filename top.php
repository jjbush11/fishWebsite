<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang ="en">

    <head>
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Fresh Water Fish</title>
        <meta name="auhtor" content="James Bush">
        <meta name="description" content="Fresh water fish is one of the animal gorups of this world
        that make Earth a wonderful place. Dive in to read about the wonders of fresh water fish.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" 
                href="css/custom.css?version=<?php print time(); ?>" 
                type="text/css">
        <link rel="stylesheet" 
                media="(max-width: 800px)"
                href="css/custom-tablet.css?version=<?php print time(); ?>" 
                type="text/css">
        <link rel="stylesheet" 
                media="(max-width: 600px)"
                href="css/custom-phone.css?version=<?php print time(); ?>" 
                type="text/css">
    </head>


    <?php
print '<body class="' . $pathParts['filename'] . '">';
print '<!-- ########## Body element ######### -->';
include 'connect-DB.php';
include 'header.php';
include 'nav.php';
?>
    