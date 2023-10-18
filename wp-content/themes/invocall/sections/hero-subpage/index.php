<?php
    $hero_subpage_additional_content_toggler = get_field('hero_subpage_additional_content_toggler') ?: false;
?>

<section class="hero-subpage<?php echo $hero_subpage_additional_content_toggler ? ' hero-subpage--additional-content' : ''; ?>">
    <?php load_section_styles( 'sections/hero-subpage', 'hero-subpage-style' ); ?>
    <div class="hero-subpage__background-wrapper">
        <?php if( get_field('hero_subpage__background') ): ?>
            <figure class="hero-subpage__background">
                <?php
                $image_size = 'full';
                $image_id = get_field('hero_subpage__background');
                $image = wp_get_attachment_image( $image_id, $image_size );
                echo $image;
                ?>
            </figure>
        <?php endif; ?>
    </div>
<?php if( !empty('hero_subpage_heading') && !empty('hero_subpage_text') ): ?>
    <div class="hero-subpage__content page--width">
        <div class="hero-subpage__texts">
            <?php if( !empty('hero_subpage_heading') ): ?>
                <h1 class="hero-subpage__heading"><?php the_field('hero_subpage_heading'); ?></h1>
            <?php endif; ?>
            <?php if( !empty('hero_subpage_text') ): ?>
                <p class="hero-subpage__text"><?php the_field('hero_subpage_text'); ?></p>
            <?php endif; ?>
        </div>

        <?php if( $hero_subpage_additional_content_toggler ): ?>
            <?php
                $hero_subpage_aditional_content = get_field('hero_subpage_aditional_content') ?: array();

                if( $hero_subpage_aditional_content ):
            ?>
                <div class="hero-subpage__texts hero-subpage__texts--bottom">
                    <div class="hero-subpage__texts--bottom__header">
                    <?php if( $hero_subpage_aditional_content['heading'] ): ?>
                        <h2 class="hero-subpage__texts--bottom__heading"><?php echo $hero_subpage_aditional_content['heading']; ?></h2>
                    <?php endif; ?>
                    <?php if( $hero_subpage_aditional_content['content'] ): ?>
                        <div class="hero-subpage__texts--bottom__content">
                            <?php echo $hero_subpage_aditional_content['content']; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( $hero_subpage_aditional_content['button_1'] || $hero_subpage_aditional_content['button_2']): ?>
                        <div class="hero-subpage__texts--bottom__buttons">
                            <?php if( $hero_subpage_aditional_content['button_1'] ): ?>
                                <a href="<?php echo $hero_subpage_aditional_content['button_1']['url']; ?>" class="hero-subpage__texts--bottom__button btn btn-primary"><?php echo $hero_subpage_aditional_content['button_1']['title']; ?></a>
                            <?php endif; ?>
                            <?php if( $hero_subpage_aditional_content['button_2'] ): ?>
                                <button class="hero-subpage__texts--bottom__button btn btn-secondary next-section-scroll__btn">
                                    <?php echo __('Przeglądam dalej'); ?>
                                </button>
                                <svg width="16" height="48" viewBox="0 0 16 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="1" width="15" height="24" rx="7.5" stroke="#B9BBD1"/>
                                    <rect x="7" y="5.5" width="2" height="5" rx="1" fill="#B9BBD1"/>
                                    <path d="M2 26.5L8 32.5L14 26.5" stroke="#B9BBD1" stroke-linecap="round"/>
                                    <path opacity="0.6" d="M2 33.5L8 39.5L14 33.5" stroke="#B9BBD1" stroke-linecap="round"/>
                                    <path opacity="0.3" d="M2 40.5L8 46.5L14 40.5" stroke="#B9BBD1" stroke-linecap="round"/>
                                </svg>


                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
</section>