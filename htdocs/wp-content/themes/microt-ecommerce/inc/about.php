<?php

function microt_ecommerce_about_menu() {
	add_theme_page( esc_html__( 'About Theme', 'microt-ecommerce' ), esc_html__( 'About Theme', 'microt-ecommerce' ), 'edit_theme_options', 'microt_ecommerce-about', 'microt_ecommerce_about_display' );
}
add_action( 'admin_menu', 'microt_ecommerce_about_menu' );

function microt_ecommerce_about_display(){
	?>
	<div class="microt_ecommerce_about_data">
		<div class="microt_ecommerce_about_title">
			<h1><?php echo esc_html( 'Welcome to Microt Ecommerce!', 'microt-ecommerce' ); ?></h1>
			<div class="microt_ecommerce_about_theme">
				<div class="microt_ecommerce_about_description">
					<p>
						<?php echo esc_html( 'Microt Ecommerce WordPress theme makes your site stand out in its outlook. Microt Ecommerce is a powerful and multipurpose WordPress Theme. This theme has robust and flexible features with multiple customizable features, your website can gain a unique look. This multipurpose theme is packed with a lot of awesome features that can be used for various kinds of websites with focus on business sites. Microt Ecommerce has features like Social Icon, Transparent Header, featured slider, featured Section, About Section, Our Portfolio, Our team Section, Testimonial Slider, Our Services, Our Sponsors, Sticky Header, Social Information, Sidebar, Excerpt Options, and any eCommerce business need. This theme is supported for WooCommerce. All of these highly-customizable features and sections are completely responsive and absolutely easy to customize. If you are searching for unique looking flexible theme then Microt Ecommerce can be your ultimate choice to showcase your business.', 'microt-ecommerce' ); ?>
						
					</p>
				</div>
				<div class="microt_ecommerce_about_image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				</div> 
			</div>
			<div class="microt_ecommerce_about_demo">
				<div class="feature-section">
					<div class="about_data_microt_ecommerce">
						<h3><?php echo esc_html( 'Documentation', 'microt-ecommerce' ); ?></h3>
						<p><?php echo esc_html( 'Getting started with a new theme can be difficult, But its installation and customization is so easy', 'microt-ecommerce' ); ?></p>
						<a href="https://www.xeeshop.com/microt-ecommerce-documentation/"><?php echo esc_html( 'Read Documentation', 'microt-ecommerce' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_microt_ecommerce">
						<h3><?php echo esc_html( 'Recommended Plugins', 'microt-ecommerce' ); ?></h3>
						<p><?php echo esc_html( 'Please install recommended plugins for better use of theme. It will help you to make website more useful', 'microt-ecommerce' ); ?></p>
						<a href="<?php echo esc_url(admin_url('/themes.php?page=tgmpa-install-plugins&plugin_status=activate'), 'microt-ecommerce'); ?>"><?php echo esc_html( 'Install Plugins ', 'microt-ecommerce' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_microt_ecommerce">
						<h3><?php echo esc_html( 'Free Theme Demo', 'microt-ecommerce' ); ?></h3>
						<p><?php echo esc_html( 'You can check free theme demo before setup your website if you like demo then install theme', 'microt-ecommerce' ); ?></p>
						<a href="https://xeeshop.com/themedemo/microt-ecommerce/"><?php echo esc_html( 'Free Theme Demo ', 'microt-ecommerce' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_microt_ecommerce">
						<h3><?php echo esc_html( 'Free VS Pro', 'microt-ecommerce' ); ?></h3>
						<p><?php echo esc_html( 'You can check compare free version and pro version.', 'microt-ecommerce' ); ?></p>
						<a href="https://www.xeeshop.com/product/microt-ecommerce-pro/"><?php echo esc_html( 'Compare free Vs Pro ', 'microt-ecommerce' ); ?></a>
					</div>
				</div>
				<div class="feature-section">
					<div class="about_data_microt_ecommerce">
						<h3><?php echo esc_html( 'Rate this theme', 'microt-ecommerce' ); ?></h3>
						<p><?php echo esc_html( 'If you like our theme, Please vote us , so we can contribute more features for you.', 'microt-ecommerce' ); ?></p>
						<a href="#"><?php echo esc_html( 'Rate This Theme ', 'microt-ecommerce' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="about"><?php echo esc_html( 'About', 'microt-ecommerce' ); ?></li>
		</ul> 
		<div id="about" class="tab-content current">
			<div class="about_section">
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'Theme Customizer', 'microt-ecommerce' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( 'All Theme Options are available via Customize screen.', 'microt-ecommerce' ); ?></p>
					</div>
					<div class="about_theme_btn">
						<a class="customize_btn button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php echo esc_html( 'Customize', 'microt-ecommerce' ); ?></a>
					</div>
				</div>
				<div class="theme_que theme_info">
					<div class="about_theme_que">
						<h2><?php echo esc_html( 'Got theme support question?', 'microt-ecommerce' ); ?></h2>
					</div>
					<div class="about_que_data">
						<p><?php echo esc_html( 'Get genuine support from genuine people. Whether it is customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'microt-ecommerce' ); ?></p>
					</div>
					<div class="about_que_btn">
						<a class="support_forum button button-primary" href="https://www.xeeshop.com/support-us/"><?php echo esc_html( 'Support Forum', 'microt-ecommerce' ); ?></a>
					</div>
				</div>
			</div>
			<div class="about_shortcode theme_info">
				<div class="about_single_page_post_shortcode">
					<h2><?php echo esc_html( 'Single Page And Post Add shortcode', 'microt-ecommerce' ); ?></h2>
					<p><?php echo esc_html( 'if this plugin Page Section For Themereviewer must be installed then this Shortcode use Otherwise this Shortcode is not work.', 'microt-ecommerce'); ?></p>
				</div>
				<ul>
					<h3><?php echo esc_html( 'Featured Slider :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='featured_slider_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'Featured Section :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='featured_section_info_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'About Section :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='about_section_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'Our Portfolio :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='our_portfolio_section_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'Our Services :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='our_services_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'Our Sponsors :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='our_sponsors_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'Our Team :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='our_team_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'Our Testimonial :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='our_testimonial_activate']", "microt-ecommerce" ); ?></li>

					<h3><?php echo esc_html( 'Widget Section :', 'microt-ecommerce' ); ?></h3>
					<li><?php echo esc_html( "[theme_section section='woocommerce_product_section_activate']", "microt-ecommerce" ); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<?php
}