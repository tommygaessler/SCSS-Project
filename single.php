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
    <div class="row post-content">
        <h3><?php echo $postTitle; ?></h3>

        <?php 
            if(!empty($postFeatureImage))
            {
                echo '<img class="feature-image" src="/posts/feature-images/'.$postFeatureImage.'">';
            }
        ?>
    
        <?php echo $postContent; ?>

        <hr>

        <div class="post-navigation">
            <!-- Hide previous link on first -->
            <?php if($postID - 1 > 0) : ?>
                <a class="button previous" href="/single.php?post=0<?php echo $postID - 1; ?>">Previous</a>
            <?php endif; ?>
            
            <?php if($postID < $postCount) : ?>
                <!-- Hide next link on last post -->
                <a class="button next" href="/single.php?post=0<?php echo $postID + 1; ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php include 'footer.php' ?>