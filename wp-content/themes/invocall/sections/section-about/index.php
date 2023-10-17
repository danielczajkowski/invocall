<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/section-about/style.css" />

<section id="homeAbout-us" class="about-us">
    <div class="about-us__wrapper page--width">
        <div class="about-us__left-col__wrapper">
            <div class="about-us__left-col">
				<?php if( !empty( get_sub_field('section_title') ) ): ?>
                    <h3 class="about-us__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                <?php endif; ?>
            </div>
        </div>
        <div class="about-is__righ-col">
            <div class="about-us__header">
                <?php if( !empty( get_sub_field('description') ) ): ?>
                    <div class="about-us__rte">
                        <h4><?php the_sub_field('description'); ?></h4>
                    </div>
                <?php endif; ?>
            </div>
            <?php if( have_rows('repeater') ): ?>
                <div class="about-us__blocks-text__wrapper">
                    <?php while( have_rows('repeater') ) : the_row(); ?>
                        <div class="about-us__blocks-text">
                            <?php if( have_rows('block_text') ): ?>
                                <?php while( have_rows('block_text') ) : the_row(); ?>
                                    <div class="about-us__block-text">
                                        <?php if( !empty( get_sub_field('heading') ) ): ?>
                                            <div class="about-us__block-number">
                                                <?php $blockPlus = get_sub_field('block_plus');
                                                if( $blockPlus === 'yes' ): ?><span>+</span><?php endif; ?>
                                            <span class="about-us__block-text__heading" data-stop='<?php the_sub_field('heading'); ?>' data-speed="20">0</span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if( !empty( get_sub_field('text') ) ): ?>
                                            <p class="about-us__block-text__text"><?php the_sub_field('text'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/sections/section-about/index.js" defer="defer"></script>
