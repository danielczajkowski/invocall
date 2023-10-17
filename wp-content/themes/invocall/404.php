<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templates/404/style.css" />

<div class="error-page">
  <div class="error-page__wrapper">
    <figure class="error-page__background-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404-mobile.png" alt="Invocall Page Not Found" class="error-page__background--mobile"/>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.jpg" alt="Invocall Page Not Found" class="error-page__background--desktop"/>
    </figure>
    <div class="error-page__content-wrapper">
      <div class="error-page__content">
        <h4 class="error-page__heading">Podana strona nie istnieje</h4>
        <a href="<?php echo home_url(); ?>" class="btn btn-primary error-page__btn-back">Przejdz do strony głównej</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
