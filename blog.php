<?php 
    $pageTitle = 'Blog';
?>

<?php include 'header.php'; ?>

<main>
    <div class="row">
        <!--<h3>Blog</h3>-->
    </div>
    <div class="row">
        <ul class="blog-roll">
            <?php 
            $posts = scandir('posts/');
            
            foreach($posts as $post) 
            {
                if (pathinfo($post, PATHINFO_EXTENSION) == "php")
                {
                    $postID = substr($post, 0, -4);
                    
                    $postTitle = '';
                    $postPicture = '';
                    $postContent = '';
                    
                    include ('posts/'.$post);
                    
                    
            
            echo '<li><h3><a href="single.php?post='.$postID.'">'.$postTitle.'</a></h3>'.$postPicture.'<p>'.substr($postContent, 0, 150).'...<h3><a class="button" href="single.php?post='.$postID.'">Read More</a></h3></li>';
                }
            }
            ?>
        </ul>
    </div>
</main>

<?php include 'footer.php'; ?>