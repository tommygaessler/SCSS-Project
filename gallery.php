<?php 
    $pageTitle = 'Gallery';
?>

<?php include 'header.php'; ?>

<main>
    <div class="row">
        
    </div>
    <div class="row">
        <div class="gallery-roll">
            <?php 
            $images = scandir('galleries/mountain-gallery/');
            
            foreach($images as $image) 
            {
                if (pathinfo($image, PATHINFO_EXTENSION) == "jpg")
                {
                    $imageID = substr($image, 0, -4);

                    echo '<a style="background-image: url(galleries/mountain-gallery/'.$imageID.'.jpg);" href="galleries/mountain-gallery/'.$imageID.'.jpg" data-lightbox="mountian-gallary"></a>';
                }
            }
            ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>