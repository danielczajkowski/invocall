<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/about-columns-numbers/style.css" />

<div class="about-columns-numbers">
    <div class="page--width">
        <div class="about-columns-numbers__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="about-columns-numbers__left-col__wrapper">
                    <div class="about-columns-numbers__left-col">
                        <h3 class="section-title about-columns-numbers__title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php $group = get_sub_field('right_column');
            if( $group ): ?>
                <div class="about-columns-numbers__right-col">
                    <?php if( !empty( $group['text'] ) ): ?>
                        <div class="about-columns-numbers__right-col__header">
                            <div class="rte"><?php echo $group['text']; ?></div>
                        </div>
                    <?php endif; ?>
                    <?php $repeater = $group['repeater'];
                    $n = 0;
                    if( $repeater ): ?>
                        <div class="about-columns-numbers__blocks-wrapper">
                            <?php foreach( $repeater as $item ): ?>
                                <?php $n++; ?>
                                <div class="about-columns-numbers__block">
                                    <span class="about-columns-numbers-number">0<?php echo $n; ?></span>
                                    <?php if( !empty( $item['text'] ) ): ?>
                                        <div class="rte"><?php echo $item['text']; ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>