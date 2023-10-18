<section class="easy_schema">
    <?php load_element_styles( 'sections/easy-schema/dist', 'easy-schema-style' ); ?>
    <div class="page--width">
        <div class="easy_schema__wrapper">
            <?php if( !empty( get_sub_field('section_title') ) ): ?>
                <div class="easy_schema__left-col__wrapper">
                    <div class="easy_schema__left-col">
                        <h3 class="easy_schema__section-title section-title"><?php the_sub_field('section_title'); ?></h3>
                    </div>
                </div>
            <?php endif; ?>
            <?php
            $group = get_sub_field('group');
            if( $group ): ?>
                <h1>easy_schema</h1>
            <?php endif; ?>
        </div>
    </div>
</section>