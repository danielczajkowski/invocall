<?php
    $section_title = get_sub_field('heading') ?: '';

?>

<section class="blocks-quote">
    <?php load_element_styles( 'sections/block-quote', 'block-quote-style' ); ?>
    <div class="page--width">
        <div class="blocks-quote__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="blocks-quote__left-col__wrapper offer__col offer__col--left">
                    <div class="blocks-quote__left-col offer__col--header">
                        <h3 class="blocks-quote__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <div class="offer__col offer__col--right">
            <?php if( have_rows('repeater') ): ?>
                <div class="blocks-quote__right-col">
                    <?php while( have_rows('repeater') ): the_row(); ?>
                        <blockquote class="block-quote__single">
                            <?php if( !empty( get_sub_field('heading') ) ): ?>
                                <em class="block-quote__heading">"<?php the_sub_field('heading'); ?>"</em>
                            <?php endif; ?>
                            <?php if( !empty( get_sub_field('text') ) ): ?>
                                <div class="rte"><?php the_sub_field('text'); ?></div>
                            <?php endif; ?>
                        </blockquote>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>