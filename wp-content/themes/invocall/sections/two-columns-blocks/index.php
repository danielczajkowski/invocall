<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sections/two-columns-blocks/style.css" />

<section class="two-columns-blocks">
    <div class="page--width">
        <div class="two-columns-blocks__wrapper">
            <?php
            $firstGroup = get_sub_field('first_group');
            if( $firstGroup ):
                $blocks = $firstGroup['repeater'];
                if( $blocks ):?>
                    <div class="two-columns-blocks__col two-columns-blocks__left-col">
                        <?php foreach( $blocks as $block ): ?>
                            <?php $sizeBlock = $block['chose_size_block']; ?>
                            <div class="two-columns-blocks__block <?php if( $sizeBlock === 'full' ): ?>two-columns-blocks__block--full-width<?php elseif( $sizeBlock === 'half' ): ?>two-columns-blocks__block--half-width<?php endif; ?>">
                                <?php $background = $block['background']; ?>
                                <div class="two-columns-block__background-wrapper<?php if( $background === 'image' ): ?> two-columns-block__background-image__wrapper<?php endif; ?>">
                                    <?php if( $background === 'color' ):
                                        $color = $block['color']; ?>
                                        <div class="two-columns-block__background-color" style="background-color: <?php echo $color; ?>"></div>
                                    <?php elseif( $background === 'image' ):
                                        $imageSize = 'full';
                                        $imageId = $block['image'];
                                        $image = wp_get_attachment_image( $imageId, $imageSize ); ?>
                                        <figure class="two-columns-block__background-image">
                                            <?php echo $image; ?>
                                        </figure>
                                    <?php endif; ?>
                                </div>
                                <?php
                                $text = $block['text'];
                                if( !empty( $text ) ):
                                    $textColor = $block['text_color']; ?>
                                    <div class="two-columns-block__content">
                                        <h5 class="two-columns-block__text" style="color: <?php echo $textColor; ?>"><?php echo $text; ?></h5>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php
            $secondGroup = get_sub_field('second_group');
            if( $secondGroup ):
                $blocks = $secondGroup['repeater'];
                if( $blocks ):?>
                    <div class="two-columns-blocks__col two-columns-blocks__right-col">
                        <?php foreach( $blocks as $block ): ?>
                            <?php $sizeBlock = $block['chose_size_block']; ?>
                            <div class="two-columns-blocks__block <?php if( $sizeBlock === 'full' ): ?>two-columns-blocks__block--full-width<?php elseif( $sizeBlock === 'half' ): ?>two-columns-blocks__block--half-width<?php endif; ?>">
                                <?php $background = $block['background']; ?>
                                <div class="two-columns-block__background-wrapper<?php if( $background === 'image' ): ?> two-columns-block__background-image__wrapper<?php endif; ?>">
                                    <?php if( $background === 'color' ):
                                        $color = $block['color']; ?>
                                        <div class="two-columns-block__background-color" style="background-color: <?php echo $color; ?>"></div>
                                    <?php elseif( $background === 'image' ):
                                        $imageSize = 'full';
                                        $imageId = $block['image'];
                                        $image = wp_get_attachment_image( $imageId, $imageSize ); ?>
                                        <figure class="two-columns-block__background-image">
                                            <?php echo $image; ?>
                                        </figure>
                                    <?php endif; ?>
                                </div>
                                <?php
                                $text = $block['text'];
                                if( !empty( $text ) ):
                                    $textColor = $block['text_color']; ?>
                                    <div class="two-columns-block__content">
                                        <h5 class="two-columns-block__text" style="color: <?php echo $textColor; ?>"><?php echo $text; ?></h5>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>