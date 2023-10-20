<?php 
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();


    if($group) {
    }

?>

<?php if( $group ): ?>
<section class="two_column_per_row">
    <?php load_element_styles( 'sections/two-column-per-row/dist', 'two-column-per-row-style' ); ?>
    <div class="page--width">
        <div class="two_column_per_row__wrapper offer__wrapper">
            <?php if( $section_title ): ?>
                <div class="two_column_per_row__left-col__wrapper offer__col offer__col--left">
                    <div class="two_column_per_row__left-col offer__col--header">
                        <h3 class="two_column_per_row__section-title section-title"><?php echo $section_title; ?></h3>
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