<?php
global $wpdb;
/*
$args = array(
	'_my_meta_property_type_value_key' => implode("','" , $nzha_property_type) ,
	'_my_meta_property_condition_value_key' => implode("','" , $nzha_property_condition) ,
	'_my_meta_property_size_value_key' => implode("','" , $nzha_property_size) ,
	'_my_meta_property_bedrooms_value_key' => implode("','" , $nzha_property_bedrooms) ,
	'_my_meta_property_bathrooms_value_key' => implode("','" , $nzha_property_bathrooms) ,
	'_my_meta_property_carspaces_value_key' => implode("','" , $nzha_property_carspaces) ,
	'_my_meta_property_specialfeatures_value_key' => implode("','" , $nzha_property_specialfeatures) ,
	'_my_meta_property_otherfeatures_value_key' => $nzha_property_otherspecialfeatures,
	'_my_meta_property_relationship_value_key' => implode("','" , $nzha_property_relationship) ,
	'_my_meta_property_plans_value_key' => implode("','" , $nzha_property_plans) ,
	'_my_meta_property_timeframe_value_key' => implode("','" , $nzha_property_timeframe)
);

$keys = array(
	'_my_meta_property_type_value_key' ,
	'_my_meta_property_condition_value_key' ,
	'_my_meta_property_size_value_key' ,
	'_my_meta_property_bedrooms_value_key' ,
	'_my_meta_property_bathrooms_value_key' ,
	'_my_meta_property_carspaces_value_key' ,
	'_my_meta_property_specialfeatures_value_key' ,
	'_my_meta_property_otherfeatures_value_key' ,
	'_my_meta_property_relationship_value_key',
	'_my_meta_property_plans_value_key' ,
	'_my_meta_property_timeframe_value_key'
);
*/


$values = array(
	implode("," , $nzha_property_type) ,
	implode("," , $nzha_property_condition) ,
	implode("," , $nzha_property_size) ,
	implode("," , $nzha_property_bedrooms) ,
	implode("," , $nzha_property_bathrooms) ,
	implode("," , $nzha_property_carspaces) ,
	implode("," , $nzha_property_specialfeatures) ,
	$nzha_property_otherspecialfeatures,
	implode("," , $nzha_property_relationship) ,
	implode("," , $nzha_property_plans) ,
	implode("," , $nzha_property_timeframe)
);

$reportid = cryptStr(time());
$userid = get_current_user_id();

$defaults = array(
  'post_status'           => 'publish', 
  'post_type'             => POST_TYPE_NZHA_REPORT,
  'post_title'			  => $address ,
  'post_author'           => $userid,
  'ping_status'           => get_option('default_ping_status'), 
  'post_parent'           => 0,
  'menu_order'            => 0,
  'to_ping'               =>  '',
  'pinged'                => '',
  'post_password'         => '',
  'guid'                  => '',
  'post_content_filtered' => '',
  'post_excerpt'          => '',
  'import_id'             => 0
);

$post_id = wp_insert_post( $defaults );

update_post_meta( $post_id, '_my_meta_property_reports_email_value_key', $email );
update_post_meta( $post_id, '_my_meta_property_reports_reportid_value_key', $reportid );
update_post_meta( $post_id, '_my_meta_property_reports_address_value_key', $address );
update_post_meta( $post_id, '_my_meta_property_reports_firstname_value_key', $firstname );
update_post_meta( $post_id, '_my_meta_property_reports_lastname_value_key', $lastname );
update_post_meta( $post_id, '_my_meta_property_reports_mobile_value_key', $mobile );
update_post_meta( $post_id, '_my_meta_property_reports_property_type_value_key', $values[0] );
update_post_meta( $post_id, '_my_meta_property_reports_property_condition_value_key', $values[1] );
update_post_meta( $post_id, '_my_meta_property_reports_property_size_value_key', $values[2] );
update_post_meta( $post_id, '_my_meta_property_reports_property_bedrooms_value_key', $values[3] );
update_post_meta( $post_id, '_my_meta_property_reports_property_bathrooms_value_key', $values[4] );
update_post_meta( $post_id, '_my_meta_property_reports_property_carspaces_value_key', $values[5] );
update_post_meta( $post_id, '_my_meta_property_reports_property_specialfeatures_value_key', $values[6] );
update_post_meta( $post_id, '_my_meta_property_reports_property_otherfeatures_value_key', $values[7] );
update_post_meta( $post_id, '_my_meta_property_reports_property_relationship_value_key', $values[8] );
update_post_meta( $post_id, '_my_meta_property_reports_property_plans_value_key', $values[9] );
update_post_meta( $post_id, '_my_meta_property_reports_property_timeframe_value_key', $values[10] );


$typeofproperty = $values[0];
$condition = $values[1];
$size = $values[2];
$bedrooms = $values[3];
$bathrooms = $values[4];
$carspaces = $values[5];
$specialfeatures = $values[6];
$otherfeatures = $values[7];
$relationship = $values[8];
$plans = $values[9];
$timeframe = $values[10];

$email = get_post_meta( $post_id, '_my_meta_property_reports_email_value_key', true );
$contactnumber = get_post_meta( $post_id, '_my_meta_property_reports_mobile_value_key', true );

$contactnumber = $mobile;

$html = '<a href="' . get_home_url() . '/test-results-page/?nzha_reportid=' . $reportid . '">View My Report</a>';

require_once( dirname(__FILE__) . '/../email_templates/client_report.php');
require_once( dirname(__FILE__) . '/../email_templates/owner_report.php');

$admin_email = get_settings('admin_email');

wp_mail( $email , 'NZ Home Appraisal', $clientemailtemplate );
wp_mail( $admin_email , 'NZ Home Appraisal', $owneremailtemplate );

wp_send_json( array('success' => true , 'reportid' => $reportid) );
