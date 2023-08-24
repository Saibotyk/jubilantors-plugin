<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/Saibotyk | Leavlm | Cibernitron
 * @since      1.0.0
 *
 * @package    Jubilantors_Plugin
 * @subpackage Jubilantors_Plugin/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Jubilantors_Plugin
 * @subpackage Jubilantors_Plugin/public
 * @author     Jubilantors <tobias13@hotmail.fr>
 */
class Jubilantors_Plugin_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}


	
	//--------------
	// DISPLAYING BAR
	//--------------


	public function wp_display_bar()
	{
		$color = get_option('jubi-color');
		$percent = get_option('jubi-percentage');
		if ($percent == 'on'){
			$display = '';
		} else {
			$display ='display-none';
		}
		echo '<div class="bar-container">
					<div class="bar" style="background:linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, ' . $color . ' 50%, rgba(0, 0, 0, 1) 100%)">
						<p class="text-bar '. $display .'"></p>
					</div>
				</div>';
	}

	public function wp_display_reinitButton()
	{
		echo "	<div class='container-button'>
					<button class='reinit-button'>Réinitialiser la lecture de l'article</button>
				</div>";
	}



	// public function wp_display_bar_include()
	// {
	// 	include_once('partials/jubilantors-display-bar.php');
	// }



	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jubilantors_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jubilantors_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/jubilantors-plugin-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Jubilantors_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Jubilantors_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/jubilantors-plugin-public.js', array('jquery'), $this->version, false);
	}
}
