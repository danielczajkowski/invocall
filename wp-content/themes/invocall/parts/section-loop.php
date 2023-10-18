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
            elseif( get_row_layout() == 'tiles_with_numbers' ):
                get_template_part('sections/tiles-with-numbers/index');
            elseif( get_row_layout() == 'two_column_per_row' ):
                get_template_part('sections/two-column-per-row/index');
            elseif( get_row_layout() == 'carousel_with_details' ):
                get_template_part('sections/carousel-with-details/index');
            elseif( get_row_layout() == 'data_info' ):
                get_template_part('sections/data-info/index');
            elseif( get_row_layout() == 'why_we' ):
                get_template_part('sections/why-we/index');
            endif;
        endwhile;
    endif;
?>