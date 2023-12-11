<?php
/* Template Name: Thank You Page */
?>

<?php
    $header = get_field('header') ?: '';
    $content = get_field('content') ?: '';
    $header_2 = get_field('header_2') ?: '';
    $content_2 = get_field('content_2') ?: '';
    $button = get_field('button') ?: '';

get_header();

?>

<section class="thank-you-page">
    <?php load_element_styles( 'assets/css/templates/page-thank-you', 'page-thank-you-style' ); ?>
    <figure class="thank-you-page__background-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thank_you-mobile.png" alt="Invocall Page Not Found" class="thank-you-page__background--mobile"/>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thank_you.png" alt="Invocall Page Not Found" class="thank-you-page__background--desktop"/>
    </figure>

    <div class="thank-you-page__content page--width">
    <?php if( $header ): ?>
        <h1 class="thank-you-page__header"><?php echo $header; ?></h1>
    <?php endif; ?>
    <?php if( $content ): ?>
        <div class="thank-you-page__content-text"><?php echo $content; ?></div>
    <?php endif; ?>
    <?php if( $header_2 ): ?>
        <h2 class="thank-you-page__header thank-you-page__header--second"><?php echo $header_2; ?></h2>
    <?php endif; ?>
    <?php if( $content_2 ): ?>
        <div class="thank-you-page__content-text thank-you-page__content-text--second"><?php echo $content_2; ?></div>
    <?php endif; ?>
    <?php if( $button ): ?>
        <div class="thank-you-page__button-wrapper">
        <a href="<?php echo esc_url($button['url']); ?>" class="btn btn-primary thank-you-page__button" aria-label="<?php echo esc_attr($button['title']); ?>"><?php echo esc_html($button['title']); ?></a>
        </div>
    <?php endif; ?>
    </div>


</section>

<?php get_footer(); ?>
