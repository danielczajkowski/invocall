<?php
    if( have_rows('offer_sections') ):
        while ( have_rows('offer_sections') ) : the_row();
            if( get_row_layout() == 'image_text_button' ):
                get_template_part('sections/image_text_button/index');
            elseif( get_row_layout() == 'columns_icons' ):
                get_template_part('sections/columns-with-icons/index');
            elseif( get_row_layout() == 'block_quote' ):
                get_template_part('sections/block-quote/index');
            elseif( get_row_layout() == 'numbers_texts' ):
                get_template_part('sections/numbers_texts/index');
            elseif( get_row_layout() == 'texts_button' ):
                get_template_part('sections/texts-button/index');
            elseif( get_row_layout() == 'easy_schema' ):
                get_template_part('sections/easy-schema/index');
            endif;
        endwhile;
    endif;
?>