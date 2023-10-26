<?php


    $tiles = get_sub_field('tiles') ?: array();

?>

<?php if( $tiles ): ?>
<section class="carousel">
    <?php load_libs_script('swiper', 'swiper'); ?>
    <?php load_libs_script('carousel', 'carousel-scripts', ['swiper'], 'sections/'); ?>
    <?php load_element_styles( 'assets/libraries/css/swiper', 'swiper-style' ); ?>
    <?php load_element_styles( 'sections/carousel', 'carousel-style' ); ?>
    <span class="carousel__bg--gradient"></span>
<?php if( $tiles ): ?>
    <div class="carousel__swiper swiper">
        <div class="swiper-wrapper">
        <?php foreach( $tiles as $tile ):
                $header = $tile['header'] ?: '';
                $content = $tile['content'] ?: '';
                $image = $tile['image'] ? wp_get_attachment_image( $tile['image'], 'carousel' ) : '';
                $bg_overlay = $tile['bg_overlay'];
            if( $content ): ?>
            <div class="swiper-slide">
                <?php if( $bg_overlay ): ?>
                <span class="carousel__bg--gradient"></span>
                <?php endif; ?>
                <div class="page--width">
                    <div class="carousel__content">
                    <?php if( $header ): ?>
                        <div class="carousel__header section-title">
                            <?php echo $header; ?>
                        </div>
                    <?php endif; ?>

                    <?php if( $content ): ?>
                        <div class="carousel__text">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>

                <?php if( $image ): ?>
                <div class="carousel__image">
                    <?php echo $image; ?>
                </div>
                <?php endif; ?>
                
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
        <div class="carousel__pagination"></div>
    </div>
<?php endif; ?>
</section>
<?php endif; ?>