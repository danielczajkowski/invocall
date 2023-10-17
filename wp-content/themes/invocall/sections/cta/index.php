<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/cta/style.css" />

<section class="cta">
    <div class="cta__wrapper">
        <?php $background = get_sub_field('background');
        if( !empty( $background ) ): ?>
            <figure class="cta__background">
            <?php
            $image_size = 'full'; // przykładowo
            $image_id = $background; // (return image ID)
            $image = wp_get_attachment_image( $image_id, $image_size );
            echo $image;
            ?>
            </figure>
        <?php endif; ?>
        <div class="cta__content">
            <div class="page--width">
                <div class="cta__content-wrapper">
                    <?php if( get_sub_field('text') ): ?>
                        <h2 class="cta__text"><?php the_sub_field('text'); ?></h2>
                    <?php endif; ?>
                    <?php if( get_sub_field('author') ): ?>
                        <span class="cta__author">~&nbsp;<?php the_sub_field('author'); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>