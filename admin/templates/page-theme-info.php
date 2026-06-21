<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme info page.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/Patterns_Edd_Intro
 */

?>
	<div id="welcome-panel" class="welcome-panel patterns-edd-hero at-bg-img">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2>
					<?php esc_html_e( 'Welcome to Patterns Edd', 'patterns-edd' ); ?>
				</h2>
				<p>
					<?php
					esc_html_e( 'The Patterns Edd is now active and ready for use. Unleash your creativity with its extensive library of one-click demo Starter Packages, Patterns, and Pattern Kits.', 'patterns-edd' );
					?>
				</p>
				<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-edd" target="_blank" rel="noopener noreferrer nofollow" class="patterns-edd-gsn-btn patterns-edd-btn-outline button button-primary button-hero patterns-edd-install-plugins">
					<?php esc_html_e( 'Documentation', 'patterns-edd' ); ?>
				</a>
				<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-edd" target="_blank" rel="noopener noreferrer nofollow" class="patterns-edd-btn patterns-edd-btn-default button button-secodary button-hero" target="_blank">
					<?php esc_html_e( 'Visit Starter Templates', 'patterns-edd' ); ?>
				</a>
			</div>

			<div class="welcome-panel-column-container">
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18 16h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H18a2 2 0 0 1-2-2V18a2 2 0 0 1 2-2zm12 1.5H18a.5.5 0 0 0-.5.5v3h13v-3a.5.5 0 0 0-.5-.5zm.5 5H22v8h8a.5.5 0 0 0 .5-.5v-7.5zm-10 0h-3V30a.5.5 0 0 0 .5.5h2.5v-8z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Use ready-made Design, Patterns, Templates & Template Parts', 'patterns-edd' ); ?></h3>
						<p>
							<?php esc_html_e( 'Effortlessly use ready-made patterns, templates, and template parts to enhance your site design, making customization quick and easy without starting from scratch.', 'patterns-edd' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>">
							<?php esc_html_e( 'Add a new page', 'patterns-edd' ); ?>
						</a>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0668 17.0854L28.8221 13.9454L18.2008 24.671L16.8983 29.0827L21.4257 27.8309L32.0668 17.0854ZM16 32.75H24V31.25H16V32.75Z" fill="white"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3>
							<?php esc_html_e( 'Customize Templates, Template Parts & More', 'patterns-edd' ); ?>    
						</h3>
						<p>
							<?php esc_html_e( 'With a block theme, you can customize every aspect of both the theme and the site, from headers and footers to individual blocks, providing a cohesive and personalized design.', 'patterns-edd' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>">
							<?php esc_html_e( 'Site Editor', 'patterns-edd' ); ?>
						</a>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M31 24a7 7 0 0 1-7 7V17a7 7 0 0 1 7 7zm-7-8a8 8 0 1 1 0 16 8 8 0 0 1 0-16z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3>
							<?php esc_html_e( 'Transform your site\'s appearance with customizable fonts & colors', 'patterns-edd' ); ?>
						</h3>
						<p>
							<?php esc_html_e( 'Give your site a unique look by customizing fonts and colors. Achieve anything from subtle tweaks to complete makeovers, enhancing your  site\'s visual appeal and overall design.', 'patterns-edd' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( '/site-editor.php?path=%2Fwp_global_styles' ) ); ?>">
							<?php esc_html_e( 'Customize styles', 'patterns-edd' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="patterns-edd-main at-p">
		<div class="at-row at-m patterns-edd-main-wrp">
			<div class="at-col-sm-3 at-col-md-5 at-col-lg-4 at-col-xl-3">
				<div class="patterns-edd-main-sidebar at-flx at-flx-col at-gap">
					<div class="patterns-edd-card at-bg-cl at-bdr">
						<div class="patterns-edd-card-body at-p">
							<div class="patterns-edd-intro-auth at-p">
								<div class="patterns-edd-intro-profile at-h at-w at-bdr at-bdr-rad at-m at-flx at-al-itm-ctr at-jfy-cont-ctr">
									<span class="at-w at-h at-bdr-rad">
										<img class="patterns-edd-gsm-screenshot" src="<?php echo esc_url( PATTERNS_EDD_URL . 'assets/img/patternswp-logo-green.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Edd', 'patterns-edd' ); ?>" />
									</span>
								</div>
								<div class="patterns-edd-intro-profile-info at-m at-txt-al">
									<h3 class="txt">
										<?php esc_html_e( 'Patterns Edd', 'patterns-edd' ); ?>
									</h3>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-edd" target="_blank" rel="noopener noreferrer nofollow" class="button-primary patterns-edd-btn-primary">
										<?php esc_html_e( 'Visit Site', 'patterns-edd' ); ?>
									</a>
									<a href="https://wordpress.org/support/theme/patterns-edd" target="_blank" rel="noopener noreferrer nofollow" class="button-secondary patterns-edd-btn-secondary">
										<?php esc_html_e( 'Support', 'patterns-edd' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="patterns-edd-card at-bg-cl at-bdr">
						<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
							<h4 class="patterns-edd-card-header-ttl at-txt at-m">
								<?php esc_html_e( 'Contact Information', 'patterns-edd' ); ?>
							</h4>
						</div>
						<div class="patterns-edd-card-body at-p at-p">
							<div class="patterns-edd-intro-auth--info">								
								<ul class="patterns-edd-personal-detail at-flx at-flx-col at-gap">
									<li class="">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt class="at-w">
												<span class="dashicons dashicons-smartphone"></span>
												<b>
													<?php esc_html_e( 'Support:', 'patterns-edd' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<a href="https://wordpress.org/support/theme/patterns-edd" target="_blank" rel="noopener noreferrer nofollow">
													<?php esc_html_e( 'Create A Ticket', 'patterns-edd' ); ?>
												</a>
											</dd>                                                        
										</dl>
									</li>
									<li class="mt-2">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt  class="at-w">
												<span class="dashicons dashicons-location"></span>
												<b>
													<?php esc_html_e( 'Location:', 'patterns-edd' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<?php esc_html_e( 'Kathmandu, Nepal', 'patterns-edd' ); ?>
											</dd>                                                        
										</dl>
									</li>
								</ul>
								<ul class="patterns-edd-social at-flx at-jfy-cont-ctr at-al-itm-ctr at-gap at-m">
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://profiles.wordpress.org/patternswp/" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-wordpress"></span>
										</a>
									</li>
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://twitter.com/patternswp" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-twitter"></span>
										</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="at-col-sm-9 at-col-md-7 at-col-lg-8 at-col-xl-9">
				<div class="patterns-edd-main-cont at-flx at-flx-col at-gap">
					<div class="at-row at-gap">
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-edd-card at-bg-cl at-bdr">
								<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-media-document"></span>
									<h4 class="patterns-edd-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Knowledge Base', 'patterns-edd' ); ?>
									</h4>
								</div>
								<div class="patterns-edd-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'In-depth and well documented articles will help you to use the Patterns Edd Themes in easiest way.', 'patterns-edd' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-edd" target="_blank" rel="noopener noreferrer nofollow" class="patterns-edd-btn">
										<?php esc_html_e( 'Visit Knowledge Base', 'patterns-edd' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-edd-card at-bg-cl at-bdr">
								<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-groups"></span>
										<h4 class="patterns-edd-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Community', 'patterns-edd' ); ?>
									</h4>
								</div>
								<div class="patterns-edd-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We want to make customer experience even better. So, join our Facebook community for instant support from experts.', 'patterns-edd' ); ?>
									</p>
									<a href="https://www.facebook.com/profile.php?id=100069809678755" target="_blank" rel="noopener noreferrer nofollow" class="patterns-edd-btn">
										<?php esc_html_e( 'Join Facebook Group', 'patterns-edd' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-edd-card at-bg-cl at-bdr">
								<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-backup"></span>
										<h4 class="patterns-edd-card-header-ttl at-txt at-m">
										<?php esc_html_e( '24x7 Support', 'patterns-edd' ); ?>
									</h4>
								</div>
								<div class="patterns-edd-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We have dedicated support team 24*7 to help you in case you encounter any issue during and after the use of Patterns Edd.', 'patterns-edd' ); ?>
									</p>
									<a href="https://wordpress.org/support/theme/patterns-edd" target="_blank" rel="noopener noreferrer nofollow" class="patterns-edd-btn">
										<?php esc_html_e( 'Create A Ticket', 'patterns-edd' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-edd-card at-bg-cl at-bdr">
								<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-video-alt3"></span>
										<h4 class="patterns-edd-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Video Guide', 'patterns-edd' ); ?>
									</h4>
								</div>
								<div class="patterns-edd-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'Patterns Edd Theme comes with detailed video tutorials of each and every customization with practical demonstration.', 'patterns-edd' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-edd" target="_blank" rel="noopener noreferrer nofollow" class="patterns-edd-btn">
										<?php esc_html_e( 'View Video Guide', 'patterns-edd' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="at-row at-gap">
						<?php
						$recommended_plugins = function_exists( 'patterns_edd_get_recommended_plugins' ) ? patterns_edd_get_recommended_plugins() : null;
						$quick_links_col     = 'at-col-12';

						if ( $recommended_plugins ) {
							$quick_links_col = 'at-col-sm-8 at-col-md-12 at-col-lg-6 at-col-xl-8';
							?>
						<div class="at-col-sm-4 at-col-md-12 at-col-lg-6 at-col-xl-4">
							<div class="patterns-edd-card at-bg-cl at-bdr">
								<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-plugins"></span>
									<h4 class="patterns-edd-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Recommended Plugins', 'patterns-edd' ); ?>
									</h4>
								</div>
								<div class="patterns-edd-card-body at-p at-flx at-flx-col at-gap">
									<?php
									foreach ( $recommended_plugins as $key => $plugin_info ) {
										?>
										<div class="at-flx at-jfy-cont-btw at-al-itm-ctr patterns-edd-plugin-recommend">
											<h4 class="patterns-edd-plugin-title">
												<?php
												if ( isset( $plugin_info['url'] ) ) {
													?>
												<a href='<?php echo esc_url( $plugin_info['url'] ); ?>' target="_blank" rel="noopener noreferrer nofollow">
													<?php echo esc_html( $plugin_info['name'] ); ?>
												</a>
													<?php
												} else {
													echo esc_html( $plugin_info['name'] );
												}
												?>
											</h4>
											<?php
											if ( patterns_edd_is_plugin_active( $plugin_info['plugin'] ) ) {
												?>
												<button class="patterns-edd-btn-primary  button-primary" disabled>
													<?php esc_html_e( 'Installed and Activated', 'patterns-edd' ); ?>
												</button>
												<?php
											} else {
												?>
												<button class="patterns-edd-btn-primary button-primary patterns-edd-install-plugin" data-plugin="<?php echo esc_attr( wp_json_encode( $plugin_info ) ); ?>" data-success-text="<?php esc_attr_e( 'Installed and Activated', 'patterns-edd' ); ?>" data-fail-text="<?php esc_attr_e( 'Failed to install', 'patterns-edd' ); ?>">
													<?php
													if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_info['plugin'] ) ) {
														esc_html_e( 'Activate', 'patterns-edd' );
													} else {
														esc_html_e( 'Install and Activate', 'patterns-edd' );
													}
													?>
												</button>
												<?php
											}
											?>
										</div>
										<?php
									}
									?>
								</div>				
							</div>
						</div>
							<?php
						}
						?>
						<div class="<?php echo esc_attr( $quick_links_col ); ?>">
							<div class="patterns-edd-card at-bg-cl at-bdr">
								<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-links"></span>
									<h4 class="patterns-edd-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Quick Links', 'patterns-edd' ); ?>
									</h4>
								</div>
								<div class="patterns-edd-card-body at-p">
									<div class="patterns-edd-card-btn-grp at-flx at-flx-wrp at-gap">
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?categoryId=header&postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'Edit Header', 'patterns-edd' ); ?>
										</a>
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_EDD_THEME_NAME . '%2F%2Ffooter&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Footer', 'patterns-edd' ); ?>
										</a>
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_EDD_THEME_NAME . '%2F%2Fprimary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Primary Sidebar', 'patterns-edd' ); ?>
										</a>
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_EDD_THEME_NAME . '%2F%2Fsecondary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Secondary Sidebar', 'patterns-edd' ); ?>
										</a>
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'All template parts', 'patterns-edd' ); ?>
										</a>
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_EDD_THEME_NAME . '%2F%2Ffront-page&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Frontpage', 'patterns-edd' ); ?>
										</a>
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_EDD_THEME_NAME . '%2F%2Farchive&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Atchive Page', 'patterns-edd' ); ?>
										</a>
										<a class="patterns-edd-btn patterns-edd-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template' ) ); ?>">
											<?php esc_html_e( 'All Templates', 'patterns-edd' ); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php
					$faqs = function_exists( 'patterns_edd_get_theme_faq' ) ? patterns_edd_get_theme_faq() : null;
					if ( $faqs ) {
						?>
							<div class="at-row">
								<div class="at-col-12">
									<div class="patterns-edd-card at-bg-cl at-bdr">
										<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
											<span class="dashicons dashicons-format-chat"></span>
											<h4 class="patterns-edd-card-header-ttl at-txt at-m">
												<?php esc_html_e( 'Frequently Asked Questions', 'patterns-edd' ); ?>
											</h4>
										</div>
										<div class="patterns-edd-card-body at-p ">
											<div class="patterns-edd-accordion at-flx at-flx-col at-gap">
												<?php
												foreach ( $faqs as $key => $faq ) {
													echo "<details class='patterns-edd-accordion-section at-bdr'>";
													echo "<summary class='patterns-edd-accordion-section-title at-p at-pos at-bdr'>";
													echo "<h4 class='patterns-edd-accordion-heading at-m'>";
													echo esc_html( $faq['q'] );
													echo '</h4>';
													echo '</summary>';/*patterns-edd-card-header*/
													echo "<div id='patterns-edd-info-faq-" . esc_attr( $key ) . "' class='patterns-edd-accordion-section-content at-p'>";
													echo wp_kses_post( $faq['a'] );
													echo '</div>';/*id*/
													echo '</details>';/*patterns-edd-card*/
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
					?>
					<?php
					$changelog = function_exists( 'patterns_edd_parse_changelog' ) ? patterns_edd_parse_changelog() : '';
					if ( $changelog ) {
						?>
							<div class="at-row">
								<div class="at-col-12">
									<div class="patterns-edd-card at-bg-cl at-bdr">
										<div class="patterns-edd-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
											<span class="dashicons dashicons-backup"></span>
											<h4 class="patterns-edd-card-header-ttl at-txt at-m">
												<?php esc_html_e( 'Changelog', 'patterns-edd' ); ?>
											</h4>
										</div>
										<div class="patterns-edd-card-body at-p">
											<pre class="patterns-edd-changelog"><?php echo wp_kses_post( $changelog ); ?></pre>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
