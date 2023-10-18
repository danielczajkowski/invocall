<section class="data_info">
    <?php load_element_styles( 'sections/data-info/dist', 'data-info-style' ); ?>
    <div class="page--width">
        <div class="data_info__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="data_info__left-col__wrapper">
                    <div class="data_info__left-col">
                        <h3 class="data_info__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            $group = get_sub_field('group');
            if( $group ): ?>
                <h1>data_info</h1>
            <?php endif; ?>
        </div>
    </div>
</section>