<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/hero-subpage/style.css" />

<section class="hero-subpage">
    <div class="hero-subpage__background-wrapper">
        <?php if( get_field('hero_subpage__background') ): ?>
            <figure class="hero-subpage__background">
                <?php
                $image_size = 'full'; // przykładowo
                $image_id = get_field('hero_subpage__background'); // (return image ID)
                $image = wp_get_attachment_image( $image_id, $image_size );
                echo $image;
                ?>
            </figure>
        <?php endif; ?>
    </div>
    <?php if( !empty('hero_subpage_heading') && !empty('hero_subpage_text') ): ?>
        <div class="hero-subpage__content page--width">
            <div class="hero-subpage__texts">
                <?php if( !empty('hero_subpage_heading') ): ?>
                    <h1 class="hero-subpage__heading"><?php the_field('hero_subpage_heading'); ?></h1>
                <?php endif; ?>
                <?php if( !empty('hero_subpage_text') ): ?>
                    <p class="hero-subpage__text"><?php the_field('hero_subpage_text'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</section>