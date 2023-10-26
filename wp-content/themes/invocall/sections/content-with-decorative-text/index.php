<?php
    $top_content = get_sub_field('top_content') ?: '';
    $decorative_text = get_sub_field('decorative_text') ?: array();
?>

<?php if( $top_content || $decorative_text): ?>
<section class="content-with-decorative-text">
    <?php load_libs_script('content-with-decorative-text', 'content-with-decorative-text-scripts', [], 'sections/'); ?>
    <?php load_element_styles( 'sections/content-with-decorative-text/dist', 'content-with-decorative-text-style' ); ?>
    <div class="page--width">
    <?php if( $top_content ): ?>
        <div class="content-with-decorative-text__content">
            <?php echo $top_content; ?>
        </div>
    <?php endif; ?>
    </div>

    <?php if( $decorative_text ):
            $before = $decorative_text['before_highlighted_text'] ?: '';
            $highlighted = $decorative_text['highlighted_text'] ?: '';
            $after = $decorative_text['after_highlighted_text'] ?: '';
        ?>
        <div class="content-with-decorative-text__decorative-text">
           <?php if( $before ): ?>
                <span class="two_colors two_colors--before" data-content="<?php echo $before; ?>">
                    <?php echo $before; ?>
                </span>
            <?php endif; ?>
           <?php if( $highlighted ): ?>
                <span class="highlight">
                    <?php echo $highlighted; ?>
                </span>
            <?php endif; ?>
           <?php if( $after ): ?>
                <span class="two_colors two_colors--after" data-content="<?php echo $after; ?>">
                    <?php echo $after; ?>
                </span>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>