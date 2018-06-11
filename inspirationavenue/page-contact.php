<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage InspirationAvenue
 * @since Inspiration Avenue 1.0
 */


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

<div id="main-content" style="background-image:url(<?php echo get_theme_file_uri('/img/054.jpg')?>);background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="container" id="main-copy">
            <p class="line-1">We Love To&nbsp;</p>
            <p class="line-2">Meet new&nbsp;</p>
            <p class="line-3">People.</p>
        </div>
    </div>
    <div class="container" id="contact-copy">
        <p>Inspiration Avenue is a boutique design agency located in Empangeni, KZN always looking for the next great client and project. If you’d like working with us, please start a conversation!</p>
    </div>
    <div class="contact-clean">
        <form method="post" id="form">
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" id="form-input"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email" id="form-input"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message" id="form-input"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" id="submit-btn">Submit</button></div>
        </form>
    </div>

 <?php }

    get_footer();   
    
?>