<?php 
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();


    if($group) {
    }

?>

<?php if( $group ): ?>
<section class="tiles_with_numbers">
    <?php load_element_styles( 'sections/tiles-with-numbers/dist', 'tiles-with-numbers-style' ); ?>
    <div class="page--width">
        <div class="tiles_with_numbers__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="tiles_with_numbers__left-col__wrapper offer__col offer__col--left">
                    <div class="tiles_with_numbers__left-col offer__col--header">
                        <h3 class="tiles_with_numbers__section-title section-title"><?php echo $section_title; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php if( $group ): ?>
                <div class="offer__col offer__col--right">

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>