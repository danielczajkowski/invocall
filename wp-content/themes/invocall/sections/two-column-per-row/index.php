<section class="two_column_per_row">
    <?php load_element_styles( 'sections/two-column-per-row/dist', 'two-column-per-row-style' ); ?>
    <div class="page--width">
        <div class="two_column_per_row__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="two_column_per_row__left-col__wrapper">
                    <div class="two_column_per_row__left-col">
                        <h3 class="two_column_per_row__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            $group = get_sub_field('group');
            if( $group ): ?>
                <h1>two_column_per_row</h1>
            <?php endif; ?>
        </div>
    </div>
</section>