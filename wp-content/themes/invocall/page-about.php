<?php
/* Template Name: O nas */
?>

<?php get_header(); ?>

<?php include('sections/hero-subpage/index.php'); ?>

<?php
    if( have_rows('about_sections') ):
        while ( have_rows('about_sections') ) : the_row();
            if( get_row_layout() == 'date_slider' ):
                include('sections/date-slider/index.php');
            elseif( get_row_layout() == 'two_columns' ):
                include('sections/about-two-columns/index.php');
            elseif( get_row_layout() == 'cta' ):
                include('sections/cta/index.php');
            elseif( get_row_layout() == 'our_team_slider' ):
                include('sections/our-team-slider/index.php');
            elseif( get_row_layout() == 'columns_with_numbers' ):
                include('sections/about-columns-numbers/index.php');
            endif;
        endwhile;
    endif;
?>

<?php get_footer(); ?>