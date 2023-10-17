<section class="hero">
    <div class="hero__wrapper">
        <div class="hero__background__wrapper">
            <?php if( !empty( get_sub_field('hero_background') ) ): ?>
                <figure class="hero__background">
                <?php
                $image_size = 'full'; // przykładowo
                $image_id = get_sub_field('hero_background'); // (return image ID)
                $image = wp_get_attachment_image( $image_id, $image_size );
                echo $image;
                ?>
                </figure>
            <?php endif; ?>
        </div>
        <?php if( !empty( get_sub_field('hero_title') ) && !empty( get_sub_field('hero_dsc') ) ): ?>
            <div class="hero__content page--width">
                <?php if( !empty( get_sub_field('hero_title') ) ): ?>
                    <h1><?php the_sub_field('hero_title'); ?></h1>
                <?php endif; ?>
                <?php if( !empty( get_sub_field('hero_dsc') ) ): ?>
                    <div class="rte"><?php the_sub_field('hero_dsc'); ?></div>
                <?php endif; ?>
                <?php $hero_btn = get_sub_field('hero_button'); ?>
                <a href="<?php echo $hero_btn['url']; ?>" target="<?php echo $hero_btn['target']; ?>" class="btn btn-primary"><?php echo $hero_btn['title']; ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>