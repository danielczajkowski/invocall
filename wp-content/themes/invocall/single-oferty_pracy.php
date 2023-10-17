<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templates/sinlge-oferty_pracy/style.css" />

<section class="job-offer__hero"></section>

<section class="job-offer__banner--mobile">
    <div class="job-offer__banner--mobile__wrapper">
        <div class="job-offer__banner--mobile__background-wrapper">
            <?php $images = get_field('images');
            if( $images ): ?>
                <figure class="job-offer__banner--mobile__background">
                <?php
                $image_size = 'full'; // przykładowo
                $image_id = $images['mobile']; // (return image ID)
                $image = wp_get_attachment_image( $image_id, $image_size );
                echo $image;
                ?>
                </figure>
            <?php endif; ?>
        </div>
        <div class="page--width">
            <div class="job-offer__banner--mobile__content">
               <div class="job-offer__banner__header">
                    <div class="job-offer__banner__return-link__wrapper">
                        <a href="<?php echo site_url('/kariera#careerOffers'); ?>" class="btn btn--link btn--link-reverse">Zobacz pozostałe oferty</a>
                    </div>
                    <h3 class="job-offer__banner__heading"><?php the_title(); ?></h3>
                </div>
                <?php $jobInformation = get_field('information');
                if( $jobInformation ): ?>
                    <div class="job-offer__banner__content">
                        <?php if( !empty( $jobInformation['location'] ) ): ?>
                            <div class="job-offer__info job-offer__location">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C12 21 18 14.7 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 14.7 12 21 12 21Z" stroke="#011BDC"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10C12.5523 10 13 9.55228 13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9C11 9.55228 11.4477 10 12 10Z" stroke="#011BDC"/>
                                </svg>
                                <span class="job-offer__content__text">
                                    <?php echo $jobInformation['location']; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        <?php if( !empty( $jobInformation['salary'] ) ): ?>
                            <div class="job-offer__info job-offer__salary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4V6" stroke="#2329D6" stroke-linecap="round"/>
                                    <path d="M12 18V20" stroke="#2329D6" stroke-linecap="round"/>
                                <path d="M15.5 8C15.5 8 15 6 12 6C9 6 8.5 7.95652 8.5 9C8.5 13.1403 15.5 10.9649 15.5 15C15.5 16.0435 15 18 12 18C9 18 8.5 16 8.5 16" stroke="#2329D6" stroke-linecap="round"/>
                                </svg>
                                <span class="job-offer__content__text">
                                    <?php echo $jobInformation['salary']; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        <?php if( !empty( $jobInformation['type'] ) ): ?>
                            <div class="job-offer__info job-offer__type">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 3V9H19" stroke="#2329D6" stroke-linejoin="round"/>
                                    <path d="M19 8L14 3L5 3.00002L5 21L19 21L19 8Z" stroke="#2329D6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="job-offer__content__text">
                                    <?php echo $jobInformation['type']; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="job-offer__content">
    <?php if( $jobInformation ): ?>
        <div class="job-offer__sticky-info">
            <div class="job-offer__sticky-info__track">
                <div class="job-offer__sticky-info__wrapper">
                    <div class="job-offer__sticky-info__left-col">
                        <?php if( !empty( $jobInformation['salary'] ) ): ?>
                            <div class="job-offer__sticky-info__text job-offer__sticky-info__salary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4V6" stroke="#2877FF" stroke-linecap="round"/>
                                    <path d="M12 18V20" stroke="#2877FF" stroke-linecap="round"/>
                                    <path d="M15.5 8C15.5 8 15 6 12 6C9 6 8.5 7.95652 8.5 9C8.5 13.1403 15.5 10.9649 15.5 15C15.5 16.0435 15 18 12 18C9 18 8.5 16 8.5 16" stroke="#2877FF" stroke-linecap="round"/>
                                </svg>
                                <span class="job-offer__content__text">
                                    <?php echo $jobInformation['salary']; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        <?php if( !empty( $jobInformation['type'] ) ): ?>
                            <div class="job-offer__sticky-info__text job-offer__sticky-info__type">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 3V9H19" stroke="#2329D6" stroke-linejoin="round"/>
                                    <path d="M19 8L14 3L5 3.00002L5 21L19 21L19 8Z" stroke="#2329D6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="job-offer__content__text">
                                    <?php echo $jobInformation['type']; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        <div class="job-offer__sticky-info__more-wrapper">
                            <button class="job-offer__sticky-info__more-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15V12" stroke="#2877FF" stroke-linecap="round"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8C11.4477 8 11 8.44772 11 9C11 9.55228 11.4477 10 12 10C12.5523 10 13 9.55228 13 9C13 8.44772 12.5523 8 12 8Z" fill="#2877FF"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#2877FF"/>
                                </svg>
                            </button>
                            <div class="job-offer__more-modal">
                                <div class="page--width job-offer__more-modal__wrapper">
                                    <div class="job-offer__more-modal__close">
                                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M36.75 12.25L12.25 36.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.25 12.25L36.75 36.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h3 class="job-offer__more-modal__heading"><?php the_title(); ?></h3>
                                    <?php if( !empty( $jobInformation['salary'] ) ): ?>
                                        <span class="job-offer__more-modal__info__title">Wynagrodzenie:</span>
                                        <div class="job-offer__more-modal__info-block job-offer__more-modal__info__salary">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 4V6" stroke="#2877FF" stroke-linecap="round"/>
                                                <path d="M12 18V20" stroke="#2877FF" stroke-linecap="round"/>
                                                <path d="M15.5 8C15.5 8 15 6 12 6C9 6 8.5 7.95652 8.5 9C8.5 13.1403 15.5 10.9649 15.5 15C15.5 16.0435 15 18 12 18C9 18 8.5 16 8.5 16" stroke="#2877FF" stroke-linecap="round"/>
                                            </svg>
                                            <span class="job-offer__more-modal__content__text">
                                                <?php echo $jobInformation['salary']; ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( !empty( $jobInformation['location'] ) ): ?>
                                        <span class="job-offer__more-modal__info__title">Lokalizacja:</span>
                                        <div class="job-offer__more-modal__info-block job-offer__more-modal__info__location">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C12 21 18 14.7 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 14.7 12 21 12 21Z" stroke="#2877FF"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10C12.5523 10 13 9.55228 13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9C11 9.55228 11.4477 10 12 10Z" stroke="#2877FF"/>
                                            </svg>
                                            <span class="job-offer__more-modal__content__text">
                                                <?php echo $jobInformation['location']; ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( !empty( $jobInformation['type'] ) ): ?>
                                        <span class="job-offer__more-modal__info__title">Rodzaj umowy:</span>
                                        <div class="job-offer__more-modal__info-block job-offer__more-modal__info__type">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 3V9H19" stroke="#2877FF" stroke-linejoin="round"/>
                                                <path d="M19 8L14 3L5 3.00002L5 21L19 21L19 8Z" stroke="#2877FF" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span class="job-offer__more-modal__content__text">
                                                <?php echo $jobInformation['type']; ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="job-offer__more-modal__buttons-wrapper">
                                        <a class="btn btn-primary btn-outline job-offer__more-modal__btn job-offer__copy-btn" tabindex="-1">Kopiuj link</a>
                                        <a href="" class="btn btn-primary job-offer__more-modal__btn">Aplikuj teraz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-offer__sticky-info__right-col">
                        <a href="" class="btn btn-primary job-offer__sticky-info__btn">Aplikuj</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="page--width">
        <div class="job-offer__content-wrapper">
            <?php $jobContent = get_field('content');
            if( $jobContent ):?>
                <div class="job-offer__left-col">
                    <div class="job-offer__header hidden-tablet-mobile">
                        <div class="job-offer__header_wrapper">
                            <?php if( $images ): ?>
                                <figure class="job-offer__header__background">
                                <?php
                                $image_size = 'full'; // przykładowo
                                $image_id = $images['desktop']; // (return image ID)
                                $image = wp_get_attachment_image( $image_id, $image_size );
                                echo $image;
                                ?>
                                </figure>
                            <?php endif; ?>
                            <div class="job-offer__header__content">
                                <div class="job-offer__header__top">
                                    <a href="<?php echo site_url('/kariera#careerOffers'); ?>" class="btn btn--link btn--link-reverse">Zobacz pozostałe oferty</a>
                                    <h3 class="job-offer__header__heading"><?php the_title(); ?></h3>
                                </div>
                                <?php if( $jobInformation ): ?>
                                    <div class="job-offer__header__info-wrapper">
                                        <div class="job-offer__header__info">
                                            <?php if( !empty( $jobInformation['location'] ) ): ?>
                                                <div class="job-offer__header__info-block job-offer__header__info-block__location">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C12 21 18 14.7 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 14.7 12 21 12 21Z" stroke="#011BDC"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10C12.5523 10 13 9.55228 13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9C11 9.55228 11.4477 10 12 10Z" stroke="#011BDC"/>
                                                    </svg>
                                                    <span class="job-offer__header__block-text">
                                                        <?php echo $jobInformation['location']; ?>
                                                    </span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( !empty( $jobInformation['salary'] ) ): ?>
                                                <div class="job-offer__header__info-block job-offer__header__info-block__salary">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 4V6" stroke="#011BDC" stroke-linecap="round"/>
                                                        <path d="M12 18V20" stroke="#011BDC" stroke-linecap="round"/>
                                                        <path d="M15.5 8C15.5 8 15 6 12 6C9 6 8.5 7.95652 8.5 9C8.5 13.1403 15.5 10.9649 15.5 15C15.5 16.0435 15 18 12 18C9 18 8.5 16 8.5 16" stroke="#2329D6" stroke-linecap="round"/>
                                                    </svg>
                                                    <span class="job-offer__header__block-text">
                                                        <?php echo $jobInformation['salary']; ?>
                                                    </span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( !empty( $jobInformation['type'] ) ): ?>
                                                <div class="job-offer__header__info-block job-offer__header__info-block__type">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13 3V9H19" stroke="#011BDC" stroke-linejoin="round"/>
                                                        <path d="M19 8L14 3L5 3.00002L5 21L19 21L19 8Z" stroke="#011BDC" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span class="job-offer__header__block-text">
                                                        <?php echo $jobInformation['type']; ?>
                                                    </span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $repeater = $jobContent['repeater'];
                    foreach( $repeater as $item ): ?>
                        <div class="job-offer__content-item">
                            <?php if( !empty( $item['title'] ) ): ?>
                                <h3 class="section-title"><?php echo $item['title']; ?></h3>
                            <?php endif; ?>
                            <?php if( !empty( $item['text'] ) ): ?>
                                <div class="rte">
                                    <?php echo $item['text']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if( $jobInformation ): ?>
                <div class="job-offer__right-col__wrapper hidden-tablet-mobile">
                    <div class="job-offer__right-col">
                        <div class="job-offer__right__content">
                            <h3 class="job-offer__heading"><?php the_title(); ?></h3>
                            <?php if( !empty( $jobInformation['salary'] ) ): ?>
                                <span class="job-offer__info__title">Wynagrodzenie:</span>
                                <div class="job-offer__info-block job-offer__info__salary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4V6" stroke="#2877FF" stroke-linecap="round"/>
                                        <path d="M12 18V20" stroke="#2877FF" stroke-linecap="round"/>
                                        <path d="M15.5 8C15.5 8 15 6 12 6C9 6 8.5 7.95652 8.5 9C8.5 13.1403 15.5 10.9649 15.5 15C15.5 16.0435 15 18 12 18C9 18 8.5 16 8.5 16" stroke="#2877FF" stroke-linecap="round"/>
                                    </svg>
                                    <span class="job-offer__content__text">
                                        <?php echo $jobInformation['salary']; ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty( $jobInformation['location'] ) ): ?>
                                <span class="job-offer__info__title">Lokalizacja:</span>
                                <div class="job-offer__info-block job-offer__info__location">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C12 21 18 14.7 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 14.7 12 21 12 21Z" stroke="#2877FF"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 10C12.5523 10 13 9.55228 13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9C11 9.55228 11.4477 10 12 10Z" stroke="#2877FF"/>
                                    </svg>
                                    <span class="job-offer__content__text">
                                        <?php echo $jobInformation['location']; ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            <?php if( !empty( $jobInformation['type'] ) ): ?>
                                <span class="job-offer__info__title">Rodzaj umowy:</span>
                                <div class="job-offer__info-block job-offer__info__type">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 3V9H19" stroke="#2877FF" stroke-linejoin="round"/>
                                        <path d="M19 8L14 3L5 3.00002L5 21L19 21L19 8Z" stroke="#2877FF" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span class="job-offer__content__text">
                                        <?php echo $jobInformation['type']; ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            <div class="job-offer__buttons-wrapper">
                                <a class="btn btn-primary btn-outline job-offer__btn job-offer__copy-btn" tabindex="-1">Kopiuj link</a>
                                <a href="<?php echo $jobInformation['link']; ?>" target="_blank" class="btn btn-primary job-offer__btn">Aplikuj teraz</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sinlge-oferty_pracy.js" defer="defer"></script>

<?php get_footer(); ?>
