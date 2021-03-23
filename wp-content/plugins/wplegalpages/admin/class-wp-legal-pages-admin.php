<?php
/**
 * The Admin-specific functionality of the WP Legal Pages.
 *
 * @link       http://wplegalpages.com/
 * @since      1.5.2
 *
 * @package    WP_Legal_Pages
 * @subpackage WP_Legal_Pages/admin
 */

/**
 * The admin-specific functionality of the WP Legal Pages.
 *
 * Defines the WP Legal Pages name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WP_Legal_Pages
 * @subpackage WP_Legal_Pages/includes
 * @author     WPEka <support@wplegalpages.com>
 */
if ( ! class_exists( 'WP_Legal_Pages_Admin' ) ) {
	/**
	 * The admin-specific functionality of the WP Legal Pages.
	 *
	 * Defines the WP Legal Pages name, version, and two examples hooks for how to
	 * enqueue the admin-specific stylesheet and JavaScript.
	 *
	 * @package    WP_Legal_Pages
	 * @subpackage WP_Legal_Pages/includes
	 * @author     WPEka <support@wplegalpages.com>
	 */
	class WP_Legal_Pages_Admin {
		/**
		 * The ID of this WP Legal Pages.
		 *
		 * @since    1.0.0
		 * @access   private
		 * @var      string    $WP Legal Pages_name    The ID of this WP Legal Pages.
		 */
		private $plugin_name;

		/**
		 * The version of this WP Legal Pages.
		 *
		 * @since    1.0.0
		 * @access   private
		 * @var      string    $version    The current version of this WP Legal Pages.
		 */
		private $version;

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since    1.0.0
		 * @param      string $plugin_name The name of this WP Legal Pages.
		 * @param      string $version    The version of this WP Legal Pages.
		 */
		public function __construct( $plugin_name, $version ) {
			$this->plugin_name = $plugin_name;
			$this->version     = $version;
		}

		/**
		 * Register the stylesheets for the admin area.
		 *
		 * @since    1.0.0
		 */
		public function enqueue_styles() {
			wp_register_style( $this->plugin_name . '-admin', plugin_dir_url( __FILE__ ) . 'css/wp-legal-pages-admin' . WPLPP_SUFFIX . '.css', array(), $this->version, 'all' );
			wp_register_style( $this->plugin_name . '-bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );
			wp_register_style( $this->plugin_name . '-vue-style', plugin_dir_url( __FILE__ ) . 'css/vue/vue-getting-started' . WPLPP_SUFFIX . '.css', array(), $this->version, 'all' );
		}

		/**
		 * Register the JavaScript for the admin area.
		 *
		 * @since    1.0.0
		 */
		public function enqueue_scripts() {
			/**
			 * This function is provided for demonstration purposes only.
			 *
			 * An instance of this class should be passed to the run() function
			 * defined in Plugin_Name_Loader as all of the hooks are defined
			 * in that particular class.
			 *
			 * The Plugin_Name_Loader will then create the relationship
			 * between the defined hooks and the functions defined in this
			 * class.
			 */
			wp_register_script( $this->plugin_name . '-tooltip', plugin_dir_url( __FILE__ ) . 'js/tooltip' . WPLPP_SUFFIX . '.js', array(), $this->version, true );
			wp_register_script( $this->plugin_name . '-vue', plugin_dir_url( __FILE__ ) . 'js/vue/vue.js', array(), $this->version, true );
			wp_register_script( $this->plugin_name . '-vue-js', plugin_dir_url( __FILE__ ) . 'js/vue/vue-getting-started.js', array( 'jquery' ), $this->version, true );
		}

		/**
		 * This function is provided for WordPress dashbord menus.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in WP_Legal_Pages_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The WP_Legal_Pages_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		public function admin_menu() {
			$terms = get_option( 'lp_accept_terms' );
			if ( '1' === $terms ) {
				add_menu_page( __( 'Legal Pages', 'wplegalpages' ), 'Legal Pages', 'manage_options', 'legal-pages', array( $this, 'admin_setting' ), 'dashicons-media-default', 66 );
			} else {
				add_menu_page( __( 'Legal Pages', 'wplegalpages' ), 'Legal Pages', 'manage_options', 'getting-started', array( $this, 'vue_getting_started' ), 'dashicons-media-default', 66 );
			}
			if ( '1' === $terms ) {
				add_submenu_page( 'legal-pages', __( 'Settings', 'wplegalpages' ), __( 'Settings', 'wplegalpages' ), 'manage_options', 'legal-pages', array( $this, 'admin_setting' ) );
				add_submenu_page( 'legal-pages', __( 'Legal Pages', 'wplegalpages' ), __( 'Legal Pages', 'wplegalpages' ), 'manage_options', 'lp-show-pages', array( $this, 'show_pages' ) );
				add_submenu_page( 'legal-pages', __( 'Create Page', 'wplegalpages' ), __( 'Create Page', 'wplegalpages' ), 'manage_options', 'lp-create-page', array( $this, 'create_page' ) );
				add_submenu_page( 'legal-pages', __( 'Cookie Bar', 'wplegalpages' ), __( 'Cookie Bar', 'wplegalpages' ), 'manage_options', 'lp-eu-cookies', array( $this, 'update_eu_cookies' ) );
				do_action( 'wplegalpages_admin_menu' );
				add_submenu_page( 'legal-pages', __( 'Getting Started', 'wplegalpages' ), __( 'Getting Started', 'wplegalpages' ), 'manage_options', 'getting-started', array( $this, 'vue_getting_started' ) );
			}

		}

		/**
		 * Admin init for database update.
		 *
		 * @since 2.3.5
		 */
		public function wplegal_admin_init() {
			$lp_templates_updated = get_option( '_lp_templates_updated' );
			if ( '1' !== $lp_templates_updated ) {
				global $wpdb;
				require_once ABSPATH . 'wp-admin/includes/upgrade.php';
				if ( is_multisite() ) {
					// Get all blogs in the network and activate plugin on each one.
					$blog_ids = $wpdb->get_col( 'SELECT blog_id FROM ' . $wpdb->blogs ); // db call ok; no-cache ok.
					foreach ( $blog_ids as $blog_id ) {
						switch_to_blog( $blog_id );
						$this->wplegal_admin_init_install_db();
						restore_current_blog();
					}
				} else {
					$this->wplegal_admin_init_install_db();
				}
			}
		}

		/**
		 * Returns plugin action links.
		 *
		 * @param array $links Plugin action links.
		 * @return array
		 */
		public function wplegal_plugin_action_links( $links ) {
			$lp_pro_installed = get_option( '_lp_pro_installed' );
			if ( '1' !== $lp_pro_installed ) {
				$links = array_merge(
					array(
						'<a href="' . esc_url( 'https://club.wpeka.com/product/wplegalpages/?utm_source=plugins&utm_campaign=wplegalpages&utm_content=upgrade-to-pro' ) . '" target="_blank" rel="noopener noreferrer"><strong style="color: #11967A; display: inline;">' . __( 'Upgrade to Pro', 'wplegalpages' ) . '</strong></a>',
					),
					$links
				);
			}
			return $links;
		}

		/**
		 * Update templates on admin init.
		 */
		public function wplegal_admin_init_install_db() {
			delete_option( '_lp_db_updated' );
			delete_option( '_lp_terms_updated' );
			delete_option( '_lp_terms_fr_de_updated' );
			global $wpdb;
			$legal_pages = new WP_Legal_Pages();
			require_once ABSPATH . 'wp-admin/includes/upgrade.php';

			$privacy      = file_get_contents( plugin_dir_path( dirname( __FILE__ ) ) . 'templates/privacy.html' );
			$dmca         = file_get_contents( plugin_dir_path( dirname( __FILE__ ) ) . 'templates/dmca.html' );
			$terms_latest = file_get_contents( plugin_dir_path( dirname( __FILE__ ) ) . 'templates/Terms-of-use.html' );
			$ccpa         = file_get_contents( plugin_dir_path( dirname( __FILE__ ) ) . 'templates/CCPA.html' );
			$terms_fr     = file_get_contents( plugin_dir_path( dirname( __FILE__ ) ) . 'templates/Terms-of-use-fr.html' );
			$terms_de     = file_get_contents( plugin_dir_path( dirname( __FILE__ ) ) . 'templates/Terms-of-use-de.html' );

			$privacy_policy_count = $wpdb->get_var( $wpdb->prepare( 'SELECT COUNT(*) FROM ' . $legal_pages->tablename . ' WHERE title=%s', array( 'Privacy Policy' ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared,WordPress.DB.DirectDatabaseQuery,WordPress.DB.DirectDatabaseQuery.NoCaching
			if ( '0' === $privacy_policy_count ) {
				$wpdb->insert(
					$legal_pages->tablename,
					array(
						'title'      => 'Privacy Policy',
						'content'    => $privacy,
						'contentfor' => 'kCjTeYOZxB',
						'is_active'  => '1',
					),
					array( '%s', '%s', '%s', '%d' )
				); // db call ok; no-cache ok.
			} else {
				$wpdb->update(
					$legal_pages->tablename,
					array(
						'is_active'  => '1',
						'content'    => $privacy,
						'contentfor' => 'kCjTeYOZxB',
					),
					array( 'title' => 'Privacy Policy' ),
					array( '%d', '%s', '%s' ),
					array( '%s' )
				); // db call ok; no-cache ok.
			}
			$dmca_count = $wpdb->get_var( $wpdb->prepare( 'SELECT COUNT(*) FROM ' . $legal_pages->tablename . ' WHERE title=%s', array( 'DMCA' ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared,WordPress.DB.DirectDatabaseQuery,WordPress.DB.DirectDatabaseQuery.NoCaching
			if ( '0' === $dmca_count ) {
				$wpdb->insert(
					$legal_pages->tablename,
					array(
						'title'      => 'DMCA',
						'content'    => $dmca,
						'contentfor' => '1r4X6y8tssz0j',
						'is_active'  => '1',
					),
					array( '%s', '%s', '%s', '%d' )
				); // db call ok; no-cache ok.
			} else {
				$wpdb->update(
					$legal_pages->tablename,
					array(
						'is_active'  => '1',
						'content'    => $dmca,
						'contentfor' => 'r4X6y8tssz',
					),
					array( 'title' => 'DMCA' ),
					array( '%d', '%s', '%s' ),
					array( '%s' )
				); // db call ok; no-cache ok.
			}
			$terms_of_use_count = $wpdb->get_var( $wpdb->prepare( 'SELECT COUNT(*) FROM ' . $legal_pages->tablename . ' WHERE title=%s', array( 'Terms of Use' ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared,WordPress.DB.DirectDatabaseQuery,WordPress.DB.DirectDatabaseQuery.NoCaching
			if ( '0' === $terms_of_use_count ) {
				$wpdb->insert( // phpcs:ignore WordPress.DB.DirectDatabaseQuery
					$legal_pages->tablename,
					array(
						'title'      => 'Terms of Use',
						'content'    => $terms_latest,
						'contentfor' => 'n1bmPjZ6Xj',
						'is_active'  => '1',
					),
					array( '%s', '%s', '%s', '%d' )
				);
			} else {
				$wpdb->update(
					$legal_pages->tablename,
					array(
						'is_active'  => '1',
						'content'    => $terms_latest,
						'contentfor' => 'n1bmPjZ6Xj',
					),
					array( 'title' => 'Terms of Use' ),
					array( '%d', '%s', '%s' ),
					array( '%s' )
				); // db call ok; no-cache ok.
			}
			$terms_of_use_fr_count = $wpdb->get_var( $wpdb->prepare( 'SELECT COUNT(*) FROM ' . $legal_pages->tablename . ' WHERE title=%s', array( 'Terms of Use - FR' ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared,WordPress.DB.DirectDatabaseQuery,WordPress.DB.DirectDatabaseQuery.NoCaching
			if ( '0' === $terms_of_use_fr_count ) {
				$wpdb->insert( // phpcs:ignore WordPress.DB.DirectDatabaseQuery
					$legal_pages->tablename,
					array(
						'title'      => 'Terms of Use - FR',
						'content'    => $terms_fr,
						'contentfor' => 'MMFqUJfC3m',
						'is_active'  => '1',
					),
					array( '%s', '%s', '%s', '%d' )
				);
			} else {
				$wpdb->update(
					$legal_pages->tablename,
					array(
						'is_active'  => '1',
						'content'    => $terms_fr,
						'contentfor' => 'MMFqUJfC3m',
					),
					array( 'title' => 'Terms of Use - FR' ),
					array( '%d', '%s', '%s' ),
					array( '%s' )
				); // db call ok; no-cache ok.
			}
			$terms_of_use_de_count = $wpdb->get_var( $wpdb->prepare( 'SELECT COUNT(*) FROM ' . $legal_pages->tablename . ' WHERE title=%s', array( 'Terms of Use - DE' ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared,WordPress.DB.DirectDatabaseQuery,WordPress.DB.DirectDatabaseQuery.NoCaching
			if ( '0' === $terms_of_use_de_count ) {
				$wpdb->insert( // phpcs:ignore WordPress.DB.DirectDatabaseQuery
					$legal_pages->tablename,
					array(
						'title'      => 'Terms of Use - DE',
						'content'    => $terms_de,
						'contentfor' => 'fbBlC5Y4yZ',
						'is_active'  => '1',
					),
					array( '%s', '%s', '%s', '%d' )
				);
			} else {
				$wpdb->update(
					$legal_pages->tablename,
					array(
						'is_active'  => '1',
						'content'    => $terms_de,
						'contentfor' => 'fbBlC5Y4yZ',
					),
					array( 'title' => 'Terms of Use - DE' ),
					array( '%d', '%s' ),
					array( '%s' )
				); // db call ok; no-cache ok.
			}
			$ccpa_count = $wpdb->get_var( $wpdb->prepare( 'SELECT COUNT(*) FROM ' . $legal_pages->tablename . ' WHERE title=%s', array( 'CCPA - California Consumer Privacy Act' ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared,WordPress.DB.DirectDatabaseQuery,WordPress.DB.DirectDatabaseQuery.NoCaching
			if ( '0' === $ccpa_count ) {
				$wpdb->insert( // phpcs:ignore WordPress.DB.DirectDatabaseQuery
					$legal_pages->tablename,
					array(
						'title'      => 'CCPA - California Consumer Privacy Act',
						'content'    => $ccpa,
						'contentfor' => 'JRevVk8nkP',
						'is_active'  => '1',
					),
					array( '%s', '%s', '%s', '%d' )
				);
			} else {
				$wpdb->update(
					$legal_pages->tablename,
					array(
						'is_active'  => '1',
						'content'    => $ccpa,
						'contentfor' => 'JRevVk8nkP',
					),
					array( 'title' => 'CCPA - California Consumer Privacy Act' ),
					array( '%d', '%s', '%s' ),
					array( '%s' )
				); // db call ok; no-cache ok.
			}
			update_option( '_lp_templates_updated', true );
		}

		/**
		 * Enqueue admin common style and scripts.
		 */
		public function enqueue_common_style_scripts() {
			wp_enqueue_style( $this->plugin_name . '-admin' );
			wp_enqueue_style( $this->plugin_name . '-bootstrap' );
			wp_enqueue_script( $this->plugin_name . '-tooltip' );
		}

		/**
		 * This Callback function for Admin Setting menu for WP Legal pages.
		 */
		public function admin_setting() {
			$this->enqueue_common_style_scripts();
			include_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin-settings.php';
		}


		/**
		 * This Callback function for Create Page menu for WP Legal pages.
		 */
		public function create_page() {
			$activated = apply_filters( 'wplegal_check_license_status', true );
			if ( $activated ) {
				$this->enqueue_common_style_scripts();
				include_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/create-page.php';
			}
		}

		/**
		 * This Callback function for Show Page menu for WP Legal pages.
		 */
		public function show_pages() {
			$activated = apply_filters( 'wplegal_check_license_status', true );
			if ( $activated ) {
				$this->enqueue_common_style_scripts();
				include_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/show-pages.php';
			}
		}

		/**
		 * This Callback function for Getting Started menu for WP Legal pages.
		 */
		public function getting_started() {
			wp_enqueue_style( $this->plugin_name . '-admin' );
			wp_enqueue_script( $this->plugin_name . '-tooltip' );
			include_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/getting-started.php';
		}

		/**
		 * This Callback function for Getting Started menu for WP Legal pages.
		 */
		public function vue_getting_started() {
			$is_pro = get_option( '_lp_pro_active' );
			if ( $is_pro ) {
				$support_url = 'https://club.wpeka.com/my-account/orders/?utm_source=wplegalpages&utm_medium=help-mascot&utm_campaign=link&utm_content=support';
			} else {
				$support_url = 'https://wordpress.org/support/plugin/wplegalpages/?utm_source=wplegalpages&utm_medium=help-mascot&utm_campaign=link&utm_content=forums';
			}
			wp_enqueue_style( $this->plugin_name . '-vue-style' );
			wp_enqueue_script( $this->plugin_name . '-vue' );
			wp_enqueue_script( $this->plugin_name . '-vue-js' );

			wp_localize_script(
				$this->plugin_name . '-vue-js',
				'obj',
				array(
					'menu_items'          => array(
						'support_text'       => __( 'Support', 'wplegalpages' ),
						'support_url'        => $support_url,
						'documentation_text' => __( 'Documentation', 'wplegalpages' ),
						'documentation_url'  => 'https://docs.wpeka.com/wp-legal-pages/?utm_source=wplegalpages&utm_medium=help-mascot&utm_campaign=link&utm_content=documentation',
						'faq_text'           => __( 'FAQ', 'wplegalpages' ),
						'faq_url'            => 'https://docs.wpeka.com/wp-legal-pages/faq/?utm_source=wplegalpages&utm_medium=help-mascot&utm_campaign=link&utm_content=faq',
						'upgrade_text'       => __( 'Upgrade to Pro &raquo;', 'wplegalpages' ),
						'upgrade_url'        => 'https://club.wpeka.com/product/wplegalpages/?utm_source=wplegalpages&utm_medium=help-mascot&utm_campaign=link&utm_content=upgrade-to-pro',
					),
					'ajax_url'            => admin_url( 'admin-ajax.php' ),
					'ajax_nonce'          => wp_create_nonce( 'admin-ajax-nonce' ),
					'is_pro'              => $is_pro,
					'video_url'           => 'https://www.youtube-nocookie.com/embed/iqdLl9qsBHc',
					'image_url'           => WPL_LITE_PLUGIN_URL . 'admin/js/vue/images/',
					'welcome_text'        => __( 'Welcome to WP Legal Pages!', 'wplegalpages' ),
					'welcome_subtext'     => __( 'Simple one-click legal page management plugin.', 'wplegalpages' ),
					'welcome_description' => __( 'Thank you for choosing WP Legal Pages plugin - the most powerful legal page management plugin.', 'wplegalpages' ),
					'quick_links_text'    => __( 'See Quick Links', 'wplegalpages' ),
					'features'            => array(
						'heading'           => __( 'WP Legal Pages Features', 'wplegalpages' ),
						'subheading'        => __( 'Why choose WP Legal Pages?', 'wplegalpages' ),
						'powerful_text'     => __( 'Powerful yet simple', 'wplegalpages' ),
						'powerful_desc'     => __( 'Add 25+ legal policy pages to your WordPress website in less than 5 minutes.', 'wplegalpages' ),
						'prebuilt_text'     => __( 'Pre-built templates', 'wplegalpages' ),
						'prebuilt_desc'     => __( 'Choose from 25+ lawyer approved, legal policy pages from GDPR policies to affiliate disclosures.', 'wplegalpages' ),
						'editable_text'     => __( 'Editable templates', 'wplegalpages' ),
						'editable_desc'     => __( 'Edit or create your own legal policy templates using the WYSIWYG WordPress editor.', 'wplegalpages' ),
						'gdpr_text'         => __( 'GDPR compliance', 'wplegalpages' ),
						'gdpr_desc'         => __( 'Easy to use shortcodes to display business information in legal policy pages.', 'wplegalpages' ),
						'forced_text'       => __( 'Forced consent', 'wplegalpages' ),
						'forced_desc'       => __( 'Force website visitors to agree to your Terms, Privacy Policy, etc using post / page lock down features.', 'wplegalpages' ),
						'easy_text'         => __( 'Easy shortcodes', 'wplegalpages' ),
						'easy_desc'         => __( 'Easy to use shortcodes to display business information in legal policy pages.', 'wplegalpages' ),
						'install_text'      => __( 'Easy to install', 'wplegalpages' ),
						'install_desc'      => __( 'WP Legal Pages is super-easy to install. Download & install takes less than 2 minutes.', 'wplegalpages' ),
						'helpful_text'      => __( 'Helpful docs & guides', 'wplegalpages' ),
						'helpful_desc'      => __( 'Even if you get stuck using WP Legal Pages, you can use our easy to follow docs & guides.', 'wplegalpages' ),
						'multilingual_text' => __( 'Multilingual support', 'wplegalpages' ),
						'multilingual_desc' => __( 'Supports multi-language translations for English, French, Spanish, German, Italian, Portuguese.', 'wplegalpages' ),
					),
					'configure'           => array(
						'text'        => __( 'WP Legal Pages generates personalized legal pages for your website. To do this it needs to know a few details about your website. Please take a couple of minutes to set up your business details before you can generate a policy page for this website.', 'wplegalpages' ),
						'button_text' => __( 'Configure Details', 'wplegalpages' ),
						'url'         => menu_page_url( 'legal-pages', false ),
					),
					'create'              => array(
						'text'        => __( 'Generate a personalized legal policy page your website.', 'wplegalpages' ),
						'button_text' => __( 'Create Page', 'wplegalpages' ),
						'url'         => menu_page_url( 'lp-create-page', false ),
					),
					'wizard'              => array(
						'text'        => __( 'Use our newly created wizard to create legal pages for your website.', 'wplegalpages' ),
						'subtext'     => __( '(with just a few clicks)', 'wplegalpages' ),
						'button_text' => __( 'Launch Wizard', 'wplegalpages' ),
						'url'         => menu_page_url( 'wplegal-wizard', false ),
					),
					'terms'               => array(
						'text'        => sprintf(
							/* translators: %s: Terms of use link */
							esc_html__( 'WP Legal Pages is a privacy policy and terms & conditions generator for WordPress. With just a few clicks you can generate %s for your WordPress website.', 'wplegalpages' ),
							sprintf(
								/* translators: %s: Terms of use link, %s Text */
								'<a href="%s" target="_blank">%s</a>',
								esc_url( 'https://club.wpeka.com/product/wplegalpages/?utm_source=wplegalpages&utm_medium=getting-started&utm_campaign=link&utm_content=25-policy-pages#wplegalpages-policy-templates' ),
								__( '25+ policy pages', 'wplegalpages' )
							)
						),
						'subtext'     => __( 'These policy pages are vetted by experts and are constantly updated to keep up with the latest regulations such as GDPR, CCPA, CalOPPA and many others.', 'wplegalpages' ),
						'button_text' => __( 'Accept', 'wplegalpages' ),
						'input_text'  => sprintf(
							/* translators: %s: Terms of use link, %s Text */
							esc_html__( 'By using WP Legal Pages, you accept the %s.', 'wplegalpages' ),
							sprintf(
								/* translators: %s: Terms of use link */
								'<a href="%s" target="_blank">%s</a>',
								esc_url( 'https://wplegalpages.com/product-terms-of-use/?utm_source=wplegalpages&utm_medium=getting-started&utm_campaign=link&utm_content=terms-of-use' ),
								__( 'terms of use', 'wplegalpages' )
							)
						),
					),
				)
			);
			?>
			<div id="gettingstartedapp"></div>
			<div id="wplegal-mascot-app"></div>
			<?php
		}

		/**
		 * This Callback function for EU_Cookies Page menu for WP Legal pages.
		 */
		public function update_eu_cookies() {
			$activated = apply_filters( 'wplegal_check_license_status', true );
			if ( $activated ) {
				$this->enqueue_common_style_scripts();
				include_once 'update-eu-cookies.php';
			}
		}

		/**
		 * Accpet terms.
		 */
		public function wplegal_accept_terms() {
			// Check nonce.
			check_admin_referer( 'lp-accept-terms' );
			update_option( 'lp_accept_terms', '1' );
			add_submenu_page( 'legal-pages', __( 'Getting Started', 'wplegalpages' ), __( 'Getting Started', 'wplegalpages' ), 'manage_options', 'getting-started', array( $this, 'vue_getting_started' ) );
			wp_send_json_success( array( 'terms_accepted' => true ) );
		}

		/**
		 * Returns whether terms accepts or not.
		 */
		public function wplegal_get_accept_terms() {
			$result = array(
				'success' => false,
				'data'    => false,
			);
			if ( isset( $_GET['action'] ) ) {
				$nonce = isset( $_GET['nonce'] ) ? sanitize_text_field( wp_unslash( $_GET['nonce'] ) ) : '';
				if ( wp_verify_nonce( $nonce, 'admin-ajax-nonce' ) ) {
					$result['success'] = true;
					$result['data']    = get_option( 'lp_accept_terms' );
				}
			}
			return wp_send_json( $result );
		}

		/**
		 * Accept terms.
		 */
		public function wplegal_save_accept_terms() {
			$result = array(
				'success' => false,
				'data'    => false,
			);
			if ( isset( $_POST['action'] ) ) {
				$nonce = isset( $_POST['nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['nonce'] ) ) : '';
				if ( wp_verify_nonce( $nonce, 'admin-ajax-nonce' ) ) {
					if ( isset( $_POST['data']['lp_accept_terms'] ) ) {
						$lp_accept_terms = sanitize_text_field( wp_unslash( $_POST['data']['lp_accept_terms'] ) );
						update_option( 'lp_accept_terms', $lp_accept_terms );
						add_submenu_page( 'legal-pages', __( 'Getting Started', 'wplegalpages' ), __( 'Getting Started', 'wplegalpages' ), 'manage_options', 'getting-started', array( $this, 'vue_getting_started' ) );
						$result['success'] = true;
						$result['data']    = get_option( 'lp_accept_terms' );
					}
				}
			}
			return wp_send_json( $result );
		}

		/**
		 * Add menu object to the theme menu screen.
		 *
		 * @param Object $object Menu object.
		 * @return mixed
		 */
		public function wplegalpages_add_menu_meta_box( $object ) {
			add_meta_box( 'wplegalpages-menu-metabox', __( 'WP Legal Pages', 'wplegalpages' ), array( $this, 'wplegalpages_menu_meta_box' ), 'nav-menus', 'side', 'low' );
			return $object;
		}

		/**
		 * WP Legal Pages Menu items on theme menu screen.
		 */
		public function wplegalpages_menu_meta_box() {

			global $_nav_menu_placeholder, $nav_menu_selected_id;

			$post_type_name = 'wplegalpages';
			$post_type      = 'page';
			$tab_name       = $post_type_name . '-tab';

			// Paginate browsing for large numbers of post objects.
			$per_page = 50;
			$pagenum  = isset( $_REQUEST[ $tab_name ] ) && isset( $_REQUEST['paged'] ) ? absint( $_REQUEST['paged'] ) : 1; // phpcs:ignore input var ok, CSRF ok, sanitization ok.
			$offset   = 0 < $pagenum ? $per_page * ( $pagenum - 1 ) : 0;

			$args = array(
				'offset'                 => $offset,
				'order'                  => 'ASC',
				'orderby'                => 'title',
				'posts_per_page'         => $per_page,
				'post_type'              => $post_type,
				'suppress_filters'       => true,
				'update_post_term_cache' => false,
				'update_post_meta_cache' => false,
				'post_status'            => 'publish',
				'meta_key'               => 'is_legal', // phpcs:ignore slow query
				'meta_value'             => 'yes', // phpcs:ignore slow query
			);

			/*
			 * If we're dealing with pages, let's prioritize the Front Page,
			 * Posts Page and Privacy Policy Page at the top of the list.
			 */
			$important_pages = array();
			if ( 'page' === $post_type_name ) {
				$suppress_page_ids = array();

				// Insert Front Page or custom Home link.
				$front_page = 'page' === get_option( 'show_on_front' ) ? (int) get_option( 'page_on_front' ) : 0;

				$front_page_obj = null;
				if ( ! empty( $front_page ) ) {
					$front_page_obj                = get_post( $front_page );
					$front_page_obj->front_or_home = true;

					$important_pages[]   = $front_page_obj;
					$suppress_page_ids[] = $front_page_obj->ID;
				} else {
					$_nav_menu_placeholder = ( 0 > $_nav_menu_placeholder ) ? (int) $_nav_menu_placeholder - 1 : -1;
					$front_page_obj        = (object) array(
						'front_or_home' => true,
						'ID'            => 0,
						'object_id'     => $_nav_menu_placeholder,
						'post_content'  => '',
						'post_excerpt'  => '',
						'post_parent'   => '',
						'post_title'    => _x( 'Home', 'nav menu home label' ),
						'post_type'     => 'nav_menu_item',
						'type'          => 'custom',
						'url'           => home_url( '/' ),
					);

					$important_pages[] = $front_page_obj;
				}

				// Insert Posts Page.
				$posts_page = 'page' === get_option( 'show_on_front' ) ? (int) get_option( 'page_for_posts' ) : 0;

				if ( ! empty( $posts_page ) ) {
					$posts_page_obj             = get_post( $posts_page );
					$posts_page_obj->posts_page = true;

					$important_pages[]   = $posts_page_obj;
					$suppress_page_ids[] = $posts_page_obj->ID;
				}

				// Insert Privacy Policy Page.
				$privacy_policy_page_id = (int) get_option( 'wp_page_for_privacy_policy' );

				if ( ! empty( $privacy_policy_page_id ) ) {
					$privacy_policy_page = get_post( $privacy_policy_page_id );
					if ( $privacy_policy_page instanceof WP_Post && 'publish' === $privacy_policy_page->post_status ) {
						$privacy_policy_page->privacy_policy_page = true;

						$important_pages[]   = $privacy_policy_page;
						$suppress_page_ids[] = $privacy_policy_page->ID;
					}
				}

				// Add suppression array to arguments for WP_Query.
				if ( ! empty( $suppress_page_ids ) ) {
					$args['post__not_in'] = $suppress_page_ids;
				}
			}

			// @todo Transient caching of these results with proper invalidation on updating of a post of this type.
			$get_posts = new WP_Query();
			$posts     = $get_posts->query( $args );

			// Only suppress and insert when more than just suppression pages available.
			if ( ! $get_posts->post_count ) {
				if ( ! empty( $suppress_page_ids ) ) {
					unset( $args['post__not_in'] );
					$get_posts = new WP_Query();
					$posts     = $get_posts->query( $args );
				} else {
					echo '<p>' . esc_attr_e( 'No items.', 'wplegalpages' ) . '</p>';
					return;
				}
			} elseif ( ! empty( $important_pages ) ) {
				$posts = array_merge( $important_pages, $posts );
			}

			$num_pages = $get_posts->max_num_pages;

			$page_links = paginate_links(
				array(
					'base'               => add_query_arg(
						array(
							$tab_name     => 'all',
							'paged'       => '%#%',
							'item-type'   => 'post_type',
							'item-object' => $post_type_name,
						)
					),
					'format'             => '',
					'prev_text'          => '<span aria-label="' . esc_attr__( 'Previous page', 'wplegalpages' ) . '">' . __( '&laquo;', 'wplegalpages' ) . '</span>',
					'next_text'          => '<span aria-label="' . esc_attr__( 'Next page', 'wplegalpages' ) . '">' . __( '&raquo;', 'wplegalpages' ) . '</span>',
					'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'wplegalpages' ) . '</span> ',
					'total'              => $num_pages,
					'current'            => $pagenum,
				)
			);

			$db_fields = false;
			if ( is_post_type_hierarchical( $post_type_name ) ) {
				$db_fields = array(
					'parent' => 'post_parent',
					'id'     => 'ID',
				);
			}

			$walker = new Walker_Nav_Menu_Checklist( $db_fields );

			$current_tab = 'most-recent';

			if ( isset( $_REQUEST[ $tab_name ] ) && in_array( $_REQUEST[ $tab_name ], array( 'all', 'search' ), true ) ) {
				$current_tab = $_REQUEST[ $tab_name ]; // phpcs:ignore input var ok, CSRF ok, sanitization ok.
			}

			if ( ! empty( $_REQUEST[ 'quick-search-posttype-' . $post_type_name ] ) ) { // phpcs:ignore CSRF ok
				$current_tab = 'search';
			}

			$removed_args = array(
				'action',
				'customlink-tab',
				'edit-menu-item',
				'menu-item',
				'page-tab',
				'_wpnonce',
			);

			$most_recent_url = '';
			$view_all_url    = '';
			$search_url      = '';
			if ( $nav_menu_selected_id ) {
				$most_recent_url = esc_url( add_query_arg( $tab_name, 'most-recent', remove_query_arg( $removed_args ) ) );
				$view_all_url    = esc_url( add_query_arg( $tab_name, 'all', remove_query_arg( $removed_args ) ) );
				$search_url      = esc_url( add_query_arg( $tab_name, 'search', remove_query_arg( $removed_args ) ) );
			}
			?>
			<div id="posttype-<?php echo esc_attr( $post_type_name ); ?>" class="posttypediv">
				<ul id="posttype-<?php echo esc_attr( $post_type_name ); ?>-tabs" class="posttype-tabs add-menu-item-tabs">
					<li <?php echo ( 'most-recent' === $current_tab ? ' class="tabs"' : '' ); ?>>
						<a class="nav-tab-link" data-type="tabs-panel-posttype-<?php echo esc_attr( $post_type_name ); ?>-most-recent" href="<?php echo esc_url( $most_recent_url ); ?>#tabs-panel-posttype-<?php echo esc_attr( $post_type_name ); ?>-most-recent">
							<?php esc_attr_e( 'Most Recent', 'wplegalpages' ); ?>
						</a>
					</li>
					<li <?php echo ( 'all' === $current_tab ? ' class="tabs"' : '' ); ?>>
						<a class="nav-tab-link" data-type="<?php echo esc_attr( $post_type_name ); ?>-all" href="<?php echo esc_url( $view_all_url ); ?>#<?php echo esc_attr( $post_type_name ); ?>-all">
							<?php esc_attr_e( 'View All', 'wplegalpages' ); ?>
						</a>
					</li>
					<li <?php echo ( 'search' === $current_tab ? ' class="tabs"' : '' ); ?>>
						<a class="nav-tab-link" data-type="tabs-panel-posttype-<?php echo esc_attr( $post_type_name ); ?>-search" href="<?php echo esc_url( $search_url ); ?>#tabs-panel-posttype-<?php echo esc_attr( $post_type_name ); ?>-search">
							<?php esc_attr_e( 'Search', 'wplegalpages' ); ?>
						</a>
					</li>
				</ul><!-- .posttype-tabs -->

				<div id="tabs-panel-posttype-<?php echo esc_attr( $post_type_name ); ?>-most-recent" class="tabs-panel <?php echo ( 'most-recent' === $current_tab ? 'tabs-panel-active' : 'tabs-panel-inactive' ); ?>" role="region" aria-label="<?php esc_attr_e( 'Most Recent', 'wplegalpages' ); ?>" tabindex="0">
					<ul id="<?php echo esc_attr( $post_type_name ); ?>checklist-most-recent" class="categorychecklist form-no-clear">
						<?php
						$recent_args    = array_merge(
							$args,
							array(
								'orderby'        => 'post_date',
								'order'          => 'DESC',
								'posts_per_page' => 15,
							)
						);
						$most_recent    = $get_posts->query( $recent_args );
						$args['walker'] = $walker;

						/**
						 * Filters the posts displayed in the 'Most Recent' tab of the current
						 * post type's menu items meta box.
						 *
						 * The dynamic portion of the hook name, `$post_type_name`, refers to the post type name.
						 *
						 * @since 4.3.0
						 * @since 4.9.0 Added the `$recent_args` parameter.
						 *
						 * @param WP_Post[] $most_recent An array of post objects being listed.
						 * @param array     $args        An array of `WP_Query` arguments for the meta box.
						 * @param array     $box         Arguments passed to `wp_nav_menu_item_post_type_meta_box()`.
						 * @param array     $recent_args An array of `WP_Query` arguments for 'Most Recent' tab.
						 */
						$most_recent = apply_filters( "nav_menu_items_{$post_type_name}_recent", $most_recent, $args, array(), $recent_args );

						echo walk_nav_menu_tree( array_map( 'wp_setup_nav_menu_item', $most_recent ), 0, (object) $args );
						?>
					</ul>
				</div><!-- /.tabs-panel -->

				<div class="tabs-panel <?php echo ( 'search' === $current_tab ? 'tabs-panel-active' : 'tabs-panel-inactive' ); ?>" id="tabs-panel-posttype-<?php echo esc_attr( $post_type_name ); ?>-search" role="region" aria-label="<?php echo esc_attr( $post_type_name ); ?>" tabindex="0">
					<?php
					if ( isset( $_REQUEST[ 'quick-search-posttype-' . $post_type_name ] ) ) {
						$searched       = esc_attr( $_REQUEST[ 'quick-search-posttype-' . $post_type_name ] ); // phpcs:ignore input var ok, CSRF ok, sanitization ok.
						$search_results = get_posts(
							array(
								's'         => $searched,
								'post_type' => $post_type,
								'fields'    => 'all',
								'order'     => 'DESC',
							)
						);
					} else {
						$searched       = '';
						$search_results = array();
					}
					?>
					<p class="quick-search-wrap">
						<label for="quick-search-posttype-<?php echo esc_attr( $post_type_name ); ?>" class="screen-reader-text"><?php esc_attr_e( 'Search', 'wplegalpages' ); ?></label>
						<input type="search"<?php wp_nav_menu_disabled_check( $nav_menu_selected_id ); ?> class="quick-search" value="<?php echo esc_attr( $searched ); ?>" name="quick-search-posttype-<?php echo esc_attr( $post_type ); ?>" id="quick-search-posttype-<?php echo esc_attr( $post_type_name ); ?>" />
						<span class="spinner"></span>
						<?php submit_button( __( 'Search', 'wplegalpages' ), 'small quick-search-submit hide-if-js', 'submit', false, array( 'id' => 'submit-quick-search-posttype-' . $post_type_name ) ); ?>
					</p>

					<ul id="<?php echo esc_attr( $post_type_name ); ?>-search-checklist" data-wp-lists="list:<?php echo esc_attr( $post_type_name ); ?>" class="categorychecklist form-no-clear">
						<?php if ( ! empty( $search_results ) && ! is_wp_error( $search_results ) ) : ?>
							<?php
							$args['walker'] = $walker;
							echo walk_nav_menu_tree( array_map( 'wp_setup_nav_menu_item', $search_results ), 0, (object) $args ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							?>
						<?php elseif ( is_wp_error( $search_results ) ) : ?>
							<li><?php echo $search_results->get_error_message(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></li>
						<?php elseif ( ! empty( $searched ) ) : ?>
							<li><?php esc_attr_e( 'No results found.', 'wplegalpages' ); ?></li>
						<?php endif; ?>
					</ul>
				</div><!-- /.tabs-panel -->

				<div id="<?php echo esc_attr( $post_type_name ); ?>-all" class="tabs-panel tabs-panel-view-all <?php echo ( 'all' === $current_tab ? 'tabs-panel-active' : 'tabs-panel-inactive' ); ?>" role="region" aria-label="<?php echo esc_attr( $post_type_name ); ?>" tabindex="0">
					<?php if ( ! empty( $page_links ) ) : ?>
						<div class="add-menu-item-pagelinks">
							<?php echo $page_links; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
					<?php endif; ?>
					<ul id="<?php echo esc_attr( $post_type_name ); ?>checklist" data-wp-lists="list:<?php echo esc_attr( $post_type_name ); ?>" class="categorychecklist form-no-clear">
						<?php
						$args['walker'] = $walker;

						/**
						 * Filters the posts displayed in the 'View All' tab of the current
						 * post type's menu items meta box.
						 *
						 * The dynamic portion of the hook name, `$post_type_name`, refers
						 * to the slug of the current post type.
						 *
						 * @since 3.2.0
						 * @since 4.6.0 Converted the `$post_type` parameter to accept a WP_Post_Type object.
						 *
						 * @see WP_Query::query()
						 *
						 * @param object[]     $posts     The posts for the current post type. Mostly `WP_Post` objects, but
						 *                                can also contain "fake" post objects to represent other menu items.
						 * @param array        $args      An array of `WP_Query` arguments.
						 * @param WP_Post_Type $post_type The current post type object for this menu item meta box.
						 */
						$posts = apply_filters( "nav_menu_items_{$post_type_name}", $posts, $args, $post_type );

						$checkbox_items = walk_nav_menu_tree( array_map( 'wp_setup_nav_menu_item', $posts ), 0, (object) $args );

						echo $checkbox_items; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						?>
					</ul>
					<?php if ( ! empty( $page_links ) ) : ?>
						<div class="add-menu-item-pagelinks">
							<?php echo $page_links; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
					<?php endif; ?>
				</div><!-- /.tabs-panel -->

				<p class="button-controls wp-clearfix" data-items-type="posttype-<?php echo esc_attr( $post_type_name ); ?>">
			<span class="list-controls hide-if-no-js">
				<input type="checkbox"<?php wp_nav_menu_disabled_check( $nav_menu_selected_id ); ?> id="<?php echo esc_attr( $tab_name ); ?>" class="select-all" />
				<label for="<?php echo esc_attr( $tab_name ); ?>"><?php esc_attr_e( 'Select All', 'wplegalpages' ); ?></label>
			</span>

					<span class="add-to-menu">
				<input type="submit"<?php wp_nav_menu_disabled_check( $nav_menu_selected_id ); ?> class="button submit-add-to-menu right" value="<?php esc_attr_e( 'Add to Menu', 'wplegalpages' ); ?>" name="add-post-type-menu-item" id="<?php echo esc_attr( 'submit-posttype-' . $post_type_name ); ?>" />
				<span class="spinner"></span>
			</span>
				</p>

			</div><!-- /.posttypediv -->
			<?php
		}
	}
}
