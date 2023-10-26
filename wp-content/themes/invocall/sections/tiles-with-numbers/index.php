<?php
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();

    $background = '';
    $content_top = '';
    $tiles = array();

    if($group) {
        $background = $group['background'] ?: '';
        $content_top = $group['content-top'] ?: '';
        $tiles = $group['tiles'] ?: array();
    }

?>

<?php if( $group ): ?>
<section class="tiles-with-numbers">
    <?php load_element_styles( 'sections/tiles-with-numbers', 'tiles-with-numbers-style' ); ?>
<?php if( $background ) {
    $image = wp_get_attachment_image( $background, 'full', false, array('class' => 'tiles-with-numbers__background tiles-with-numbers__background--img') ); 
    echo $image;
} ?>
    <span class="tiles-with-numbers__background tiles-with-numbers__background--gradient"></span>
    <div class="page--width">
        <div class="tiles-with-numbers__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="tiles-with-numbers__left-col__wrapper offer__col offer__col--left">
                    <div class="tiles-with-numbers__left-col offer__col--header">
                        <h3 class="tiles-with-numbers__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( $group ): ?>
                <div class="offer__col offer__col--right">
                <?php if( $content_top ): ?>
                    <div class="tiles-with-numbers__content_top content_top">
                        <?php echo $content_top; ?>
                    </div>
                <?php endif; ?>
                <?php if( $tiles ): ?>
                    <div class="tiles-with-numbers__tiles">
                        <?php foreach($tiles as $tile): 
                            $number = $tile['number'] ?: '';
                            $header = $tile['header'] ?: '';
                            $content = $tile['content'] ?: '';
                        ?>
                            <div class="tiles-with-numbers__tile">
                                <?php if( $number ): ?>
                                    <div class="tiles-with-numbers__number">
                                        <?php echo $number; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( $header ): ?>
                                    <div class="tiles-with-numbers__header">
                                        <?php echo $header; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( $content ): ?>
                                    <div class="tiles-with-numbers__content">
                                        <?php echo $content; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>