<?php
    $pageID = strtolower($pageTitle);

    $userName = 'Tommy';

?>

<!DOCTYPE html>
<html>

<head>

    <title><?php echo $pageTitle; ?> | <?php echo $userName; ?></title>


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="styles.css">
</head>

<body id="<?php echo $pageID; ?>">
    <header>

        <div class="headerrow clearfix">

            <a href="index.php"><img class="logo" src="images/logo.png"></a>

            <?php include 'nav.php'; ?>

        </div>
    </header>