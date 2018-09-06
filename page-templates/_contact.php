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
<div class="container my-3">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2877.434783839128!2d-79.38454458482813!3d43.84681624790758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2b4aed139ed7%3A0x1764f56d14814b31!2sArc+Education+Centre!5e0!3m2!1sen!2sca!4v1535677088582" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 d-flex flex-column">
            <div class="contactpage-description">
                <?php the_field('contact_description'); ?>
            </div>
            <?php if(have_rows('contact_social')):?>
            <?php if ( have_rows('field_name') ) : ?>
            <div class="contactpage-contactlinks">
                <?php while( have_rows('contact_social') ) : the_row(); 
                    $social_icon = get_sub_field('social_icon') ? get_sub_field('social_icon'): '';
                    $social_url = get_sub_field('social_url') ? get_sub_field('social_url'): '';
                ?>
                <a href="<?= $social_url; ?>"><span class="fab fa-<?= $social_icon; ?>"></span></a>
                <?php endwhile; ?>
                <?php while( have_rows('contact_info') ) : the_row(); 
                    $contact_phone = get_sub_field('phone') ? get_sub_field('phone') : '';
                    $contact_email = get_sub_field('email') ? get_sub_field('email') : '';
                    $contact_address = get_sub_field('address') ? get_sub_field('address') : '';
                ?>
                    <a href="mailto:<?= $contact_email ?>"><span class="mr-2 far fa-envelope"></span><?= $contact_email ?></a>
                    <a href="tel:<?= $contact_phone ?>"><span class="mr-2 far fa-phone"><?= $contact_phone ?> </span><?= $contact_phone ?></a>
                    <span class="mr-2 far fa-map-marker-alt">
                    <?= $contact_address ?>
                    </span>
           
               <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php endif ?>
          
           
        </div>
    <div class="col-12 col-md-6">
        <?php echo do_shortcode('[contact-form-7 id="59" title="Contact form 1"]'); ?>
    </div>

    </div>
</div>
    <?php

    get_footer();
    ?>