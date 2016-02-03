<?php
    $pageTitle = 'Home';
?>

<?php include 'header.php'; ?>
    <main>

        <div class="hero">

            <div class="row clearfix">
                <div class="heroborder">
                <?php if(empty($userName)) : ?>
                    <h1>Who you be? <a href="login.php">Login Here</a></h1>
                <?php else : ?>
                    <h1>Hello <?php echo $userName; ?>, nice to see you again.</h1>
                <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="column one-half">

                <h3>Column Heading</h3>
                <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                <p>Haircut engaged something Dibble Dibble Dibble Dibble nonsensical alone sadly prickle-ly playthings Wickersham Brothers guaranteed murmur.</p>
            </div>
            <div class="column one-half">

                <h3>Column Heading</h3>
                <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                <p>Haircut engaged something Dibble Dibble Dibble Dibble nonsensical alone sadly prickle-ly playthings Wickersham Brothers guaranteed murmur.</p>

            </div>
        </div>

    </main>
    <?php include 'footer.php'; ?>