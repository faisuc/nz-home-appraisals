<?php
/*
Plugin Name: NZ Home Appraisal
Plugin URI: http://www.pluginuri.com
Description: Create Home Appraisal for New Zealand
Version: 1.0
Author: Neil Carlo Sucuangco
Author URI: http://www.authoruri.com
*/

if ( ! defined( 'ABSPATH' ) )
{
	exit;
}

define( 'POST_TYPE_NZHA_MAIN_POST' , 'nzha-main-post' );
define( 'POST_TYPE_NZHA_REPORT' , 'nzha-reports' );
define( 'POST_TYPE_NZHA_CUSTOM_REPORT' , 'nzha-custom-reports' );
define( 'PLUGINNAME' , 'nz-home-appraisal-2' );
define( 'WP_PREFIX' , 'wp' );
define( 'ARRAY_SEPARATOR' , '<><><><><>' );
define( 'DISTANCE_IN_METERS' , '50000' );

require_once( dirname( __FILE__ ) . '/includes/functions.php' );
add_shortcode( 'nz-home-appraisal-form-view' , 'nzhomeappraisalformview' );
function nzhomeappraisalformview()
{	
	ob_start();
	require_once( dirname(__FILE__) . '/views/formview.php' );
	require_once( dirname(__FILE__) . '/views/stepform.php' );
	return ob_get_clean();
}

add_shortcode( 'nz-home-appraisal-results-view' , 'nzhomeappraisalresultsview' );
function nzhomeappraisalresultsview()
{
	require_once( dirname(__FILE__) . "/views/results_view.php" );
}

function theme_name_scripts()  
{
	wp_enqueue_style( 'pa_custom_css' , plugins_url( 'assets/css/styles.css' , __FILE__ ) );
	wp_enqueue_style( 'pa_custom_modal_css_1' , plugins_url( 'assets/js/Remodal-1.0.3/remodal.css' , __FILE__ ) );
	wp_enqueue_style( 'pa_custom_modal_css_2' , plugins_url( 'assets/js/Remodal-1.0.3/remodal-default-theme.css' , __FILE__ ) );

	wp_enqueue_script( 'google-map-places-autocompleete' , 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places' , array() , false , true );
	wp_enqueue_script( 'pa_custom_modal_script_2' , plugins_url( 'assets/js/Remodal-1.0.3/remodal.js' , __FILE__ ) , array('jquery') , false , true );
	wp_enqueue_script( 'pa_custom_script' , plugins_url( 'assets/js/script.js' , __FILE__ ) , array('jquery') , false , true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function load_custom_wp_admin_style() {
    wp_enqueue_script( 'google-map-places-autocompleete' , 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places' , array() , false , true );
    wp_enqueue_script( 'pa_custom_script' , plugins_url( 'assets/js/script.js' , __FILE__ ) , array('jquery') , false , true );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function wpse_76815_remove_publish_box() {
    remove_meta_box( 'submitdiv', POST_TYPE_NZHA_REPORT , 'side' );
}
add_action( 'admin_menu', 'wpse_76815_remove_publish_box' );

function pa_ajax_action()
{
	if (isset($_POST['searchAddress']))
	{
		$searchKey = $_POST['searchAddress'];
		$response = searchLocation($searchKey);
		
		wp_send_json( $response );
	}
	else if (isset($_POST['formdata']))
	{

		$nzha_property_type = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_type']));
		$nzha_property_condition = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_condition']));
		$nzha_property_size = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_size']));
		$nzha_property_bedrooms = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_bedrooms']));
		$nzha_property_bathrooms = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_bathrooms']));
		$nzha_property_carspaces = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_carspaces']));
		$nzha_property_specialfeatures = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_specialfeatures']));
		$nzha_property_otherspecialfeatures = sanitize_text_field($_POST['nzha_property_otherspecialfeatures']);
		$nzha_property_relationship = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_relationship']));
		$nzha_property_plans = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_plans']));
		$nzha_property_timeframe = array_map("sanitize_text_field" , explode("," , $_POST['nzha_property_timeframe']));
		$firstname = sanitize_text_field($_POST['firstname']);
		$lastname = sanitize_text_field($_POST['lastname']);
		$mobile = sanitize_text_field($_POST['mobile']);
		$email = sanitize_text_field($_POST['email']);
		$address = sanitize_text_field($_POST['address']);

		require_once( dirname(__FILE__) . '/includes/processform.php' );
		
	}
	else if (isset($_POST['customreport']))
	{
		$purpose_of_this_loan = sanitize_text_field($_POST['purpose_of_this_loan']);
		$first_home_buyer = sanitize_text_field($_POST['first_home_buyer']);
		$estimated_purchase_price = sanitize_text_field($_POST['estimated_purchase_price']);
		$property_location = sanitize_text_field($_POST['property_location']);
		$funds_available = sanitize_text_field($_POST['funds_available']);
		$the_property_will_be = sanitize_text_field($_POST['the_property_will_be']);
		$when_do_you_need_the_finance = sanitize_text_field($_POST['when_do_you_need_the_finance']);
		$original_purchase_price = sanitize_text_field($_POST['original_purchase_price']);
		$estimated_value = sanitize_text_field($_POST['estimated_value']);
		$outstanding_balance = sanitize_text_field($_POST['outstanding_balance']);
		$income_type = sanitize_text_field($_POST['income_type']);
		$gross_annual_household_income = sanitize_text_field($_POST['gross_annual_household_income']);
		$number_of_dependants = sanitize_text_field($_POST['number_of_dependants']);
		$good_credit_history = sanitize_text_field($_POST['good_credit_history']);
		$postcode = sanitize_text_field($_POST['postcode']);
		$best_time_to_contact_you = sanitize_text_field($_POST['best_time_to_contact_you']);
		$other_gross_annual_income = sanitize_text_field($_POST['other_gross_annual_income']);
		$other_monthly_loan_repayments = sanitize_text_field($_POST['other_monthly_loan_repayments']);
		$employment_status = sanitize_text_field($_POST['employment_status']);
		$mobile_number = sanitize_text_field($_POST['mobile_number']);
		$reportid = $_POST['reportid'];
		$email = sanitize_text_field($_POST['email']);
		$firstname = sanitize_text_field($_POST['firstname']);

		require_once( dirname(__FILE__) . '/includes/processform-custom-report.php');
	}
}
add_action( 'wp_ajax_ajax_action' , 'pa_ajax_action' );
add_action( 'wp_ajax_nopriv_ajax_action' , 'pa_ajax_action' );

add_filter( 'wp_mail_content_type', 'set_content_type' );
function set_content_type( $content_type ) {
	return 'text/html';
}

add_filter('wp_mail_from', 'nzha_new_mail_from');
add_filter('wp_mail_from_name', 'nzha_new_mail_from_name');
 
function nzha_new_mail_from($old) {
 return get_settings('admin_email');
}

function nzha_new_mail_from_name($old) {
 return 'New Zealand Home Appraisal';
}

require_once( dirname(__FILE__) . '/includes/nzha-main-post-custom-fields.php' );
require_once( dirname(__FILE__) . '/includes/nzha-report-custom-view-fields.php');

add_action( 'init' , 'nzhasendreport' );
function nzhasendreport()
{
	if (isset($_POST['getmyreport']))
	{
		echo "<pre>";
			print_r($_POST);
		echo "</pre>";
		exit;
	}
}