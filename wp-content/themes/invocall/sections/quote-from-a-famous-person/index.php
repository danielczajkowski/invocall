<?php
    $image = get_sub_field('image') ?  wp_get_attachment_image( get_sub_field('image'), 'full', false, array('class' => 'quote-famous__background quote-famous__background--img') ) : '';
    $name = get_sub_field('name') ?: '';
    $quote = get_sub_field('quote') ?: '';
?>

<?php if( $quote ): ?>
<section class="quote-famous">
    <?php load_element_styles( 'sections/quote-from-a-famous-person/dist', 'quote-from-a-famous-person-style' ); ?>
    <?php if( $image ) {
    echo $image;
} ?>
    <span class="quote-famous__background quote-famous__background--gradient"></span>
    <div class="page--width">
        <div class="quote-famous__content">
            <?php if( $quote ): ?>
                <blockquote class="quote-famous__quote">
                    <?php echo $quote; ?>
                </blockquote>
            <?php endif; ?>
            <?php if( $name ): ?>
                <div class="quote-famous__name">
                    ~ <?php echo $name; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>