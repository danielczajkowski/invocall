<?php
    $section_title = get_sub_field('section_title') ?: '';
    $group = get_sub_field('group') ?: array();
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
                    <div class="two_column_per_row__tiles">
                        <?php foreach($group as $tile): 
                            $header = $tile['header'] ?: '';
                            $content = $tile['content'] ?: '';
                            $link = $tile['link'] ?: array();
                        ?>
                            <div class="two_column_per_row__tile">
                                <?php if( $header ): ?>
                                    <div class="two_column_per_row__header">
                                        <?php echo $header; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( $content ): ?>
                                    <div class="two_column_per_row__content">
                                        <?php echo $content; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( $link ): ?>
                                    <div class="two_column_per_row__link">
                                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? '_blank' : '_self' ?>">
                                            <?php echo $link['title']; ?>
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.9165 14.25L12.6665 9.5L7.9165 4.75" stroke="#2877FF" stroke-linecap="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>