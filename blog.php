<?php 
    $pageTitle = 'Blog';

    $sidebar = 'yes';
?>

<?php include 'header.php'; ?>

<main>
    <div class="row">
        <!--<h3>Blog</h3>-->
    </div>
    <div class="row">

    <?php if($sidebar == 'yes') : ?>
        <div class="column two-third">
    <?php endif; ?>

        <ul class="blog-roll">
            <?php 
                $posts = scandir('posts/');
            
                foreach($posts as $post) 
                {
                    if (pathinfo($post, PATHINFO_EXTENSION) == "php")
                    {
                        $postID = substr($post, 0, -4);
                        
                        $postTitle = '';
                        $postContent = '';
                        $postFeatureImage = '';
                        
                        include ('posts/'.$post);
                        
                        echo '<li>';
                        echo'<h3><a href="single.php?post='.$postID.'">'.$postTitle.'</a></h3>';

                        if(!empty($postFeatureImage))
                        {
                            echo '<a class="feature-image-link" href="single.php?post='.$postID.'"><img src="/posts/feature-images/'.$postFeatureImage.'"></a>';
                            
                        }

                        echo '<p>'.substr($postContent, 0, 150).'...</p>';

                        echo '<a class="button" href="single.php?post='.$postID.'">Read More</a>';    
                        echo '</li>';
                    }
                }
            ?>
        </ul>

        <?php if($sidebar == 'yes') : ?>
        </div>

        <div class="column one-third">

            <h3>Widget Headline</h3>

                <a class="twitter-timeline" href="https://twitter.com/tommygaessler" data-widget-id="697974647199916032">Tweets by @tommygaessler</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                <h3>Widget Headline</h3>

                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.2407407407% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BBl6ONEGvzK/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Blessed to have been apart of the parade #superbowl50 🔶🏈</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by Tommy (@tman_5) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-02-10T04:28:17+00:00">Feb 9, 2016 at 8:28pm PST</time></p></div></blockquote>
                <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

                <h3>Widget Headline</h3>

                <p>Haircut engaged something Dibble Dibble Dibble Dibble nonsensical alone sadly prickle-ly playthings Wickersham Brothers guaranteed murmur. </p>

        </div>
        <?php endif; ?>
    </div>
</main>

<?php include 'footer.php'; ?>