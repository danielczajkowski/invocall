<?php 
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();
    $blured_content = array();
    $content_top = '';
    $rows_with_images = array();
    $content_bottom = '';

    if($group) {
        $blured_content = $group['blured_content'] ?: array();
        $content_top = $group['content-top'] ?: '';
        $rows_with_images = $group['rows_with_images'] ?: array();
        $content_bottom = $group['content-bottom'] ?: '';
    }

?>

<?php if( $group ): ?>
<section class="easy_schema">
    <?php load_element_styles( 'sections/easy-schema', 'easy-schema-style' ); ?>
    <div class="page--width">
        <div class="easy_schema__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="easy_schema__left-col__wrapper offer__col offer__col--left">
                    <div class="easy_schema__left-col offer__col--header">
                        <h3 class="easy_schema__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( $group ): ?>
                <div class="offer__col offer__col--right">

                <?php if( $blured_content ): ?>
                    <div class="easy_schema__blured-content">
                    <?php foreach( $blured_content as $key => $blured_text ): ?>
                        <?php if( $key != 0 ): ?>
                            <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 24.5L42 24.5" stroke="#2329D6" stroke-linecap="round"/>
                                <path d="M30 36.5L42 24.5L30 12.5" stroke="#2329D6" stroke-linecap="round"/>
                            </svg>
                        <?php endif; ?>
                        <div class="easy_schema__blured-content__item<?php echo $key === 0 ? ' easy_schema__blured-content__item--first' : '';  ?>">
                            <?php echo $blured_text['text']; ?>
                        </div>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if( $content_top ): ?>
                    <div class="easy_schema__content_top content_top">
                        <?php echo $content_top; ?>
                    </div>
                <?php endif; ?>

                <?php if( $rows_with_images ): ?>
                    <div class="easy_schema__rows">
                    <?php foreach( $rows_with_images as $key => $row ): ?>
                        <div class="easy_schema__row<?php echo $row['image_location'] === 'right' ? ' easy_schema__row--right' : '';  ?>">

                            <?php if( $row['image'] ):
                                $image = wp_get_attachment_image( $row['image'], 'easy-schema' );
                            ?>
                            <div class="easy_schema__rows__image">
                                <?php echo $image; ?>
                            </div>
                            <?php endif; ?>

                            <?php if( $row['header'] || $row['content'] ): ?>
                            <div class="easy_schema__rows__text">
                                <?php if( $row['header'] ): ?>
                                <h4 class="easy_schema__rows__text__header"><?php echo $row['header']; ?></h4>
                                <?php endif; ?>
                                <?php if( $row['content'] ): ?>
                                <div class="easy_schema__rows__text__content"><?php echo $row['content']; ?></div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>

                        </div>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if( $content_bottom ): ?>
                    <div class="easy_schema__content_bottom content_bottom">
                        <?php echo $content_bottom; ?>
                    </div>
                <?php endif; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>