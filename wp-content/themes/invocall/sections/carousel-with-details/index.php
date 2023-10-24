<?php
    global $scripts_arr;

    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();

    $background = '';
    $content_top = '';
    $tiles = array();

    if($group) {
        $content_top = $group['content-top'] ?: '';
        $tiles = $group['tiles'] ?: array();
        $button = $group['button'] ?: array();
    }
?>

<?php if( $group ): ?>
<section class="carousel_with_details">
    <?php load_libs_script('swiper', 'swiper'); ?>
    <?php load_libs_script('carousel-with-details', 'carousel-with-details-scripts', ['swiper'], 'sections/'); ?>
    <?php load_element_styles( 'assets/libraries/css/swiper', 'swiper-style' ); ?>
    <?php load_element_styles( 'sections/carousel-with-details/dist', 'carousel-with-details-style' ); ?>
    <div class="page--width">
        <div class="carousel_with_details__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="carousel_with_details__left-col__wrapper offer__col offer__col--left">
                    <div class="carousel_with_details__left-col offer__col--header">
                        <h3 class="carousel_with_details__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( $group ): ?>
                <div class="offer__col offer__col--right">
                <?php if( $content_top ): ?>
                    <div class="carousel_with_details__content_top content_top">
                        <?php echo $content_top; ?>
                    </div>
                <?php endif; ?>
                <?php if( $tiles ): ?>
                    <div class="carousel_with_details__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php foreach( $tiles as $tile ): 
                                    $header = $tile['header'] ?: '';
                                    $content = $tile['content'] ?: '';
                                ?>
                                <div class="swiper-slide">
                                    <div class="carousel_with_details__tile">
                                        <?php if( $header ): ?>
                                            <div class="carousel_with_details__header">
                                                <?php echo $header; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if( $content ): ?>
                                            <div class="carousel_with_details__content">
                                                <?php echo $content; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="carousel_with_details__bottom">
                    <?php if( $button ): ?>
                        <div class="carousel_with_details__button--wrapper">
                            <a href="<?php echo $button['url']; ?>" class="carousel_with_details__button btn btn-primary"><?php echo $button['title']; ?></a>
                        </div>
                    <?php endif; ?>

                    <div class="carousel_with_details__navigation">
                        <button class="carousel_with_details__navigation__button carousel_with_details__navigation__button--prev">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.583 12.25L16.333 24.5L28.583 36.75" stroke="#2329D6" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button class="carousel_with_details__navigation__button carousel_with_details__navigation__button--next">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.417 36.75L32.667 24.5L20.417 12.25" stroke="#2329D6" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>