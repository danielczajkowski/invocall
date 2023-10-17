<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/cpt-job-offers/style.css" />

<section id="careerOffers" class="cpt-job-offers">
    <div class="page--width">
        <div class="cpt-job-offers__wrapper">
            <div class="cpt-job-offers__left-col__wrapper">
                <div class="cpt-job-offers__left-col">
                    <h3 class="cpt-job-offers__section-title section-title">
						<?php if (pll_current_language() == 'pl') : ?>
							Oferty pracy
						<?php else : ?>
							Job offers
						<?php endif; ?>
					</h3>
                </div>
            </div>
            <div class="cpt-job-offers__right-col__wrapper">
                <?php
                $args  = array(
                'posts_per_page' => -1,
                'post_type'=> 'oferty_pracy',
                ); ?>
                <?php $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ): ?>
                    <div class="cpt-job-offers__right-col__wrapper">
                        <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                            <div class="cpt-job-offers__offer-block">
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="cpt-job-offers__offer-heading"><?php the_title(); ?></h4>
                                </a>
                                <div class="cpt-job-offers__offer__link-wrapper">
                                    <a href="<?php the_permalink(); ?>" class="cpt-job-offers__offer--link btn btn--link">
										<?php if (pll_current_language() == 'pl') : ?>
											Zobacz szczegóły
										<?php else : ?>
											See details
										<?php endif; ?>
									</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
