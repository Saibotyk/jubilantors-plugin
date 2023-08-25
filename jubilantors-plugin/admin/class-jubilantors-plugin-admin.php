



<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/Saibotyk | Leavlm | Cibernitron
 * @since      1.0.0
 *
 * @package    Jubilantors_Plugin
 * @subpackage Jubilantors_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Jubilantors_Plugin
 * @subpackage Jubilantors_Plugin/admin
 * @author     Jubilantors <tobias13@hotmail.fr>
 */
class Jubilantors_Plugin_Admin
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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	//-----------------------------
	//ADDING SHORTCUT IN DASHBOARD
	//-----------------------------

	public function wp_dashboard_shortcut()
	{
		add_menu_page('Jubilantors', 'Jubilantors', 'administrator', $this->plugin_name, array($this, 'wp_dashboard_shortcut_include'));
	}

	public function wp_dashboard_shortcut_include()
	{
		include_once('partials/jubilantors-dashboard-show.php');
	}



	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/jubilantors-plugin-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/jubilantors-plugin-admin.js', array('jquery'), $this->version, false);
	}

	public function add_option_in_db()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (isset($_POST['jubi-percentage'])) {
				$jubiPercentage = sanitize_text_field($_POST['jubi-percentage']);
				update_option('jubi-percentage', $jubiPercentage);
			} else {
				update_option('jubi-percentage', false);
			}
	
			if (isset($_POST['color'])) {
				$jubiColor = sanitize_hex_color($_POST['color']);
				update_option('jubi-color', $jubiColor);
			}

			if(isset($_POST['placementX'])){
				$jubiPlacementX = $_POST['placementX'];
				update_option( 'placementX', $jubiPlacementX);
			}

			if(isset($_POST['placementY'])){
				$jubiPlacementY = $_POST['placementY'];
				update_option( 'placementY', $jubiPlacementY);
			}
		}
	}
}
