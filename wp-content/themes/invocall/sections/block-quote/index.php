<?php
    $section_title = get_sub_field('heading') ?: '';
    $group = get_sub_field('data') ?: array();

    $content_top = '';
    $tiles = array();
    $link = array();

    if($group) {
        $content_top = $group['top_content'] ?: '';
        $tiles = $group['repeater'] ?: array();
        $link = $group['link'] ?: array();
    }
?>

<section class="blocks-quote">
    <?php load_element_styles( 'sections/block-quote/dist', 'block-quote-style' ); ?>
    <div class="page--width">
        <div class="blocks-quote__wrapper offer__wrapper">
        <?php if( $section_title ): ?>
            <div class="blocks-quote__left-col__wrapper offer__col offer__col--left">
                <div class="blocks-quote__left-col offer__col--header">
                    <h3 class="blocks-quote__section-title section-title"><?php echo $section_title; ?></h3>
                </div>
            </div>
        <?php endif; ?>
        <?php if( $group ): ?>
        <div class="offer__col offer__col--right">
        <?php if( $content_top ): ?>
            <div class="blocks-quote__content_top content_top">
                <?php echo $content_top; ?>
            </div>
        <?php endif; ?>
        <?php if( $tiles ): ?>
            <div class="blocks-quote__tiles">
            <?php foreach( $tiles as $tile ):
                $header = $tile['heading'] ?: '';
                $content = $tile['text'] ?: '';
            ?>
                <?php if( $header || $content ): ?>
                <div class="blocks-quote__tile">
                    <?php if( $header ): ?>
                        <blockquote class="blocks-quote__tile__header"><?php echo $header; ?></blockquote>
                    <?php endif; ?>
                    <?php if( $content ): ?>
                        <div class="blocks-quote__tile__content"><?php echo $content; ?></div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if( $link ): ?>
            <div class="blocks-quote__button--wrapper">
                <a href="<?php echo $link['url']; ?>" class="blocks-quote__button btn btn-primary"><?php echo $link['title']; ?></a>
            </div>
        <?php endif; ?>
        </div>
        <?php endif; ?>
        </div>
    </div>
</section>