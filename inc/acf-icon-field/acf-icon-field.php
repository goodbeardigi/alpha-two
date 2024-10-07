<?php

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// check if class already exists
if ( ! class_exists( 'Alpha_ACF_Icon_Plugin' ) ) :

	class Alpha_ACF_Icon_Plugin {

		// vars
		var $settings;


		/*
		*  __construct
		*
		*  This function will setup the class functionality
		*
		*  @type    function
		*  @date    17/02/2016
		*  @since   1.0.0
		*
		*  @param   void
		*  @return  void
		*/

		function __construct() {

			// settings
			// - these will be passed into the field class.
			$this->settings = array(
				'version' => '1.0.0',
				'url'     => get_template_directory_uri() . '/inc/acf-icon-field',
				'path'    => get_template_directory() . '/inc/acf-icon-field',
			);

			// include field
			add_action( 'acf/include_field_types', array( $this, 'include_field' ) ); // v5
			add_action( 'acf/register_fields', array( $this, 'include_field' ) ); // v4
		}


		/*
		*  include_field
		*
		*  This function will include the field type class
		*
		*  @type    function
		*  @date    17/02/2016
		*  @since   1.0.0
		*
		*  @param   $version (int) major ACF version. Defaults to false
		*  @return  void
		*/

		function include_field( $version = false ) {

			// support empty $version
			if ( ! $version ) {
				return;
			}

			// include
			include_once 'fields/class-alpha-acf-icon-field-v' . $version . '.php';
		}

	}


	// initialize
	new Alpha_ACF_Icon_Plugin();


	// class_exists check
endif;


