<?php
/* Template Name: Baza wiedzy */
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templates/page-knowledge-base/style.css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/css/templates/page-knowledge-base/index.js" defer="defer"></script>

<?php
$categories = get_terms( 'knowledge-base-category', array(
    'orderby' => 'date',
    'order' => 'DESC',
    'hide_empty' => true,
));
?>

<section class="knowledge-base__hero"></section>

<section class="posts">
    <div class="page--width">
        <div class="posts__wrapper">
            <div class="posts__header">
                <h1 class="page__title"><?php the_title(); ?></h1>
                <h4 class="page__subtitle">Typ</h4>
                <div class="posts__tabs">
                    <?php foreach($categories as $key => $category): ?>
                        <button class="button button--unstyled" tab-name="<?php echo $category->slug; ?>">
                            <?php echo $category->name; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php foreach($categories as $key => $category): ?>
                <?php
                $_posts = array(
                'post_type'  => 'knowledge-base',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'knowledge-base-category',
                        'field' => 'slug',
                        'hide_empty' => true,
                        'operator' => 'IN',
                        'terms'    => $category->slug,
                    ),
                )
                );
                $query = new WP_Query($_posts); ?>
                <?php if ($query-> have_posts()): ?>
                    <div class="posts__content" tab-content="<?php echo $category->slug; ?>">
                        <?php while ($query->have_posts()): $query->the_post();?>
                            <div class="posts__item">
                                <div class="posts__item-content">
                                    <figure class="posts__item-content__thumbnail">
                                        <?php the_post_thumbnail('full'); ?>
                                    </figure>
                                    <div class="posts__item-content__texts">
                                        <h5 class="posts__item-content__heading"><?php the_title(); ?></h5>
                                        <?php if( !empty( get_field('knowledge_base_featured') ) ): ?>
                                            <div class="rte"><?php the_field('knowledge_base_featured'); ?></div>
                                        <?php endif; ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn--link">
                                            <?php if ( $category->slug === 'case-study' ): ?>
												<?php if (pll_current_language() == 'pl') : ?>
													Zobacz case study
												<?php else : ?>
													 View Case Studies
												<?php endif; ?>
                                            <?php elseif ( $category->slug === 'blog' ): ?>
												<?php if (pll_current_language() == 'pl') : ?>
													Czytaj artykuł
												<?php else : ?>
													 View News
												<?php endif; ?>
                                            <?php else: ?>
												<?php if (pll_current_language() == 'pl') : ?>
													Czytaj dalej
												<?php else : ?>
													Read More
												<?php endif; ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif;
                wp_reset_query(); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>