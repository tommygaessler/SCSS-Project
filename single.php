<?php 
// Get the post ID form the URL
$postID = urldecode($_GET["post"]);

include ('posts/'.$postID.'.php');


$pageTitle = $postTitle;

$posts = scandir('posts/');

$postCount = '';

foreach($posts as $post)
{
    if (pathinfo($post, PATHINFO_EXTENSION) == "php")
    {
        $postCount++;
    }
}

?>

<?php include 'header.php' ?>
<main>
    <div class="row">
        <h3><?php echo $postTitle; ?></h3>

        <?php echo $postPicture?>
    
        <p><?php echo $postContent; ?></p>
        <div class="post-navigation">
            <?php if($postID - 1 > 0) : ?>
            <a href="/single.php?post=0<?php echo $postID - 1; ?>">Previous</a>
            <?php endif; ?>
            
            <?php if($postID < $postCount) : ?>
            <a href="/single.php?post=0<?php echo $postID + 1; ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php include 'footer.php' ?>