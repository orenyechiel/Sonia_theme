    <?php get_header(); ?>
            
            <div class="col-sm-12 mb-5">
                <h1 class="display-4 text-center text-white my-5">קהילת שורשים מקווקז</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
            <div class="col-md mx-auto m-2 article">S
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
        
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts yet..' ); ?></p>
        <?php endif; ?>
        
        </div>
        

        <div class="memorial text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/memorial-candle.jpeg">
            <p>לזכר סוניה בת-ציון פסחוב</p>
        </div>

    </div>

    <?php get_footer(); ?>
