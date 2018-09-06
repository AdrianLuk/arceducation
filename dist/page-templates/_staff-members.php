<?php
/**
 * Template Name: Staff Members
 */

    get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <div class="wrapper p-0" id="single-wrapper">

	<div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">
                <div id="staff-top-banner" class="p-0 section hero-section bg-position bg-top-center " style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
                <div class="overlay"></div>
                    <div class="container">
                        <div class="text-white home-banner-inner text-center">
                            <h1 class="font-weight-bold"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
                <div class="container staff" id="directors">
                  
                    
                        <?php while( have_rows('staff_member') ) : the_row(); 
                            $picture = get_sub_field('picture') ? get_sub_field('picture') : '';
                            $name = get_sub_field('name') ? get_sub_field('name') : '';
                            $title = get_sub_field('title') ? get_sub_field('title') : '';
                            $education = get_sub_field('education') ? get_sub_field('education') : '';
                            $description = get_sub_field('description') ? get_sub_field('description') : '';
                        ?>
                    
                          <div class="row">
                              <div class="col-12 col-md-4">
                                  <img src="<?= $picture ?>" alt="<?= $name ?>" class="img-fluid">
                              </div>
                          </div>
                    
                        <?php endwhile; ?>
                    
                 
                    
                </div>
            </main>
        </div>
    </div>
    
    <?php
    get_footer();
    ?>