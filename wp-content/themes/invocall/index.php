<?php get_header(); ?>

<?php

if( have_rows('sections') ):
    while ( have_rows('sections') ) : the_row();
        if( get_row_layout() == 'hero' ):
            include('sections/hero/index.php');
        elseif( get_row_layout() == 'columns_under_hero' ):
            include('sections/columns_under_hero/index.php');
        elseif( get_row_layout() == 'section_about' ):
            include('sections/section-about/index.php');
        elseif( get_row_layout() == 'home_offers' ):
            include('sections/home-offers/index.php');
        endif;
    endwhile;
endif; ?>

<?php include('sections/slider-case-study/index.php'); ?>

<?php get_footer(); ?>