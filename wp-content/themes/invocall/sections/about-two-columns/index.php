<section class="two-columns">
    <?php load_element_styles( 'sections/about-two-columns', 'about-two-columns-style' ); ?>
    <div class="page--width">
        <div class="two-columns__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="two-columns__left-col__wrapper">
                    <div class="two-columns__left-col">
                        <h3 class="section-title two-columns__section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php $repeater = get_sub_field('repeater');
            if( $repeater ): ?>
                <div class="two-columns__right-col">
                    <?php foreach( $repeater as $item ): ?>
                        <?php $image = $item['image']; ?>
                        <div class="two-columns__block">
                            <?php if( !empty( $image ) ): ?>
                                <figure class="two-columns__image">
                                <?php
                                $image_size = 'full'; // przykładowo
                                $image_id = $image; // (return image ID)
                                $image = wp_get_attachment_image( $image_id, $image_size );
                                echo $image;
                                ?>
                                </figure>
                            <?php endif; ?>
                            <div class="two-columns__content">
                                <?php if( !empty( $item['heading'] ) ): ?>
                                    <h3 class="two-columns__heading"><?php echo $item['heading']; ?></h3>
                                <?php endif; ?>
                                <?php if( !empty( $item['strong_text'] ) ): ?>
                                    <p class="two-columns__strong-text"><strong><?php echo $item['strong_text']; ?></strong></p>
                                <?php endif; ?>
                                <?php if( !empty( $item['text'] ) ): ?>
                                    <p class="two-columns__text"><?php echo $item['text']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>