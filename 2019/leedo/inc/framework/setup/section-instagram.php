<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

$priority = 0;

/**
 * Instagram
 */
VLT_Options::add_field( array(
	'type' => 'text',
	'settings' => 'instagram_access_token',
	'section' => 'section_instagram',
	'label' => esc_html__( 'Access Token', 'leedo' ),
	'description' => sprintf( __( '<a href="%s" target="_blank">How to generate access token.</a>', 'leedo' ), 'http://instagram.pixelunion.net/' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

VLT_Options::add_field( array(
	'type' => 'text',
	'settings' => 'instagram_user_id',
	'section' => 'section_instagram',
	'label' => esc_html__( 'User ID', 'leedo' ),
	'description' => sprintf( __( '<a href="%s" target="_blank">How to find User ID.</a>', 'leedo' ), 'https://codeofaninja.com/tools/find-instagram-user-id/' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

VLT_Options::add_field( array(
	'type' => 'text',
	'settings' => 'instagram_cache_time',
	'section' => 'section_instagram',
	'label' => esc_html__( 'Cache Time', 'leedo' ),
	'tooltip' => esc_html__( 'In Seconds.', 'leedo' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => 3600,
) );

VLT_Options::add_field( array(
	'type' => 'select',
	'settings' => 'instagram_image_size',
	'section' => 'section_instagram',
	'label' => esc_html__( 'Image Size', 'leedo' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'low_resolution' => esc_html__( '306x306', 'leedo' ),
		'thumbnail' => esc_html__( '150x150', 'leedo' ),
		'standard_resolution' => esc_html__( '612x612', 'leedo' ),
	),
	'default' => 'low_resolution',
) );