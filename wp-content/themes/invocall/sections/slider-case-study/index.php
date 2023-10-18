<section class="slider-case-study">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.css" />
    <?php load_element_styles( 'sections/slider-case-study', 'slider-case-study-style' ); ?>
    <div class="page--width">
        <div class="slider-case-study__wrapper">
            <div class="slider-case-study__left-col">
                <div class="slider-case-study__title">
                    <h3 class="section-title">Case study</h3>
                </div>
            </div>
            <div class="slider-case-study__right-col">
				<?php if (pll_current_language() == 'pl') : ?>
					<?php
					$args  = array(
					'posts_per_page' => -1,
					'post_type'=> 'knowledge-base',
					'lang' => 'pl',
					'tax_query' => array(
						array(
							'taxonomy' => 'knowledge-base-category',
							'field' => 'slug',
							'terms' => 'Case study'
						),
					)
					); ?>
				<?php else : ?>
					<?php
					$args  = array(
					'posts_per_page' => -1,
					'post_type'=> 'knowledge-base',
					'lang' => 'en',
					'tax_query' => array(
						array(
							'taxonomy' => 'knowledge-base-category',
							'field' => 'slug',
							'terms' => 'Case study'
						),
					)
					); ?>
				<?php endif; ?>
                <?php $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ): ?>
                    <div class="swiper case-study__swiper">
                        <div class="swiper-wrapper">
                            <?php while ( $the_query->have_posts() ): ?>
                                <?php $the_query->the_post(); ?>
                                <div class="swiper-slide">
                                    <h4 class="case-study__swiper-slide__heading"><?php the_title(); ?></h4>
                                    <div class="case-study__swiper-slide__content">
                                        <?php if( !empty( get_the_post_thumbnail() ) ): ?>
                                            <figure class="case-study__swiper-slide__thumbnail">
                                                <?php the_post_thumbnail('case-study-slider-thumb'); ?>
                                            </figure>
                                        <?php endif; ?>
                                        <?php if( !empty( get_field('knowledge_base_featured') ) ): ?>
                                            <div class="rte"><?php the_field('knowledge_base_featured'); ?></div>
                                        <?php endif; ?>
                                        <div class="case-study__swiper__btn-wrapper">
                                            <a href="<?php the_permalink(); ?>" class="btn btn--link">
												<?php if (pll_current_language() == 'pl') : ?>
													Zobacz Case Study
												<?php else : ?>
													View Case Studies
												<?php endif; ?>
											</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="case-study__swiper-navigation">
                        <div class="swiper-custom-button-prev">
                            <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.41663 25.75L13.6666 13.5L1.41663 1.25" stroke="#2329D6" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="swiper-custom-button-next">
                            <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.41663 25.75L13.6666 13.5L1.41663 1.25" stroke="#2329D6" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.js" defer="defer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/sections/slider-case-study/index.js" defer="defer"></script>