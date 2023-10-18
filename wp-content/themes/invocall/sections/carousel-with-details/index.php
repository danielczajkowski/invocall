<section class="carousel_with_details">
    <?php load_element_styles( 'sections/carousel-with-details/dist', 'carousel-with-details-style' ); ?>
    <div class="page--width">
        <div class="carousel_with_details__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="carousel_with_details__left-col__wrapper">
                    <div class="carousel_with_details__left-col">
                        <h3 class="carousel_with_details__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            $group = get_sub_field('group');
            if( $group ): ?>
                <h1>carousel_with_details</h1>
            <?php endif; ?>
        </div>
    </div>
</section>