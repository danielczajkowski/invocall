<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/columns-numbers-texts/style.css" />

<?php $sectionSettings = get_sub_field('section_settings'); ?>

<section class="columns-numbers-texts">
    <?php if( !empty( $sectionSettings['background'] ) ): ?>
        <div class="columns-numbers-texts__background-wrapper">
            <figure class="columns-numbers-texts__background">
            <?php
            $image_size = 'full'; // przykładowo
            $image_id = $sectionSettings['background']; // (return image ID)
            $image = wp_get_attachment_image( $image_id, $image_size );
            echo $image;
            ?>
            </figure>
        </div>
    <?php endif; ?>
    <div class="page--width">
        <div class="columns-numbers-texts__wrapper">
            <?php if( $sectionSettings ): ?>
                <div class="columns-numbers-texts__left-col__wrapper">
                    <div class="columns-numbers-texts__left-col">
                        <?php if( !empty( $sectionSettings['title'] ) ): ?>
                            <h3 class="columns-numbers-texts__section-title section-title"><?php echo $sectionSettings['title']; ?></h3>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            if( have_rows('repeater') ):
                $n = 0; ?>
                <div class="columns-numbers-texts__right-col">
                    <?php while( have_rows('repeater') ): the_row(); ?>
                        <?php $n++; ?>
                        <div class="columns-numbers-texts__column">
                            <div class="columns-number-text__column-wrapper">
                                <span class="columns-numbers-texts__column-number">0<?php echo $n; ?></span>
                                <?php if( !empty( get_sub_field('heading') ) ): ?>
                                    <h5 class="columns-numbers-texts__heading"><?php the_sub_field('heading'); ?></h5>
                                <?php endif; ?>
                                <?php if( !empty( get_sub_field('text') ) ): ?>
                                    <div class="columns-numbers-texts__content">
                                        <p><?php the_sub_field('text'); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>