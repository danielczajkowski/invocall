<?php
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();

    $background = '';
    $content_top = '';
    $tiles = array();

    if($group) {
        $content_top = $group['content-top'] ?: '';
        $tiles = $group['tiles'] ?: array();
    }
?>

<?php if( $group ): ?>
<section class="carousel_with_logos">
    <?php load_libs_script('swiper', 'swiper'); ?>
    <?php load_libs_script('carousel-with-logos', 'carousel-with-logos-scripts', ['swiper'], 'sections/'); ?>
    <?php load_element_styles( 'assets/libraries/css/swiper', 'swiper-style' ); ?>
    <?php load_element_styles( 'sections/carousel-with-logos/dist', 'carousel-with-logos-style' ); ?>
    <div class="page--width">
        <div class="carousel_with_logos__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="carousel_with_logos__left-col__wrapper offer__col offer__col--left">
                    <div class="carousel_with_logos__left-col offer__col--header">
                        <h3 class="carousel_with_logos__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( $group ): ?>
                <div class="offer__col offer__col--right offer__col--right-small-margin">
                <?php if( $content_top ): ?>
                    <div class="carousel_with_logos__content_top content_top">
                        <?php echo $content_top; ?>
                    </div>
                <?php endif; ?>
                <?php if( $tiles ): ?>
                    <div class="carousel_with_logos__swiper swiper">
                        <div class="swiper-wrapper">
                        <?php foreach( $tiles as $tile ):
                                $header = $tile['header'] ?: '';
                                $logo = $tile['logo'] ? wp_get_attachment_image( $tile['logo'], 'full' ) : '';
                            if( $logo ): ?>
                            <div class="swiper-slide">
                                <div class="carousel_with_logos__tile">
                                <?php if( $header ): ?>
                                    <div class="carousel_with_logos__header">
                                        <?php echo $header; ?>
                                    </div>
                                <?php endif; ?>
                                <svg class="carousel_with_logos__arrow" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 6V42" stroke="#2329D6" stroke-linecap="round"/>
                                    <path d="M12 30L24 42L36 30" stroke="#2329D6" stroke-linecap="round"/>
                                </svg>
                                <?php if( $logo ): ?>
                                    <div class="carousel_with_logos__logo">
                                        <?php echo $logo; ?>
                                    </div>
                                <?php endif; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>