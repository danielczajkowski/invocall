<?php
/* Template Name: Kontakt */
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templates/page-contact/style.css" />

<section class="contact-page">
    <div class="page--width">
        <div class="contact-page__header hidden-tablet-mobile">
            <h1 class="contact-page__title"><?php the_title(); ?></h1>
        </div>
        <?php $group = get_field('group');
        if( $group ): ?>
            <div class="contact-page__wrapper">
                <?php if( !empty( $group['section_title'] ) ): ?>
                    <div class="contact-page__left-col__wrapper">
                        <div class="contact-page__left-col">
                            <h3 class="contact-page__section-title section-title"><?php echo $group['section_title']; ?></h3>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $content = $group['content'];
                if( $content ): ?>
                    <div class="contact-page__right-col">
                        <?php if( !empty( $content['heading'] ) ): ?>
                            <h2 class="contact-page__right-col__heading"><?php echo $content['heading']; ?></h2>
                        <?php endif; ?>
                        <?php if( !empty( $content['text'] ) ): ?>
                            <p class="contact-page__right-col__text"><?php echo $content['text']; ?></p>
                        <?php endif; ?>
                        <?php $repeater = $content['repeater'];
                        if( $repeater ): ?>
                            <div class="contact-page__content">
                                <?php foreach( $repeater as $item ): ?>
                                    <div class="contact-page__content-block">
                                        <div class="contact-page__content-block__icon">
                                            <?php $icon = $item['chose_type']; ?>
                                            <?php if( $icon == 'phone' ): ?>
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 4V28C24 28.7364 23.403 29.3333 22.6667 29.3333H9.33333C8.59695 29.3333 8 28.7364 8 28V4C8 3.26362 8.59695 2.66666 9.33333 2.66666H22.6667C23.403 2.66666 24 3.26362 24 4V4Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <rect x="18.666" y="2.66666" width="1.33333" height="5.33333" transform="rotate(90 18.666 2.66666)" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            <?php elseif( $icon == 'e-mail' ): ?>
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 8L16 18.6667L28 8" stroke="black"/>
                                                    <rect x="2.66602" y="6.66667" width="26.6667" height="18.6667" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            <?php else: ?>
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="2.66602" y="2.66666" width="26.6667" height="26.6667" stroke="black" stroke-linejoin="round"/>
                                                    <path d="M14.666 9.33333H22.666" stroke="black" stroke-linecap="round"/>
                                                    <path d="M14.666 16H22.666" stroke="black" stroke-linecap="round"/>
                                                    <path d="M14.666 22.6667H22.666" stroke="black" stroke-linecap="round"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.33333 10.6667C10.0697 10.6667 10.6667 10.0697 10.6667 9.33333C10.6667 8.59695 10.0697 8 9.33333 8C8.59695 8 8 8.59695 8 9.33333C8 10.0697 8.59695 10.6667 9.33333 10.6667Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.33333 17.3333C10.0697 17.3333 10.6667 16.7364 10.6667 16C10.6667 15.2636 10.0697 14.6667 9.33333 14.6667C8.59695 14.6667 8 15.2636 8 16C8 16.7364 8.59695 17.3333 9.33333 17.3333Z" fill="black"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.33333 24C10.0697 24 10.6667 23.4031 10.6667 22.6667C10.6667 21.9303 10.0697 21.3333 9.33333 21.3333C8.59695 21.3333 8 21.9303 8 22.6667C8 23.4031 8.59695 24 9.33333 24Z" fill="black"/>
                                                </svg>
                                            <?php endif; ?>
                                        </div>
                                        <div class="contact-page__content-block__contact__text">
                                            <?php if( !empty( $item['phone'] ) && $icon == 'phone' ): ?>
                                                <div class="contact-page__content-block__contact-wrapper">
                                                    <a href="tel:<?php echo $item['phone']; ?>" class="contact-page__content-block__contact"><?php echo $item['phone']; ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( !empty( $item['email'] ) && $icon == 'e-mail' ): ?>
                                                <div class="contact-page__content-block__contact-wrapper">
                                                    <a href="mailto:<?php echo $item['email']; ?>" class="contact-page__content-block__contact"><?php echo $item['email']; ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( !empty( $item['link'] ) && $icon == 'link' ): ?>
                                                <div class="contact-page__content-block__contact-wrapper">
                                                    <a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>" class="btn btn-primary contact-page__content-block__contact__btn"><?php echo $item['link']['title']; ?></a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if( !empty( $item['text'] ) ): ?>
                                                <span class="contact-page__content-block__text"><?php echo $item['text']; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
