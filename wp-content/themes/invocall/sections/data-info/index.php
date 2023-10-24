<?php
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();

?>

<?php if( $group ): ?>
<section class="data_info">
    <?php load_element_styles( 'sections/data-info/dist', 'data-info-style' ); ?>
    <div class="page--width">
        <div class="data_info__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="data_info__left-col__wrapper offer__col offer__col--left">
                    <div class="data_info__left-col offer__col--header">
                        <h3 class="data_info__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( $group ): ?>
                <div class="offer__col offer__col--right">
                    <div class="data_info__items">
                    <?php foreach( $group as $item ):
                        $width = $item['width'] ?: '';
                        $label = $item['label'] ?: '';
                    ?>
                        <span class="data_info__item data_info__item--<?php echo $width;  ?>">
                            <?php echo $label; ?>
                        </span>
                    <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>