<?php
/**
 * Template Name: Contact 
 */

    get_header();

?>
<div class="wrapper p-0" id="single-wrapper">
    <div id="content" tabindex="-1">
        <main class="site-main" id="main">
            <div id="contact-top-banner" class="p-0 section hero-section bg-position bg-top-center " style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
                <div class="overlay"></div>
                    <div class="container">
                        <div class="text-white contact-banner-inner text-center">
                            <h1 class="font-weight-bold"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</div>
    <?php

    get_footer();
    ?>