<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/our-team-slider/style.css" />

<section class="our-team">
    <?php $group = get_sub_field('group');
    if( $group ): ?>
        <div class="page--width">
            <div class="our-team__header">
                <?php if( !empty( $group['section_title'] ) ): ?>
                    <div class="our-team__left-col__wrapper">
                        <div class="our-team__left-col">
                            <h3 class="section-title our-team__header-heading"><?php echo $group['section_title']; ?></h3>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if( !empty( $group['text'] ) ): ?>
                    <div class="our-team__right-col">
                        <p class="our-team__header-text"><?php echo $group['text']; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php $slider = get_sub_field('slider');
    if( $slider ): ?>
        <div class="page--width our-team-swiper__page--width">
            <div class="our-team-swiper__wrapper">
                <div class="swiper our-team-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach( $slider as $item ): ?>
                            <div class="swiper-slide our-team-swiper-slide">
                                <?php $image = $item['image'];
                                if( !empty( $image ) ): ?>
                                    <div class="our-team-swiper__image-wrapper">
                                        <figure class="our-team-swiper__image">
                                        <?php
                                        $image_size = 'full'; // przykładowo
                                        $image_id = $image; // (return image ID)
                                        $image = wp_get_attachment_image( $image_id, $image_size );
                                        echo $image;
                                        ?>
                                        </figure>
                                    </div>
                                <?php endif; ?>
                                <div class="our-team-swiper__content">
                                    <?php if( !empty( $item['full_name'] ) ): ?>
                                        <h5 class="our-team-swiper__full-name"><?php echo $item['full_name']; ?></h5>
                                    <?php endif; ?>
                                    <?php if( !empty( $item['position'] ) ): ?>
                                        <span class="our-team-swiper__position"><?php echo $item['position']; ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="our-team__swiper-navigation">
                    <div class="swiper-custom-button-prev">
                        <svg width="29" height="29" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41663 25.75L13.6666 13.5L1.41663 1.25" stroke="#2329D6" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="swiper-custom-button-next">
                        <svg width="29" height="29" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.41663 25.75L13.6666 13.5L1.41663 1.25" stroke="#2329D6" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.js" defer="defer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/sections/our-team-slider/index.js" defer="defer"></script>