<?php
    $pageID = strtolower($pageTitle);

    $userName = 'Tommy';

    $fullName = 'Tommy Gaessler';

?>

<!DOCTYPE html>
<html>

<head>

    <title><?php echo $pageTitle; ?> | <?php echo $userName; ?></title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png">

    <!-- JQ -->
    <link rel="stylesheet" href="assets/genericons/genericons.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 

</head>
<?php if(!empty($postID)) : ?>
<body id="single">
<?php else : ?>
<body id="<?php echo $pageID; ?>">
<?php endif; ?>
    <header>

        <div class="row">

            <a href="index.php"><img class="logo" src="assets/images/logo.png"></a>

            <?php include 'nav.php'; ?>

        </div>
    </header>