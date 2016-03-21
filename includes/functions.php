<?php

function searchLocation($location = "")
{
	if ($location!='') {
	   
	        $json = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($location));
	        $parsedjson = json_decode($json, true);

	        if (key_exists(0,$parsedjson['results'])) {
	            $lat_long_array = $parsedjson['results'][0]['geometry']['location'];
	            return array(
	            	'success' => true ,
	            	'address' => $location
	            );
	        } else {
	            return array(
	            	'success' => false
	            );
	        }
	    
	}
}

function getDistance($from , $to)
{
	$from = urlencode($from);
	$to = urlencode($to);
	$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false");
	$data = json_decode($data);
	$time = 0;
	$distance = 0;
	foreach($data->rows[0]->elements as $road) {
	    $time += $road->duration->value;
	    $distance += $road->distance->value;
	}

	return $distance;
}

function getPropertyType()
{
	return array(
		'house' => 'house' , 
		'apartment' => 'apartment' , 
		'townhouse' => 'townhouse' , 
		'land' => 'land'
	);
}

function getPropertyTypeIcons($type)
{
	$icons = array(
		'house' => 'house_light.png' ,
		'apartment' => 'apartment_light.png' ,
		'townhouse' => 'townhouse_light.png' ,
		'land' 		=> 'land_light.png'
	);

	return $icons[$type];
}
 
function getPropertyCondition()
{
	return array(
		'needswork'  => 'needs work' ,
		'average' 	 => 'average' ,
		'good'		 => 'good' ,
		'excellent'  => 'excellent'
	);
}

function getPropertyConditionIcons($condition)
{
	$icons = array(
		'needswork'  => 'needswork_light.png' ,
		'average' 	 => 'average_light.png' ,
		'good'		 => 'good_light.png' ,
		'excellent'  => 'excellent_light.png'
	);

	return $icons[$condition];
}

function getPropertySize()
{
	return array(
		'size1' => '< 300m<sup>2</sup>' ,
		'size2' => '301-600m<sup>2</sup>' ,
		'size3' => '601-1000m<sup>2</sup>' ,
		'size4' => '1000m<sup>2</sup>+' 
	);
}

function getPropertySizeIcons($size)
{
	$icons = array(
		'size1' => 'size1_light.png' ,
		'size2' => 'size2_light.png' ,
		'size3' => 'size3_light.png' ,
		'size4' => 'size4_light.png'
	);

	return $icons[$size];
}

function getPropertyFeatures()
{
	return array(
		'bedrooms' => 'beds' ,
		'bathrooms' => 'baths' ,
		'garages' => 'garages'
	);
}

function getPropertyFeaturesIcon($feature)
{
	$icons = array(
		'bedrooms' => 'bed_light.png' ,
		'bathrooms' => 'bathroom_light.png' ,
		'garages' => 'carport_light.png'
	);

	return $icons[$feature];
}

function getPropertyFeaturesValue($features)
{
	$propertyfeatures = array(
		'bedrooms' => array(
			0 => '0' , 1 => '1' , 2 => '2' , 3 => '3' , 4 => '4+'
		),
		'bathrooms' => array(
			0 => '0' , 1 => '1' , 2 => '2' , 3 => '3' , 4 => '4+'
		),
		'garages' => array(
			0 => '0' , 1 => '1' , 2 => '2' , 3 => '3' , 4 => '4+'
		)
	);

	return $propertyfeatures[$features];
}

function getSpecialFeatures()
{
	return array(
		'waterviews' => 'water views' ,
		'cityviews' => 'city views' ,
		'insulation' => 'insulation' ,
		'courtyard' => 'courtyard' ,
		'airconditioning' => 'air conditioning' ,
		'balcony' => 'balcony' ,
		'swimmingpool' => 'swimming pool' ,
		'additionalparking' => 'additional parking'
	);
}

function getSpecialFeaturesIcon($feature)
{
	$icons = array(
		'waterviews' => 'waterviews_light.png' ,
		'cityviews' => 'cityviews_light.png' ,
		'insulation' => 'insulation_light.png' ,
		'courtyard' => 'courtyard_light.png' ,
		'airconditioning' => 'airconditioning_light.png' ,
		'balcony' => 'balcony_light.png' ,
		'swimmingpool' => 'swimmingpool_light.png' ,
		'additionalparking' => 'additionalparking_light.png'
	);

	return $icons[$feature];
}

function getRelationship()
{
	return array(
		'owneroccupier' =>'owner occupier' ,
		'landlord'		=> 'landlord' ,
		'buyer'			=> 'buyer'
	);
}

function getRelationshipIcon($relationship)
{
	$icons = array(
		'owneroccupier' => 'owneroccupier_light.png' ,
		'landlord' => 'landlord_light.png' ,
		'buyer' => 'buyer_light.png'
	);

	return $icons[$relationship];
}

function getPlans()
{
	return array(
		'selling' => 'selling' ,
		'refinancing' => 'refinancing' ,
		'generalenquiry' => 'general enquiry'
	);
}

function getPlansIcon($plan)
{
	$icons = array(
		'selling' => 'selling_light.png' ,
		'refinancing' => 'refinancing_light.png' ,
		'generalenquiry' => 'generalenquiry_light.png'
	);

	return $icons[$plan];
}

function getTimeframe()
{
	return array(
		'timeframe1' => '0-3 months' ,
		'timeframe2' => '4-6 months' ,
		'timeframe3' => '7+ months'
	);
}

function getTimeframeIcon($timeframe)
{
	$icons = array(
		'timeframe1' => 'timeframe1_light.png' ,
		'timeframe2' => 'timeframe2_light.png' ,
		'timeframe3' => 'timeframe3_light.png'
	);

	return $icons[$timeframe];
}

function cryptStr($str)
{
	return hash('ripemd160' , $str);
}

/*
function searchAddress()
{

define( 'BLOCK_LOAD', true );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
$wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
if (isset($searchKey))
{
	global $wpdb;
	$results = $wpdb->get_results( "SELECT * FROM `" . $wpdb->posts . "` WHERE `post_type` = '" . POST_TYPE_MAIN . "' AND (`post_title` LIKE '%$searchKey%' OR `post_content` LIKE '%$searchKey%')" , OBJECT );
	$success = $results ? true : false;
	$response = array(
		'success' => $success ,
		'message' => $success ? "Address found" : "Address not found"
	);

	wp_send_json( $response );
}
}
*/