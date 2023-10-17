<?php $footer = get_field('footer', 'option'); ?>

<footer class="footer">
    <div class="footer__wrapper page--width">
        <div class="footer__contact-blocks">
            <?php if( $footer ): ?>
                <div class="footer__contact-block">
					<?php if (pll_current_language() == 'pl') : ?>
						<?php if( !empty( $footer['heading'] ) && !empty( $footer['text'] ) ): ?>
                        <div class="footer__contact-block__header">
                            <?php if( !empty( $footer['heading'] ) ): ?>
                                <h3 class="footer__contact-block--heading"><?php echo $footer['heading']; ?></h3>
                            <?php endif; ?>
                            <?php if( !empty( $footer['text'] ) ): ?>
                                <p class="footer__contact-block--text"><?php echo $footer['text']; ?></p>
                            <?php endif; ?>
                        </div>
                    	<?php endif; ?>
					<?php else : ?>
						<?php if( !empty( $footer['heading_english'] ) && !empty( $footer['text_english'] ) ): ?>
                        <div class="footer__contact-block__header">
                            <?php if( !empty( $footer['heading_english'] ) ): ?>
                                <h3 class="footer__contact-block--heading"><?php echo $footer['heading_english']; ?></h3>
                            <?php endif; ?>
                            <?php if( !empty( $footer['text_english'] ) ): ?>
                                <p class="footer__contact-block--text"><?php echo $footer['text_english']; ?></p>
                            <?php endif; ?>
                        </div>
                    	<?php endif; ?>
					<?php endif; ?>
                    <?php $contacts = $footer['contacts']; ?>
                    <?php foreach($contacts as $contact): ?>
                        <?php if( $contact['contact_type'] === 'phone' ): ?>
                            <div class="footer__contact--single">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 3V21C18 21.5523 17.5523 22 17 22H7C6.44772 22 6 21.5523 6 21V3C6 2.44772 6.44772 2 7 2H17C17.5523 2 18 2.44772 18 3V3Z" stroke="#E5E6EE" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="14" y="2" width="1" height="4" transform="rotate(90 14 2)" stroke="#2329D6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <a href="tel:<?php echo $contact['phone']; ?>"><?php echo $contact['phone']; ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if( $contact['contact_type'] === 'e-mail' ): ?>
                            <div class="footer__contact--single">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6L12 14L21 6" stroke="#2329D6"/>
                                    <rect x="2" y="5" width="20" height="14" stroke="#E5E6EE" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <a href="mailto:<?php echo $contact['e_mail']; ?>" target="_blank"><?php echo $contact['e_mail']; ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div id="footerContact-form" class="footer__contact-form">
				<?php if (pll_current_language() == 'pl') : ?>
					<?php echo do_shortcode('[contact-form-7 id="69" title="Footer Form"]'); ?>
				<?php else : ?>
					<?php echo do_shortcode('[contact-form-7 id="670" title="Footer Form_copy"]'); ?>
				<?php endif; ?>
            </div>
            <div class="footer--bottom">
                <div class="footer--bottom-left">
                    <div class="footer__logo page-logo">
                        <a href="<?php echo get_home_url(); ?>" class="footer__logo__link">
                            <svg width="100%" height="100%" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M80 0H0V80H80V0Z" fill="#2877FF"/>
                                <path d="M20.297 66.1386H22.1287C21.2871 68.8119 19.1584 70.5941 15.9406 70.5941C12.0297 70.5941 9.45544 67.7723 9.45544 63.6139C9.45544 59.5049 12.0297 56.4851 15.9901 56.4851C19.2079 56.4851 21.3861 58.2178 22.1782 60.9406H20.297C19.5049 58.9604 17.9703 58.0198 15.9406 58.0198C13.0198 58.0198 11.1386 60.297 11.1386 63.5643C11.1386 66.8317 12.9703 69.0594 15.9406 69.0594C18.0198 69.0594 19.5049 68.1188 20.297 66.1386Z" fill="white"/>
                                <path d="M32.1782 67.0297H25.8911L24.6039 70.4455H22.8713L28.1683 56.6832H29.9505L35.2475 70.4455H33.4653L32.1782 67.0297ZM31.6337 65.5941L29.0594 58.7624L26.4356 65.5941H31.6337Z" fill="white"/>
                                <path d="M45.5446 68.8614V70.4455H36.9802V56.6832H38.6634V68.8614H45.5446Z" fill="white"/>
                                <path d="M56.2376 68.8614V70.4455H47.6238V56.6832H49.3069V68.8614H56.2376Z" fill="white"/>
                                <path d="M11.0891 51.5841H9.40594V37.8713H11.0891V51.5841Z" fill="white"/>
                                <path d="M14.0594 37.8713H15.8416L23.2673 48.9604V37.8713H24.901V51.5841H23.1683L15.7426 40.5445V51.5841H14.1089V37.8713H14.0594Z" fill="white"/>
                                <path d="M37.6733 37.8713H39.4555L33.9109 51.5841H32.0792L26.5842 37.8713H28.4159L33.0693 49.6039L37.6733 37.8713Z" fill="white"/>
                                <path d="M39.901 44.7525C39.901 40.6436 42.5248 37.6733 46.4357 37.6733C50.3465 37.6733 52.9703 40.6436 52.9703 44.7525C52.9703 48.8614 50.3465 51.7327 46.4357 51.7327C42.5743 51.7327 39.901 48.8614 39.901 44.7525ZM51.2376 44.7525C51.2376 41.4852 49.406 39.2079 46.4852 39.2079C43.5149 39.2079 41.6832 41.4852 41.6832 44.7525C41.6832 48.0198 43.5149 50.198 46.4852 50.198C49.406 50.1485 51.2376 48.0198 51.2376 44.7525Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <?php $information = $footer['information']; ?>
                    <?php if( $information ): ?>
                        <div class="footer__company-info">
                            <?php if( !empty( $information['company_name'] ) ): ?>
                                <span class="footer__company-info__text footer__company-name"><?php echo $information['company_name']; ?></span>
                            <?php endif; ?>
							<?php if (pll_current_language() == 'pl') : ?>
								<?php if( !empty( $information['company_address'] ) ): ?>
                                <div class="footer__company-info__text footer__rte rte"><?php echo $information['company_address']; ?></div>
                            <?php endif; ?>
							<?php else : ?>
								<?php if( !empty( $information['company_address_english'] ) ): ?>
                                <div class="footer__company-info__text footer__rte rte"><?php echo $information['company_address_english']; ?></div>
                            <?php endif; ?>
							<?php endif; ?>
                            <?php if( !empty( $information['company_nip'] ) ): ?>
                                <span class="footer__company-info__text footer__company-nip">NIP:&nbsp;<?php echo $information['company_nip']; ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php $social_media = get_field('social_media', 'option'); ?>
                    <?php if( $social_media ): ?>
                        <div class="social-media footer__social-media hidden-desktop">
                            <?php $repeater = $social_media['repeater']; ?>
                            <?php foreach($repeater as $item): ?>
                                <?php $icon = $item['icon']; ?>
                                <?php $link = $item['link']; ?>
                                <?php $size  = 'full'; ?>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                    <?php echo wp_get_attachment_image( $icon, $size ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php $copyright = $footer['copyright']; ?>
					<div class="copyright footer__copyright hidden-desktop">
						<?php if (pll_current_language() == 'pl') : ?>
							<?php if( !empty($copyright['text']) ): ?>
								<span><?php echo $copyright['text']; ?></span>
							<?php endif; ?>
						<?php else : ?>
							<?php if( !empty($copyright['text_english']) ): ?>
								<span><?php echo $copyright['text_english']; ?></span>
							<?php endif; ?>
						<?php endif; ?>
					</div>
                </div>
                <div class="footer--bottom-right">
                    <?php
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object( $locations['footer-nav'] );
                    echo '<div class="footer-nav footer-nav--main">' . '<span class="footer-nav__title hidden">' . wp_kses_post( $menu->name ). '</span>';
                        wp_nav_menu( array(
                        'theme_location'    => 'footer-nav',
                        'container'       => 'div',
                        'menu_class'      => '',
                        ));
                    echo '</div>';
                    ?>
                    <?php
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object( $locations['footer-nav-offer'] );
                    echo '<div class="footer-nav footer-nav--offer">' . '<span class="footer-nav__title">' . wp_kses_post( $menu->name ). '</span>';
                        wp_nav_menu( array(
                        'theme_location'    => 'footer-nav-offer',
                        'container'       => 'div',
                        'menu_class'      => '',
                        ));
                    echo '</div>';
                    ?>
                    <?php
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object( $locations['privacy-menu'] );
                    echo '<div class="footer-nav footer-nav--privacy-menu hidden-desktop">';
                        wp_nav_menu( array(
                        'theme_location'    => 'privacy-menu',
                        'container'       => 'div',
                        'menu_class'      => '',
                        ));
                    echo '</div>';
                    ?>
                </div>
            </div>
            <div class="footer--bottom-desktop hidden-flex-tablet-mobile">
                <?php if( $social_media ): ?>
                    <div class="social-media footer__social-media">
                        <?php $repeater = $social_media['repeater']; ?>
                        <?php foreach($repeater as $item): ?>
                            <?php $icon = $item['icon']; ?>
                            <?php $link = $item['link']; ?>
                            <?php $size  = 'full'; ?>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                <?php echo wp_get_attachment_image( $icon, $size ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
				<?php if (pll_current_language() == 'pl') : ?>
					<?php if( !empty($copyright['text']) ): ?>
						<div class="copyright footer__copyright">
                        	<span><?php echo $copyright['text']; ?></span>
                    	</div>
					<?php endif; ?>
				<?php else : ?>
					<?php if( !empty($copyright['text_english']) ): ?>
						<div class="copyright footer__copyright">
                        	<span><?php echo $copyright['text_english']; ?></span>
                    	</div>
					<?php endif; ?>
				<?php endif; ?>
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object( $locations['privacy-menu'] );
                echo '<div class="footer-nav footer-nav--privacy-menu">';
                    wp_nav_menu( array(
                    'theme_location'    => 'privacy-menu',
                    'container'       => 'div',
                    'menu_class'      => '',
                    ));
                echo '</div>';
                ?>
            </div>
        </div>
    </div>
</footer>