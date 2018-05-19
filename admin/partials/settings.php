<div class="wrap gdpr">
	<h1><?php esc_html_e( 'GDPR Settings', 'gdpr' ); ?></h1>

	<?php settings_errors(); ?>

	<form action="options.php" method="post" class="gdpr-settings-form">

		<?php settings_fields( 'gdpr' ); ?>

		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="gdpr_privacy_policy_page"><?php esc_html_e( 'Privacy Policy Page', 'gdpr' ) ?></label>
					</th>
				<td>
						<select name="gdpr_privacy_policy_page" id="gdpr_privacy_policy_page">
							<option value=""><?php esc_html_e( '-- Select --', 'gdpr' ) ?></option>
							<?php foreach ( $pages as $page ): ?>
								<option value="<?php echo esc_attr( $page->ID ) ?>" <?php selected( $privacy_policy_page, $page->ID ); ?>><?php echo esc_html( $page->post_title ); ?></option>
							<?php endforeach ?>
						</select>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="gdpr_email_limit"><?php esc_html_e( 'Outgoing email limitation', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $limit = get_option( 'gdpr_email_limit', 100 ); ?>
						<input type="number" name="gdpr_email_limit" id="gdpr_email_limit" value="<?php echo esc_attr( $limit ); ?>">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="gdpr_deletion_needs_review"><?php esc_html_e( 'User deletion', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $needs_review = get_option( 'gdpr_deletion_needs_review', true ); ?>
						<input type="checkbox" name="<?php echo esc_attr( 'gdpr_deletion_needs_review' ); ?>" id="gdpr_deletion_needs_review" value="1"  <?php checked( $needs_review, true ); ?>><span class="description"><label for="gdpr_deletion_needs_review"><?php esc_html_e( 'Send all deletion requests to the review table.', 'gdpr' ); ?></label></label>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="gdpr_disable_css"><?php esc_html_e( 'Disable CSS', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $disable_css = get_option( 'gdpr_disable_css', false ); ?>
						<input type="checkbox" name="<?php echo esc_attr( 'gdpr_disable_css' ); ?>" id="gdpr_disable_css" value="1"  <?php checked( $disable_css, true ); ?>><label for="gdpr_disable_css"><span class="description"><?php esc_html_e( 'Make sure you know what you are doing before checking this.', 'gdpr' ); ?></span></label>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="gdpr_enable_telemetry_tracker"><?php esc_html_e( 'Enable the Telemetry Tracker', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $enable_telemetry = get_option( 'gdpr_enable_telemetry_tracker', false ); ?>
						<input type="checkbox" name="<?php echo esc_attr( 'gdpr_enable_telemetry_tracker' ); ?>" id="gdpr_enable_telemetry_tracker" value="1"  <?php checked( $enable_telemetry, true ); ?>><label for="gdpr_enable_telemetry_tracker"><span class="description"><?php esc_html_e( 'Toggles the Telemetry Tracker On/Off. (experimental)', 'gdpr' ); ?></span></label>
					</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<h2 class="title"><?php esc_html_e( 'Privacy Center', 'gdpr' ); ?></h2>
		<p>
			<?php esc_html_e( 'This section handles the privacy bar and some of the privacy preferences window.', 'gdpr' ) ?><br>
			<strong><?php esc_html_e( 'Important:', 'gdpr' ); ?></strong> <?php esc_html_e( 'If the privacy banner text is not filled out, the privacy banner will not show up. Even if you registered your cookies.', 'gdpr' ) ?></p>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="gdpr_cookie_banner_content"><?php esc_html_e( 'Privacy Banner Text', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $privacy_bar_content = get_option( 'gdpr_cookie_banner_content', '' ); ?>
						<textarea name="gdpr_cookie_banner_content" id="gdpr_cookie_banner_content" cols="80" rows="6"><?php echo esc_html( $privacy_bar_content ); ?></textarea>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="gdpr_cookie_privacy_excerpt"><?php esc_html_e( 'Privacy Excerpt', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $privacy_excerpt = get_option( 'gdpr_cookie_privacy_excerpt', '' ); ?>
						<textarea name="gdpr_cookie_privacy_excerpt" id="gdpr_cookie_privacy_excerpt" cols="80" rows="6"><?php echo esc_html( $privacy_excerpt ); ?></textarea>
						<p class="description"><?php esc_html_e( 'This will appear in the consent section of the privacy preference window.', 'gdpr' ); ?></p>
					</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<h2 class="title"><?php esc_html_e( 'Request Forms reCAPTCHA', 'gdpr' ); ?></h2>
		<p><?php esc_html_e( 'To prevent spam attacks, you have the option to enable reCAPTCHA. Configure below your keys to make it work with our request forms.', 'gdpr' ); ?></p>
		<p>
			<?php echo sprintf(
				/* translators: External link with instructions on how to proceed. */
				esc_html__( 'You can find the necessary information %s.', 'gdpr' ),
				'<a href="https://www.google.com/recaptcha/admin" target="_blank">' . esc_html__( 'here', 'gdpr' ) . '</a>'
			) ?></p>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="gdpr_use_recaptcha"><?php esc_html_e( 'Enable reCAPTCHA', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $use_recaptcha = get_option( 'gdpr_use_recaptcha', false ); ?>
						<input type="checkbox" name="<?php echo esc_attr( 'gdpr_use_recaptcha' ); ?>" id="gdpr_use_recaptcha" value="1"  <?php checked( $use_recaptcha, true ); ?>>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="gdpr_recaptcha_site_key"><?php esc_html_e( 'Site Key', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $site_key = get_option( 'gdpr_recaptcha_site_key', '' ); ?>
						<input type="text" name="gdpr_recaptcha_site_key" value="<?php echo esc_attr( $site_key ); ?>" placeholder="">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="gdpr_recaptcha_secret_key"><?php esc_html_e( 'Secret Key', 'gdpr' ) ?></label>
					</th>
					<td>
						<?php $secret_key = get_option( 'gdpr_recaptcha_secret_key', '' ); ?>
						<input type="password" name="gdpr_recaptcha_secret_key" value="<?php echo esc_attr( $secret_key ); ?>" placeholder="">
					</td>
				</tr>
			</tbody>
		</table>
		<?php if ( class_exists( 'WooCommerce' ) ): ?>
			<hr>
			<h2 class="title"><?php esc_html_e( 'WooCommerce', 'gdpr' ); ?></h2>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for="gdpr_add_consent_checkboxes_registration"><?php esc_html_e( 'Add consent checkboxes to the registration page', 'gdpr' ) ?></label>
						</th>
						<td>
							<?php $add_checkboxes_to_registration = get_option( 'gdpr_add_consent_checkboxes_registration', false ); ?>
							<input type="checkbox" name="<?php echo esc_attr( 'gdpr_add_consent_checkboxes_registration' ); ?>" id="gdpr_add_consent_checkboxes_registration" value="1"  <?php checked( $add_checkboxes_to_registration, true ); ?>>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="gdpr_add_consent_checkboxes_checkout"><?php esc_html_e( 'Add consent checkboxes to the checkout registration form', 'gdpr' ) ?></label>
						</th>
						<td>
							<?php $add_checkboxes_to_checkout = get_option( 'gdpr_add_consent_checkboxes_checkout', false ); ?>
							<input type="checkbox" name="<?php echo esc_attr( 'gdpr_add_consent_checkboxes_checkout' ); ?>" id="gdpr_add_consent_checkboxes_checkout" value="1"  <?php checked( $add_checkboxes_to_checkout, true ); ?>>
						</td>
					</tr>
				</tbody>
			</table>
		<?php endif ?>

		<hr>
		<h2><?php esc_html_e( 'Cookies', 'gdpr' ) ?></h2>
		<div id="gdpr-cookie-categories">
			<?php foreach ( $registered_cookies as $cat_id => $cookie_cat ): ?>
				<div class="postbox" id="cookie-tab-content-<?php echo esc_attr( $cat_id ); ?>">
					<h2 class="hndle"><?php echo esc_html( $cookie_cat['name'] ) ?></h2>
					<div class="inside">
						<table class="form-table">
							<tr>
								<th>
									<label for="rename-<?php echo esc_attr( $cat_id ); ?>">
										<?php esc_html_e( 'Category Name', 'gdpr' ); ?>:<span class="gdpr-required">*</span>
										<span class="screen-reader-text"><?php esc_attr_e( 'Change this value if you want to name it something different.', 'gdpr' ); ?></span>
										<span data-tooltip="<?php esc_attr_e( 'Change this value if you want to name it something different.', 'gdpr' ); ?>">
											<span class="dashicons dashicons-info"></span>
										</span>
									</label>
								</th>
								<td>
									<input type="text" name="gdpr_registered_cookies[<?php echo esc_attr( $cat_id ); ?>][name]" value="<?php echo esc_attr( $cookie_cat['name'] ); ?>" required>
								</td>
							</tr>
							<tr>
								<th>
									<label for="status-<?php echo esc_attr( $cat_id ); ?>">
										<?php esc_html_e( 'Status', 'gdpr' ); ?>:
										<span class="screen-reader-text"><?php esc_attr_e( 'Required cookies are cookies that cannot be opt out. They need to be created for the site to function properly. Default On will set the cookie after agreement. Default Off will set the cookie only if the user changes their preferences and enable them. Default on except DNT will set the cookie, except when the user has Do Not Track enabled.', 'gdpr' ); ?></span>
										<span data-tooltip="<?php esc_attr_e( 'Required cookies are cookies that cannot be opt out. They need to be created for the site to function properly. Default On will set the cookie after agreement. Default Off will set the cookie only if the user changes their preferences and enable them. Default on except DNT will set the cookie, except when the user has Do Not Track enabled.', 'gdpr' ); ?>">
											<span class="dashicons dashicons-info"></span>
										</span>
									</label>
								</th>
								<td>
									<select name="gdpr_registered_cookies[<?php echo esc_attr( $cat_id ); ?>][status]" id="status-<?php echo esc_attr( $cat_id ); ?>">
										<option value=""></option>
										<option value="required" <?php selected( $registered_cookies[ $cat_id ]['status'], 'required' ); ?>><?php esc_html_e( 'Required', 'gdpr' ); ?></option>
										<option value="default-off" <?php selected( $registered_cookies[ $cat_id ]['status'], 'default-off' ); ?>><?php esc_html_e( 'Default to OFF', 'gdpr' ); ?></option>
										<option value="default-on" <?php selected( $registered_cookies[ $cat_id ]['status'], 'default-on' ); ?>><?php esc_html_e( 'Default to ON', 'gdpr' ); ?></option>
										<option value="default-on-dnt" <?php selected( $registered_cookies[ $cat_id ]['status'], 'default-on-dnt' ); ?>><?php esc_html_e( 'Default to ON unless DNT', 'gdpr' ); ?></option>
									</select>
								</td>
							</tr>
							<tr>
								<th>
									<label for="cookies-used-<?php echo esc_attr( $cat_id ); ?>">
										<?php esc_html_e( 'Cookies used', 'gdpr' ); ?>:
										<span class="screen-reader-text"><?php esc_attr_e( 'A comma separated list of cookies that your site is using that fit this category.', 'gdpr' ); ?></span>
										<span data-tooltip="<?php esc_attr_e( 'A comma separated list of cookies that your site is using that fit this category.', 'gdpr' ); ?>">
											<span class="dashicons dashicons-info"></span>
										</span>
									</label>
								</th>
								<td>
									<textarea cols="53" rows="3" name="gdpr_registered_cookies[<?php echo esc_attr( $cat_id ); ?>][cookies_used]" id="cookies-used-<?php echo esc_attr( $cat_id ); ?>"><?php echo esc_attr( $registered_cookies[ $cat_id ]['cookies_used'] ); ?></textarea>
									<br>
									<span class="description"><?php esc_html_e( 'Comma separated list.', 'gdpr' ); ?></span>
								</td>
							</tr>
							<tr>
								<th>
									<label for="tab-how-we-use-<?php echo esc_attr( $cat_id ); ?>">
										<?php esc_html_e( 'How are these used', 'gdpr' ); ?>:
										<span class="screen-reader-text"><?php esc_attr_e( 'A brief explanation on why you are requesting to use these cookies, what they are for and how you process them.', 'gdpr' ); ?></span>
										<span data-tooltip="<?php esc_attr_e( 'A brief explanation on why you are requesting to use these cookies, what they are for and how you process them.', 'gdpr' ); ?>">
											<span class="dashicons dashicons-info"></span>
										</span>
									</label>
								</th>
								<td><textarea name="gdpr_registered_cookies[<?php echo esc_attr( $cat_id ); ?>][how_we_use]" id="tab-how-we-use-<?php echo esc_attr( $cat_id ); ?>" cols="53" rows="3"><?php echo esc_html( $registered_cookies[ $cat_id ]['how_we_use'] ); ?></textarea></td>
							</tr>
							<tr>
                <th>
                	<label for="hosts-<?php echo esc_attr( $cat_id ); ?>">
                		<?php esc_html_e( 'Third party domain', 'gdpr' ); ?>:
                		<span class="screen-reader-text"><?php esc_attr_e( 'E.g. youtube.com', 'gdpr' ); ?></span>
                		<span data-tooltip="<?php esc_attr_e( 'E.g. youtube.com', 'gdpr' ); ?>">
                			<span class="dashicons dashicons-info"></span>
                		</span>
                	</label>
                </th>
                <td>
                  <input type="text" id="hosts-<?php echo esc_attr( $cat_id ); ?>" class="regular-text" placeholder="domain.com" />
                  <button class="button button-primary add-host" data-tabid="<?php echo esc_attr( $cat_id ); ?>"><?php esc_html_e( 'Add', 'gdpr' ); ?></button>
                  <br>
                  <span class="description"><?php esc_html_e( 'Cookies that are set by a third party, like facebook.com.', 'gdpr' ); ?></span>
                </td>
              </tr>
						</table>
						<div class="tab-hosts" data-tabid="<?php echo esc_attr( $cat_id ); ?>">
              <?php if ( isset( $cookie_cat['domains'] ) && $cookie_cat['domains'] ) : ?>
                <?php foreach ( $cookie_cat['domains'] as $domain_id => $domain ) : ?>
                  <div class="postbox">
                    <h2 class="hndle"><?php echo esc_attr( $domain_id ); ?><button class="notice-dismiss" type="button" aria-label="<?php esc_attr_e( 'Remove this domain.', 'gdpr' ) ?>"></button></h2>
                    <div class="inside">
                      <table class="form-table">
                        <tr>
                          <th>
                          	<label for="hosts-cookies-used-<?php echo esc_attr( $domain_id ); ?>">
                          		<?php esc_html_e( 'Cookies used', 'gdpr' ); ?>:
                          		<span class="screen-reader-text"><?php esc_attr_e( 'A comma separated list of cookies that your site is using from this third-party provider.', 'gdpr' ); ?></span>
                          		<span data-tooltip="<?php esc_attr_e( 'A comma separated list of cookies that your site is using from this third-party provider.', 'gdpr' ); ?>">
                          			<span class="dashicons dashicons-info"></span>
                          		</span>
                          	</label>
                        	</th>
                          <td>
                            <textarea cols="53" rows="3" name="gdpr_registered_cookies[<?php echo esc_attr( $cat_id ); ?>][domains][<?php echo esc_attr( $domain_id ); ?>][cookies_used]" id="hosts-cookies-used-<?php echo esc_attr( $domain_id ); ?>"><?php echo esc_attr( $domain['cookies_used'] ); ?></textarea>
                          </td>
                        </tr>
                        <tr>
                          <th>
                          	<label for="hosts-cookies-optout-<?php echo esc_attr( $domain_id ); ?>">
                          		<?php esc_html_e( 'Opt Out Link', 'gdpr' ); ?>:
                          		<span class="screen-reader-text"><?php esc_attr_e( 'Add a link with the third-party instructions on how to opt out of their cookies.', 'gdpr' ); ?></span>
                          		<span data-tooltip="<?php esc_attr_e( 'Add a link with the third-party instructions on how to opt out of their cookies.', 'gdpr' ); ?>">
                          			<span class="dashicons dashicons-info"></span>
                          		</span>
                          	</label>
                          </th>
                          <td>
                            <input type="text" name="gdpr_registered_cookies[<?php echo esc_attr( $cat_id ); ?>][domains][<?php echo esc_attr( $domain_id ); ?>][optout]" value="<?php echo esc_attr( $domain['optout'] ); ?>" id="hosts-cookies-optout-<?php echo esc_attr( $domain_id ); ?>" class="regular-text" />
                            <br>
                            <span class="description"><?php esc_html_e( 'Url with instructions on how to opt out.', 'gdpr' ); ?></span>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
					</div><!-- .inside -->
				</div><!-- .postbox -->
			<?php endforeach; ?>
		</div>

		<hr>
		<h2><?php esc_html_e( 'Consents', 'gdpr' ) ?></h2>
		<input type="text" id="type-of-consent" class="regular-text" placeholder="<?php esc_attr_e( 'Type of consent', 'gdpr' ); ?>">
		<button class="button button-primary add-consent"><?php esc_html_e( 'Add consent', 'gdpr' ); ?></button>
		<div id="consent-tabs">
			<?php if ( ! empty( $consent_types ) ) : ?>
				<?php foreach ( $consent_types as $consent_id => $consent ) : ?>
					<div class="postbox" id="consent-type-content-<?php echo esc_attr( $consent_id ); ?>">
						<h2 class="hndle"><?php echo esc_html( $consent['name'] ); ?> <span>(id: <?php echo esc_html( $consent_id ); ?>)</span><button class="notice-dismiss" type="button" aria-label="<?php esc_attr_e( 'Unregister this consent.', 'gdpr' ) ?>"></button></h2>
						<input type="hidden" name="gdpr_consent_types[<?php echo esc_attr( $consent_id ); ?>][name]" value="<?php echo esc_attr( $consent['name'] ); ?>">
						<div class="inside">
							<small class="gdpr-required"><?php esc_html_e( 'Required fields are marked with a *', 'gdpr' ); ?></small>
							<table class="form-table">
								<tr>
									<th>
										<label for="consent-policy-page-<?php echo esc_attr( $consent_id ); ?>">
											<?php esc_html_e( 'Policy Page', 'gdpr' ); ?>:
											<span class="screen-reader-text"><?php esc_attr_e( 'This page will be tracked for changes and you will be prompted to ask users to re-consent to the new policy. Selecting a page will make this consent required.', 'gdpr' ); ?></span>
											<span data-tooltip="<?php esc_attr_e( 'This page will be tracked for changes and you will be prompted to ask users to re-consent to the new policy. Selecting a page will make this consent required.', 'gdpr' ); ?>">
												<span class="dashicons dashicons-info"></span>
											</span>
										</label>
									</th>
									<td>
										<select name="gdpr_consent_types[<?php echo esc_attr( $consent_id ); ?>][policy-page]" id="consent-policy-page-<?php echo esc_attr( $consent_id ); ?>">
											<option value=""></option>
											<?php foreach ( $pages as $page ): ?>
												<option value="<?php echo esc_attr( $page->ID ) ?>" <?php selected( $consent['policy-page'], $page->ID ); ?>><?php echo esc_html( $page->post_title ); ?></option>
											<?php endforeach ?>
										</select>
									</td>
								</tr>
								<tr>
									<th>
										<label for="consent-description-<?php echo esc_attr( $consent_id ); ?>">
											<?php esc_html_e( 'Long description', 'gdpr' ); ?>:<span class="gdpr-required">*</span>
											<span class="screen-reader-text"><?php esc_attr_e( 'This will show up at the privacy preferences center, under the name of the consent.', 'gdpr' ); ?></span>
											<span data-tooltip="<?php esc_attr_e( 'This will show up at the privacy preferences center, under the name of the consent.', 'gdpr' ); ?>">
												<span class="dashicons dashicons-info"></span>
											</span>
										</label>
									</th>
									<td><textarea name="gdpr_consent_types[<?php echo esc_attr( $consent_id ); ?>][description]" id="consent-description-<?php echo esc_attr( $consent_id ); ?>" cols="53" rows="3" required><?php echo esc_html( $consent['description'] ); ?></textarea></td>
								</tr>
								<tr>
									<th>
										<label for="consent-registration-<?php echo esc_attr( $consent_id ); ?>">
											<?php esc_html_e( 'Short description', 'gdpr' ); ?>:<span class="gdpr-required">*</span>
											<span class="screen-reader-text"><?php esc_attr_e( 'This will show up at registration forms next to checkboxes.', 'gdpr' ); ?></span>
											<span data-tooltip="<?php esc_attr_e( 'This will show up at registration forms next to checkboxes.', 'gdpr' ); ?>">
												<span class="dashicons dashicons-info"></span>
											</span>
										</label>
									</th>
									<td><textarea name="gdpr_consent_types[<?php echo esc_attr( $consent_id ); ?>][registration]" id="consent-registration-<?php echo esc_attr( $consent_id ); ?>" cols="53" rows="3" required><?php echo esc_html( $consent['registration'] ); ?></textarea></td>
								</tr>
							</table>
						</div><!-- .inside -->
					</div><!-- .postbox -->
				<?php endforeach ?>
			<?php endif ?>
		</div>
		<?php
		do_action( 'gdpr_extra_settings' );
		submit_button();
		?>
	</form>

<!-- #poststuff -->
</div>
