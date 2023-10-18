<section class="why_we">
    <?php load_element_styles( 'sections/why-we/dist', 'why-we-style' ); ?>
    <div class="page--width">
        <div class="why_we__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="why_we__left-col__wrapper">
                    <div class="why_we__left-col">
                        <h3 class="why_we__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            $group = get_sub_field('group');
            if( $group ): ?>
                <h1>why_we</h1>
            <?php endif; ?>
        </div>
    </div>
</section>