<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/texts-button/style.css" />

<section class="texts-button">
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
                        <div class="rte"><?php echo $group['texts']; ?></div>
                    <?php endif; ?>
                    <?php if( !empty( $group['button'] ) ): ?>
                        <a href="<?php echo $group['button']['url']; ?>" target="<?php echo $group['button']['target']; ?>" class="text-button__btn btn btn-primary"><?php echo $group['button']['title']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>