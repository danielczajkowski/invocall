<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/columns-with-icons/style.css" />

<section class="columns-icons">
    <div class="page--width">
        <div class="columns-icons__wrapper">
            <?php if( !empty( get_sub_field('heading') ) ): ?>
                <div class="columns-icons__header">
                    <h3><?php the_sub_field('heading'); ?></h3>
                </div>
            <?php endif; ?>
            <?php if( have_rows('repeater') ): ?>
                <div class="columns-icons__container">
                    <?php while( have_rows('repeater') ): the_row(); ?>
                        <div class="columns-icons__column">
                            <figure class="columns-icons__column-icon">
                            <?php
                            $image_size = 'full'; // przykładowo
                            $image_id = get_sub_field('icon'); // (return image ID)
                            $image = wp_get_attachment_image( $image_id, $image_size );
                            echo $image;
                            ?>
                            </figure>
                            <?php if( !empty( get_sub_field('text') ) ): ?>
                                <div class="rte"><?php the_sub_field('text'); ?></div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>