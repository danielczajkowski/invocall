<?php
/* Template Name: Kariera */
?>

<?php get_header(); ?>

<?php include('sections/hero-subpage/index.php'); ?>

<?php
    if( have_rows('sections') ):
        while ( have_rows('sections') ) : the_row();
            if( get_row_layout() == 'title_text' ):
                include('sections/title-text/index.php');
            elseif( get_row_layout() == 'two_columns_blocks' ):
                include('sections/two-columns-blocks/index.php');
            elseif( get_row_layout() == 'columns_numbers_texts' ):
                include('sections/columns-numbers-texts/index.php');
            elseif( get_row_layout() == 'tiles_with_numbers' ):
                get_template_part('sections/tiles-with-numbers/index');
            endif;
        endwhile;
    endif;
?>

<?php include('sections/cpt-job-offers/index.php'); ?>

<?php get_footer(); ?>