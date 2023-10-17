<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/image_text_button/style.css" />

<section class="image-text-button">
    <div class="page--width">
        <div class="image-text-button__wrapper">
            <?php if( !empty( get_sub_field('heading') ) ): ?>
                <div class="image-text-button__left-col__wrapper">
                    <div class="image-text-button__left-col">
                        <h3 class="image-text-button__section-title section-title"><?php the_sub_field('heading'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            $group = get_sub_field('group');
            if( $group ): ?>
                <div class="image-text-button__right-col">
                    <?php if( !empty( $group['image'] ) ): ?>
                        <figure class="image-text-button__image">
                        <?php
                        $image_size = 'full'; // przykładowo
                        $image_id = $group['image']; // (return image ID)
                        $image = wp_get_attachment_image( $image_id, $image_size );
                        echo $image;
                        ?>
                        </figure>
                    <?php endif; ?>
                    <?php if( !empty( $group['text'] ) && !empty( $group['button'] ) ): ?>
                        <div class="image-text-button__content">
                            <?php if( !empty( $group['text'] ) ): ?>
                                <div class="rte"><?php echo $group['text']; ?></div>
                            <?php endif; ?>
                            <?php if( !empty( $group['button'] ) ): ?>
                                <a href="<?php echo $group['button']['url']; ?>" class="image-text-button__btn btn btn-primary" target="<?php echo $group['button']['target']; ?>"><?php echo $group['button']['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>