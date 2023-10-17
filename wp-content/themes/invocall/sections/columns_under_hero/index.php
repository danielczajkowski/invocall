<?php if( have_rows('repeater') ): ?>

    <section class="columns-under-hero">
        <div class="columns-under-hero__wrapper">
            <?php while( have_rows('repeater') ) : the_row(); ?>
                <div class="columns-under-hero__col">
                    <?php if( !empty( get_sub_field('text') ) && !empty( get_sub_field('link') ) ): ?>
                        <div class="columns-under-hero__content">
                            <?php if( !empty( get_sub_field('text') ) ): ?>
                                <h5 class="columns-under-hero__col-heading"><?php the_sub_field('text') ?></h5>
                            <?php endif; ?>
                            <?php if( !empty( get_sub_field('link') ) ): ?>
                                <div class="columns-under-hero__col-btn__wrapper">
                                    <?php $columns_under_hero = get_sub_field('link'); ?>
                                    <a href="<?php echo $columns_under_hero['url']; ?>" target="<?php echo $columns_under_hero['target']; ?>"
                                    class="btn btn--link">
                                    <?php echo $columns_under_hero['title']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( !empty( get_sub_field('icon') ) ): ?>
                        <div class="columns-under-hero__col__icon-wrapper">
                            <figure class="columns-under-hero__col__icon">
                            <?php
                            $image_size = 'full';
                            $image_id = get_sub_field('icon'); // (return image ID)
                            $image = wp_get_attachment_image( $image_id, $image_size );
                            echo $image;
                            ?>
                            </figure>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

<?php endif; ?>