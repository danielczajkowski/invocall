<?php
$section_title = get_sub_field('section_title') ?: '';
$content = get_sub_field('content') ?: '';
$tiles = get_sub_field('tiles') ?: '';

$sticky = array();
$tiles_data = array();

if( $tiles ) {

    foreach ($tiles as $tile) {
        $sticky_tile = array();
        $tile_data = array();
        $random_id = uniqid();

        $sticky_tile['number'] = $tile['number'] ?: '';
        $sticky_tile['image'] =$tile['image'] ? wp_get_attachment_image($tile['image'], 'full') : '';
        $sticky_tile['icon'] = $tile['icon'] ? wp_get_attachment_image($tile['icon'], 'full') : '';
        $sticky_tile['id'] = $random_id;

        $tile_data['header'] = $tile['header'] ?: '';
        $tile_data['content'] = $tile['content'] ?: '';
        $tile_data['id'] = $random_id;

        array_push($sticky, $sticky_tile);
        array_push($tiles_data, $tile_data);
    }

}



?>

<?php if ($tiles) : ?>
    <section class="how-it-looks">
        <?php load_libs_script('how-it-looks', 'how-it-looks-scripts', '', 'sections/'); ?>
        <?php load_element_styles('sections/how-it-looks/dist', 'how-it-looks-style'); ?>
        <div class="page--width">
            <div class="how-it-looks__header">
                <?php if ($section_title) : ?>
                    <h3 class="how-it-looks__title"><?php echo $section_title; ?></h3>
                <?php endif; ?>
                <?php if ($content) : ?>
                    <div class="how-it-looks__content">
                        <?php echo $content; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="how-it-looks__tiles">
                <div class="how-it-looks__tile__sticky">
                    <div class="how-it-looks__tile__left">
                        <div class="how-it-looks__tile__title section-title">
                        <?php foreach( $sticky as $key => $sticky_single ): ?>
                            <?php if( $sticky_single['number'] ): ?>
                            <div data-id="<?php echo $sticky_single['id']; ?>" class="how-it-looks__tile__number<?php echo $key === 0 ? ' active' : ''; ?>">
                                <?php echo $sticky_single['number']; ?>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="how-it-looks__tile__right">
                        <div class="how-it-looks__tile__images">
                        <?php foreach( $sticky as $key => $sticky_single ): ?>
                            <?php if( $sticky_single['image'] ): ?>
                            <div data-id="<?php echo $sticky_single['id']; ?>" class="how-it-looks__tile__image--wrapper<?php echo $key === 0 ? ' active' : ''; ?>">
                                <?php echo $sticky_single['image']; ?>
                                <?php if( $sticky_single['icon'] ): ?>
                                <div class="how-it-looks__tile__image--icon">
                                    <?php echo $sticky_single['icon']; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="how-it-looks__tile__content">
            <?php foreach( $tiles_data as $key => $tile_data ): ?>
                <div data-id="<?php echo $tile_data['id']; ?>" class="how-it-looks__tile__content--wrapper">
                <?php if( $tile_data['header'] || $tile_data['content'] ): ?>
                    <div class="how-it-looks__tile__content--left"></div>
                    <div class="how-it-looks__tile__content--right">
                    <?php if( $tile_data['header'] ): ?>
                        <div class="how-it-looks__tile__content__header">
                            <?php echo $tile_data['header']; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( $tile_data['content'] ): ?>
                        <div class="how-it-looks__tile__content__content">
                            <?php echo $tile_data['content']; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                <?php endif; ?>
                </div>
            <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>