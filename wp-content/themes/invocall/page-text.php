<?php
/* Template Name: Strona tekstowa */
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templates/page-text/style.css" />

<section class="page-text__hero">
  <div class="page-text__hero-wrapper page--width">
    <div class="page-text__hero-header">
      <h1 class="page-text__hero-heading"><?php the_title(); ?></h1>
    </div>
  </div>
</section>

<?php $content = get_field('content');
if( $content ): ?>

  <section class="page-text__content">
    <div class="page-text__content-wrapper page--width">
      <div class="page-text__content-content-wrapper">
        <?php if( $content['heading'] ): ?>
            <div class="page-text__content-header">
            <div class="rte"><?php echo $content['heading']; ?></div>
            </div>
        <?php endif; ?>
        <div class="page-text__content-container">
            <?php $repeater = $content['repeater']; ?>
            <?php foreach( $repeater as $item ): ?>
            <div class="page-text__content-item">
                <?php if( $item['content_heading'] ): ?>
                <h5 class="page-text__content-item-heading"><?php echo $item['content_heading']; ?></h5>
                <?php endif; ?>
                <?php if( $item['text'] ): ?>
                <ul class="page-text__content-item-list">
                    <li class="page-text__content-item-list-item"><?php echo $item['text']; ?></li>
                </ul>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>

<?php get_footer(); ?>
