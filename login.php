<?php $userName = $_POST['username']; ?>

<form method="POST">
  Username:<br>
  <input type="text" name="username"><br>
    <input type="submit" value="Submit">
</form>



<?php switch($userName):
case "": ?>
    <h1>Welcome! Enter your username!</h1>
<?php break; ?>
<?php case "Tommy": ?>
    <h1>Hello <?php echo $userName; ?><a href="index.php">Login Here</a></h1>
<?php break; ?>
<?php case ($userName !== "Tommy"): ?>
    <h1>Don't have a username? <a href="#">Create one here!</a></h1>
<?php break; ?>
<?php endswitch; ?>