<?php get_header(); ?>
            
            <div class="col-sm-12 mb-5">
                <h1 class="display-4 text-center text-white my-5">מסיבה כלשהי העמוד לא נמצא</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col p-3 mb-5">
                <h3 class="p-3">נסו להיעזר בחיפוש</h3>
                <?php get_search_form(); ?>
            </div>
        </div>
        

        <div class="memorial text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/memorial-candle.jpeg">
            <p>לזכר סוניה בת-ציון פסחוב</p>
        </div>

    </div>

    <?php get_footer(); ?>
