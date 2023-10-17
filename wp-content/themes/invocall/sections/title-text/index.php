<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/title-text/style.css" />

<section class="title-text">
    <div class="page--width">
        <div class="title-text__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="title-text__left-col__wrapper">
                    <div class="title-text__left-col">
                        <h3 class="title-text__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( !empty( get_sub_field('text') ) ): ?>
                <div class="title-text__right-col">
                    <p class="title-text__content"><?php the_sub_field('text'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>