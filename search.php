<?php
/*
Template Name: Search Page
*/
?>
    <?php get_header(); ?>
            
            <div class="col-sm-12 mb-5">
                <h1 class="display-4 text-center text-white my-5"><?php wp_title(''); ?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center m-3">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
            <div class="col-md-12 my-2 article">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
        
        <?php endwhile; else : ?>
            <div class="col-md">
            <h6 class="display-4 m-4"><?php esc_html_e( 'אין תוצאות..' ); ?></h6>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
        
        </div>
        

        <div class="memorial text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/memorial-candle.jpeg">
            <p>לזכר סוניה בת-ציון פסחוב</p>
        </div>

    </div>

    <?php get_footer(); ?>
