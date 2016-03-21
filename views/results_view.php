<?php

if (isset($_GET['nzha_reportid']))
{

	global $wpdb;

	$reportid = $_GET['nzha_reportid'];

	$result =  get_posts(array(
        'post_type' => POST_TYPE_NZHA_REPORT,
        'meta_query' => array(
        	'relation' => 'OR' ,
            array(
               'key' => '_my_meta_property_reports_reportid_value_key' ,
               'value' => $reportid ,
               'compare' => 'LIKE'
            )
         )
	));

	$post_id = $result[0]->ID;

	$email 				= get_post_meta( $post_id, '_my_meta_property_reports_email_value_key', true );
	$reportid 			= get_post_meta( $post_id, '_my_meta_property_reports_reportid_value_key', true );
	$fromAddress 		= get_post_meta( $post_id, '_my_meta_property_reports_address_value_key', true );
	$firstname 			= get_post_meta( $post_id, '_my_meta_property_reports_firstname_value_key', true );
	$lastname 			= get_post_meta( $post_id, '_my_meta_property_reports_lastname_value_key', true );
	$mobile 			= get_post_meta( $post_id, '_my_meta_property_reports_mobile_value_key', true );
	$type 				= get_post_meta( $post_id, '_my_meta_property_reports_property_type_value_key', true );
	$condition 			= get_post_meta( $post_id, '_my_meta_property_reports_property_condition_value_key', true );
	$size 				= get_post_meta( $post_id, '_my_meta_property_reports_property_size_value_key', true );
	$bedrooms   		= get_post_meta( $post_id, '_my_meta_property_reports_property_bedrooms_value_key', true );
	$bathrooms 			= get_post_meta( $post_id, '_my_meta_property_reports_property_bathrooms_value_key', true );
	$carspaces 		  	= get_post_meta( $post_id, '_my_meta_property_reports_property_carspaces_value_key', true );
	$specialfeatures  	= get_post_meta( $post_id, '_my_meta_property_reports_property_specialfeatures_value_key', true );
	$otherfeatures 		= get_post_meta( $post_id, '_my_meta_property_reports_property_otherfeatures_value_key', true );
	$relationship 		= get_post_meta( $post_id, '_my_meta_property_reports_property_relationship_value_key', true );
	$plans 				= get_post_meta( $post_id, '_my_meta_property_reports_property_plans_value_key', true );
	$timeframe 			= get_post_meta( $post_id, '_my_meta_property_reports_property_timeframe_value_key', true );


	$searchResults =  get_posts(array(
	        'post_type' => POST_TYPE_NZHA_MAIN_POST,
	        'meta_query' => array(
	        	'relation' => 'OR' ,
	            array(
	               'key' => '_my_meta_property_type_value_key' ,
	               'value' => $type ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_condition_value_key' ,
	               'value' => $condition ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_size_value_key' ,
	               'value' => $size ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_bedrooms_value_key' ,
	               'value' => $bedrooms ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_bathrooms_value_key' ,
	               'value' => $bathrooms ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_carspaces_value_key' ,
	               'value' => $carspaces ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_specialfeatures_value_key' ,
	               'value' => $specialfeatures ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_otherfeatures_value_key' ,
	               'value' => $otherfeatures ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_relationship_value_key' ,
	               'value' => $relationship ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_plans_value_key' ,
	               'value' => $plans ,
	               'compare' => 'LIKE'
	            ) ,
	            array(
	               'key' => '_my_meta_property_timeframe_value_key' ,
	               'value' => $timeframe ,
	               'compare' => 'LIKE'
	            ) ,
	         )
	));

?>

<!--- START VIEW -->
<h1>Market Analysis & Property Sales Report</h1>
<h1><?php echo $fromAddress; ?></h1>

<p>Bedrooms <?php echo $bedrooms; ?></p>
<p>Bathrooms <?php echo $bathrooms; ?></p>
<p>Car Spaces <?php echo $carspaces; ?></p>

<h1>Hi, <?php echo ucfirst($firstname); ?></h1>
<p>Thank you for the opportunity to provide your Property Report. Please find below a post code overview and sale prices of houses and/or apartments in your local area</p>

<h1>Property Sales Near You</h1>


<table border="1">
	<thead>
		<th>Address</th>
		<th>&nbsp;</th>
		<th>Suburb</th>
		<th>Bed</th>
		<th>Bath</th>
		<th>Car</th>
		<th>Date Sold</th>
		<th>Price</th>
	</thead>
<?php
	foreach ($searchResults as $post) {

		$toAddress = get_post_meta( $post->ID, '_my_meta_property_address_value_key', true );
		$longtitude = get_post_meta( $post->ID, '_my_meta_property_longtitude_value_key', true );
		$latitude = get_post_meta( $post->ID, '_my_meta_property_latitude_value_key', true );
		$typeofproperty = get_post_meta( $post->ID, '_my_meta_property_type_value_key', true );
		$condition = get_post_meta( $post->ID, '_my_meta_property_condition_value_key', true );
		$size = get_post_meta( $post->ID, '_my_meta_property_size_value_key', true );
		$suburb = get_post_meta( $post->ID, '_my_meta_property_suburb_value_key', true );
		$bedrooms = get_post_meta( $post->ID, '_my_meta_property_bedrooms_value_key', true );
		$bathrooms = get_post_meta( $post->ID, '_my_meta_property_bathrooms_value_key', true );
		$carspaces = get_post_meta( $post->ID, '_my_meta_property_carspaces_value_key', true );
		$specialfeatures = get_post_meta( $post->ID, '_my_meta_property_specialfeatures_value_key', true );
		$otherfeatures = get_post_meta( $post->ID, '_my_meta_property_otherfeatures_value_key', true );
		$relationship = get_post_meta( $post->ID, '_my_meta_property_relationship_value_key', true );
		$plans = get_post_meta( $post->ID, '_my_meta_property_plans_value_key', true );
		$timeframe = get_post_meta( $post->ID, '_my_meta_property_timeframe_value_key', true );
		$datesold = get_post_meta( $post->ID, '_my_meta_property_datesold_value_key', true );
		$price = get_post_meta( $post->ID, '_my_meta_property_price_value_key', true );

		$image = get_the_post_thumbnail( $post->ID , 'thumbnail' );
		
		if (getDistance( $fromAddress , $toAddress ) >= DISTANCE_IN_METERS)
		{
			continue;
		}
	
?>
		<tr>
			<td><?php echo $image; ?></td>
			<td><?php echo $toAddress; ?></td>
			<td><?php echo $suburb; ?></td>
			<td><?php echo $bedrooms; ?></td>
			<td><?php echo $bathrooms; ?></td>
			<td><?php echo $carspaces; ?></td>
			<td><?php echo $datesold; ?></td>
			<td><?php echo $price; ?></td>
		</tr>
		
<?php
	}
?>
</table>
<!--- END VIEW -->
<?php
}
?>