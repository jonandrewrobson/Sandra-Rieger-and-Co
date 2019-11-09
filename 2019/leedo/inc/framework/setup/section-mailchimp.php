<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

$priority = 0;

/**
 * Mailchimp
 */
if ( class_exists( 'Kirki_Helper' ) ) {
	VLT_Options::add_field( array(
		'type' => 'select',
		'settings' => 'mailchimp_thank_you_page',
		'section' => 'section_mailchimp',
		'label' => esc_html__( 'Thank You Page', 'leedo' ),
		'priority' => $priority++,
		'transport' => 'auto',
		'multiple' => 1,
		'choices' => Kirki_Helper::get_posts(
			array(
				'posts_per_page' => 9999,
				'post_type' => 'page'
			)
		),
		'default' => '',
	) );
}