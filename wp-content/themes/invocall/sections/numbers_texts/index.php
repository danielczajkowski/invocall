<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/numbers_texts/style.css" />

<section class="numbers-texts">
    <div class="page--width">
        <div class="numbers-texts__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="numbers-texts__left-col__wrapper">
                    <div class="numbers-text__left-col">
                        <h3 class="numbers-text__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            $group = get_sub_field('group');
            if( $group ): ?>
                <div class="numbers-text__right-col">
                    <?php if( !empty( $group['heading'] ) ): ?>
                        <h2 class="numbers-text__heading"><?php echo $group['heading']; ?></h2>
                    <?php endif; ?>
                    <?php $repeater = $group['repeater'];
                    $n = 0;
                    foreach( $repeater as $item ): ?>
                        <?php $n++; ?>
                        <?php if( !empty( $item['text'] ) ): ?>
                            <div class="numbers-text__item-wrapper">
                                <span class="numbers-text__number">0<?php echo $n; ?></span>
                                <span class="numbers-text__text"><?php echo $item['text']; ?></span>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>