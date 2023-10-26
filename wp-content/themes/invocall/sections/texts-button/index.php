<?php 
 $highlighted_button = get_sub_field('highlighted_button') ?: false;
?>
<section class="texts-button">
    <?php load_element_styles( 'sections/texts-button', 'texts-button-style' ); ?>
    <?php load_element_styles( 'sections/texts-button', 'texts-button-style-2' ); ?>
    <div class="page--width">
        <div class="texts-button__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="texts-button__left-col__wrapper">
                    <div class="text-button__left-col">
                        <h3 class="text-button__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php $group = get_sub_field('group');
            if( $group ): ?>
                <div class="texts-button__right-col">
                    <?php if( !empty( $group['texts'] ) ): ?>
                        <div class="rte<?php echo $highlighted_button ? ' rte--highlighted_button' : ''; ?>"><?php echo $group['texts']; ?></div>
                    <?php endif; ?>
                    <?php if( !empty( $group['button'] ) ):
                            $highlighted_button_text = '';
                            if(  $highlighted_button && key_exists('highlighted_button_text', $group)) {
                                $highlighted_button_text = $group['highlighted_button_text'] ?: false;
                            }
                        ?>
                        <a href="<?php echo $group['button']['url']; ?>" target="<?php echo $group['button']['target']; ?>" class="text-button__btn btn btn-primary <?php echo  $highlighted_button ? ' btn-primary--highlighted' : ''; ?>">
                            <?php echo $group['button']['title']; ?>
                            <?php if( $highlighted_button_text ): ?>
                                <span class="highlight"><?php echo $highlighted_button_text; ?></span>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>