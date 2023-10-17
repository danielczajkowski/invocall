<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/block-quote/style.css" />

<section class="blocks-quote">
    <div class="page--width">
        <div class="blocks-quote__wrapper">
            <?php if( !empty( get_sub_field('heading') ) ): ?>
                <div class="blocks-quote__left-col__wrapper">
                    <div class="blocks-quote__left-col">
                        <h3 class="blocks-quote__section-title section-title"><?php the_sub_field('heading'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
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
</section>
