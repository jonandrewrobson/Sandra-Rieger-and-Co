<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

$priority = 0;

/**
 * Advanced
 */
VLT_Options::add_field( array(
	'type' => 'select',
	'settings' => 'jquery_in_footer',
	'section' => 'section_advanced',
	'label' => esc_html__( 'Load jQuery in footer', 'leedo' ),
	'description' => esc_html__( 'Solves render-blocking issue, however can cause plugin conflicts.', 'leedo' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'disable' => esc_html__( 'Disable', 'leedo' ),
		'enable' => esc_html__( 'Enable', 'leedo' ),
	),
	'default' => 'disable',
) );

VLT_Options::add_field( array(
	'type' => 'select',
	'settings' => 'acf_show_admin_panel',
	'section' => 'section_advanced',
	'label' => esc_html__( 'Show ACF in Admin Panel', 'leedo' ),
	'description' => esc_html__( 'This field enable tab for ACF Professional in your dashboard.', 'leedo' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'hide' => esc_html__( 'Hide', 'leedo' ),
		'show' => esc_html__( 'Show', 'leedo' ),
	),
	'default' => 'hide',
) );

VLT_Options::add_field( array(
	'type' => 'color',
	'settings' => 'mobile_status_bar_color',
	'section' => 'section_advanced',
	'label' => esc_html__( 'Mobile Status Bar Colors', 'leedo' ),
	'description' => esc_html__( 'Field for address bar or device status bar to match your brand colors.', 'leedo' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '#ee3364',
) );