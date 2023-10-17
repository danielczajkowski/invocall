<section id="homeOffers" class="home-offers">
    <div class="page--width">
        <div class="home-offers__wrapper">
            <div class="home-offers__text-block__wrapper">
                <div class="home-offers__text-block">
					<?php
                    $section_title = get_sub_field('section_title');
                    if( !empty($section_title) ): ?>
                        <h4 class="home-offers__title section-title"><?php echo $section_title; ?></h4>
                    <?php endif; ?>
                    <?php
                    $section_text = get_sub_field('section_text');
                    if( !empty($section_text) ): ?>
                        <div class="rte"><?php echo $section_text; ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="home-offers-wrapper">
                <?php
                $chose_main_offer = get_sub_field('chose_main_offers');
                if( $chose_main_offer ): ?>
                    <?php $main_offer_terms = get_the_terms( $chose_main_offer->ID, 'offers-tag' ); ?>
                    <div class="home-offers__main-offer__block home-offers__offer__block">
                        <figure class="home-offers__main-offer__thumb">
                            <img src="<?php echo get_the_post_thumbnail_url($chose_main_offer->ID, 'full'); ?>" alt="<?php echo $chose_main_offer->post_title; ?>" />
                        </figure>
                        <?php foreach ( $main_offer_terms as $main_offer_term ): ?>
                            <div class="home-offers__offer-tag tag-block">
                                <?php echo $main_offer_term->name; ?>
                            </div>
                        <?php endforeach; ?>
                        <h5 class="home-offers__offer--title"><?php echo $chose_main_offer->post_title; ?></h5>
                        <a href="<?php the_permalink( $chose_main_offer->ID ); ?>" class="home-offers__offer__block__link"></a>
                    </div>
                <?php endif; ?>
                <?php
                $chose_offers = get_sub_field('chose_offers');
                if( $chose_offers ): ?>
                    <?php foreach( $chose_offers as $offer ): ?>
                        <?php $terms = get_the_terms( $offer->ID, 'offers-tag' ); ?>
                        <div class="home-offers__offer__block">
                            <?php foreach ( $terms as $term ): ?>
                                <div class="home-offers__offer-tag tag-block">
                                    <?php echo $term->name; ?>
                                </div>
                            <?php endforeach; ?>
                            <h5 class="home-offers__offer--title"><?php echo $offer->post_title; ?></h5>
                            <div class="home-offers__offer--excerpt">
                                <p><?php echo $offer->post_excerpt; ?></p>
                            </div>
                            <a href="<?php the_permalink( $offer->ID ); ?>" class="home-offers__offer__block__link"></a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>