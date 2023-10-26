<?php
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();

    $content_top = '';
    $tiles = array();

    if($group) {
        $content_top = $group['content-top'] ?: '';
        $tiles = $group['tiles'] ?: array();
    }

?>

<?php if( $group ): ?>
<section class="why-we">
    <?php load_element_styles( 'sections/why-we', 'why-we-style' ); ?>
    <div class="page--width">
        <div class="why-we__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="why-we__left-col__wrapper offer__col offer__col--left">
                    <div class="why-we__left-col offer__col--header">
                        <h3 class="why-we__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( $group ): ?>
                <div class="offer__col offer__col--right">
                <?php if( $content_top ): ?>
                    <div class="why-we__content_top content_top">
                        <?php echo $content_top; ?>
                    </div>
                <?php endif; ?>
                <?php if( $tiles ): ?>
                    <div class="why-we__tiles">
                    <?php foreach( $tiles as $tile ):
                        $header = $tile['header'] ?: '';
                        $content = $tile['content'] ?: '';
                    ?>
                        <?php if( $header || $content ): ?>
                        <div class="why-we__tile">
                            <?php if( $header ): ?>
                                <h4 class="why-we__tile__header"><?php echo $header; ?></h4>
                            <?php endif; ?>
                            <?php if( $content ): ?>
                                <div class="why-we__tile__content"><?php echo $content; ?></div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>