<?php get_header(); ?>

<?php include('sections/hero-subpage/index.php'); ?>

<?php
    if( have_rows('offer_sections') ):
        while ( have_rows('offer_sections') ) : the_row();
            if( get_row_layout() == 'image_text_button' ):
                include('sections/image_text_button/index.php');
            elseif( get_row_layout() == 'columns_icons' ):
                include('sections/columns-with-icons/index.php');
            elseif( get_row_layout() == 'block_quote' ):
                include('sections/block-quote/index.php');
            elseif( get_row_layout() == 'numbers_texts' ):
                include('sections/numbers_texts/index.php');
            elseif( get_row_layout() == 'texts_button' ):
                include('sections/texts-button/index.php');
            endif;
        endwhile;
    endif;
?>

<?php get_footer(); ?>