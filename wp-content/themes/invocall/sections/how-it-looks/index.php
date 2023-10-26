<?php
    $section_title = get_sub_field('section_title') ?: '';
    $content = get_sub_field('content') ?: '';
    $tiles = get_sub_field('tiles') ?: '';
?>

<?php if( $tiles ): ?>
<section class="how-it-looks">
    <?php load_element_styles( 'sections/how-it-looks', 'how-it-looks-style' ); ?>
    <div class="page--width">
        <div class="how-it-looks__header">
        <?php if( $section_title ): ?>
            <h3 class="how-it-looks__title"><?php echo $section_title; ?></h3>
        <?php endif; ?>
        <?php if( $content ): ?>
            <div class="how-it-looks__content">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
        </div>
        <div class="how-it-looks__tiles">
        <?php foreach( $tiles as $tile ):

            $number = $tile['number'] ?: '';
            $image = $tile['image'] ? wp_get_attachment_image( $tile['image'], 'full' ) : '';
            $icon = $tile['icon'] ? wp_get_attachment_image( $tile['icon'], 'full' ) : '';
            $header = $tile['header'] ?: '';
            $content = $tile['content'] ?: '';

            ?>
            <div class="how-it-looks__tile">

                <div class="how-it-looks__tile__left">
                <?php if( $number ): ?>
                    <div class="how-it-looks__tile__title section-title">
                        <?php echo $number; ?>
                    </div>
                <?php endif; ?>
                </div>

                <div class="how-it-looks__tile__right">
                    <?php if( $image ): ?>
                    <div class="how-it-looks__tile__image--wrapper">
                        <?php echo $image; ?>

                        <?php if( $icon ): ?>
                        <div class="how-it-looks__tile__image--icon">
                            <?php echo $icon; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php if( $header || $content ): ?>
                        <div class="how-it-looks__tile__content">
                            <?php if( $header ): ?>
                                <div class="how-it-looks__tile__content__header">
                                    <?php echo $header; ?>
                                </div>
                            <?php endif; ?>
                            <?php if( $content ): ?>
                                <div class="how-it-looks__tile__content__content">
                                    <?php echo $content; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>