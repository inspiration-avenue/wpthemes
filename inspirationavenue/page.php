<?php 

    get_header();

    while(have_posts()){
        the_post(); ?>
    <div id="content-wrapper">
        <h1><?php the_title(); ?></h1>
        <h2>REMEMBER TO CREATE CUSTOM FIELD HERE.</h2>
    </div>
        <div id="generic-content">
            <?php the_content(); ?>
</div>
        
    <?php }

    get_footer();   
    
?>
