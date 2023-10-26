<?php
/* Template Name: Oferta */
?>

<?php get_header();
load_element_styles( 'assets/css/templates/offer-content', 'offer-content-style' );
include('sections/hero-subpage/index.php');
get_template_part('parts/section-loop');
get_footer(); ?>