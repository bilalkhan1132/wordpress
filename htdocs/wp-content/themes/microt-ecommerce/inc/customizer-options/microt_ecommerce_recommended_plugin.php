<?php
/* Notifications in customizer */

require get_template_directory()  . '/inc/customizer-notify/microt-ecommerce-notify.php';
$microt_ecommerce_config_customizer = array(
	'recommended_plugins'       => array(
		'spediex-for-theme' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Spediex For Theme</strong> plugin for taking full advantage of all the features this theme has to offer microt_ecommerce.', 'microt-ecommerce')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'microt-ecommerce' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'microt-ecommerce' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'microt-ecommerce' ),
	'activate_button_label'     => esc_html__( 'Activate', 'microt-ecommerce' ),
	'microt_ecommerce_deactivate_button_label'   => esc_html__( 'Deactivate', 'microt-ecommerce' ),
);
microt_ecommerce_Customizer_Notify::init( apply_filters( 'microt_ecommerce_recommended_plugins', $microt_ecommerce_config_customizer ) );
