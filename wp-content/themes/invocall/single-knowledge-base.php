<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templates/single-knowledge-base/style.css" />

<?php include('sections/hero-subpage/index.php'); ?>

<?php $post = get_queried_object(); ?>
<?php $terms = wp_get_post_terms( $post->ID, 'knowledge-base-category' ); ?>
<?php $tags = wp_get_post_terms( $post->ID, 'knowledge-base-tag' ); ?>

<section class="single-knowledge-base__header">
    <div class="page--width">
        <div class="single-knowledge-base__header-wrapper">
            <?php if ( $terms != null ): ?>
                <div class="single-knowledge-base__header__left-col">
                    <?php foreach( $terms as $term ): ?>
                        <h3 class="single-knowledge-base__section-title section-title"><?php echo $term->name; ?></h3>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if( !empty( get_field('knowledge_base_featured', $post->ID) ) ): ?>
                <div class="single-knowledge-base__header__right-col">
                    <div class="rte"><?php the_field('knowledge_base_featured', $post->ID); ?></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="single-knowledge-base__content">
    <div class="page--width">
        <div class="single-knowledge-base__content-wrapper">
            <div class="single-knowledge-base__content__left-col">
                <?php if ( $tags != null ): ?>
                    <h3 class="single-knowledge-base__tag__title section-title">Tags</h3>
                    <?php foreach( $tags as $tag ): ?>
                        <div class="single-knowledge-base__block-tag">
                            <span class="single-knowledge-base__tag"><?php echo $tag->name; ?></span>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="single-knowledge-base__date-wrapper">
                    <span class="single-knowledge-base__date section-title"><?php echo get_the_date('d F Y'); ?></span>
                </div>
            </div>
            <?php $group = get_field('knowledgle_base_content', $post->ID);
            if( $group ): ?>
                <div class="single-knowledge-base__content__right-col">
                    <?php $repeater = $group['repeater']; ?>
                    <?php foreach( $repeater as $item ): ?>
                        <h5 class="single-knowledge-base__content-heading"><?php echo $item['heading']; ?></h5>
                        <div class="rte"><?php echo $item['text']; ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>