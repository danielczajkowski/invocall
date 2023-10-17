<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/date-slider/style.css" />

<?php if( have_rows( 'repeater' ) ): ?>

<section class="date-slider">
    <div class="date-slider__wrapper">
        <div class="swiper date-slider__swiper">
            <div class="date-slider__swiper-navigation hidden-flex-tablet-mobile">
                <div class="swiper-custom-button-prev">
                    <svg width="35" height="35" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.41663 25.75L13.6666 13.5L1.41663 1.25" stroke="#2329D6" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="swiper-custom-button-next">
                    <svg width="35" height="35" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.41663 25.75L13.6666 13.5L1.41663 1.25" stroke="#2329D6" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            <div class="swiper-wrapper">
                <?php while( have_rows( 'repeater' ) ): the_row(); ?>
                    <div class="swiper-slide">
                        <?php $date = get_sub_field('date');
                        if( !empty( $date['day'] ) && !empty( $date['year'] ) ): ?>
                            <div class="date-slider__header">
                                <?php if( !empty( $date['day'] ) ): ?>
                                    <span class="date-slider__day"><?php echo $date['day']; ?>/</span>
                                <?php endif; ?>
                                <?php if( !empty( $date['year'] ) ): ?>
                                    <span class="date-slider__year"><?php echo $date['year']; ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if( !empty( get_sub_field('text') ) ): ?>
                            <div class="date-slider__text-wrapper">
                                <span class="date-slider__text"><?php the_sub_field('text'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.js" defer="defer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/sections/date-slider/index.js" defer="defer"></script>
