<?php
/**
 * Template Name: Pricing
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

<div id="pricing-table">
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="package-1">
                    <h3>Basic</h3>
                    <div id="price-1">
                        <h1>R 2650</h1>
                        <p class="feature-1">Upto 5 pages</p>
                        <p class="feature-2">A sriking website with basic on page&nbsp;</p>
                        <p class="feature-3">search optimisation</p>
                        <p class="feature-4">WordPress CMS</p><button type="button" class="btn btn-outline-light">More Info
</button></div>
                </div>
                <div class="col-md-4" id="package-2">
                    <h3>Advanced</h3>
                    <div id="price-2">
                        <h1>R 4999</h1>
                    </div>
                    <p>Upto 5 pages</p>
                    <p>A Striking Website with advanced&nbsp;</p>
                    <p>search optimisation</p>
                    <p>WordPress CMS</p><button type="button" class="btn btn-outline-light">More Info</button></div>
                <div class="col-md-4" id="package-3">
                    <h3>Bespoke</h3>
                    <div id="price-3">
                        <h1>R 350 P/H</h1>
                        <p>Upto 5 pages</p>
                        <p>Custom Made Functionality.</p>
                        <p>E-mail, Phone or Skype Support</p>
                        <p>Hand coded Wordpress theme</p><button type="button" class="btn btn-outline-light">More Info
</button></div>
                </div>
            </div>
        </div>
    </div>
    <div id="cta">
        <h3>Need Social Media Marketing?</h3>
        <h4>We develop hyper targetted, converting strategies.</h4><button type="button" class="btn btn-outline-light">Get a Social Strategy
</button></div>
        
    <?php }

    get_footer();   
    
?>
