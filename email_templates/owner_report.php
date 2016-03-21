<?php
$owneremailtemplate = "";
$owneremailtemplate .= '<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#ffffff" id="yiv5310727432bodyTable" style="background:#ffffff repeat;border-collapse:collapse;table-layout:fixed;margin:0 auto;">
<tbody id="yui_3_16_0_1_1444489235968_3825">
<tr id="yui_3_16_0_1_1444489235968_3824">
<td id="yui_3_16_0_1_1444489235968_3823">   
<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="max-width:700px;margin:auto;" class="yiv5310727432email-container" id="yui_3_16_0_1_1444489235968_3822">
<tbody id="yui_3_16_0_1_1444489235968_3821">
<tr id="yui_3_16_0_1_1444489235968_4602">
<td align="right" width="700" bgcolor="#ffffff" class="yiv5310727432full-width" style="padding-right:5px;" id="yui_3_16_0_1_1444489235968_4601">

</td>
</tr>
<tr id="yui_3_16_0_1_1444489235968_3820">
<td width="700" bgcolor="#ffffff" style="width:100%;" id="yui_3_16_0_1_1444489235968_3819">
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="width:100%;overflow:hidden;" id="yui_3_16_0_1_1444489235968_3818">
<tbody id="yui_3_16_0_1_1444489235968_3817">
<tr id="yui_3_16_0_1_1444489235968_3816">
<td height="76" width="700" bgcolor="#ffffff" class="yiv5310727432full-width" style="width:100%;min-height:auto;" id="yui_3_16_0_1_1444489235968_3815"><a rel="nofollow" target="_blank" href="http://homeguru.trclient.com/id=3660,18255238,71975043,478977,1?erl=https%3A%2F%2Fwww.homeguru.com.au" title="homeguru.com.au" style="display:inline-block;" id="yui_3_16_0_1_1444489235968_3814"> <img src="' . plugins_url('assets/images/logo.png' , dirname(__FILE__)) . '" border="0" width="238" height="76" alt="HomeGuru" style="display:block;" id="yui_3_16_0_1_1444489235968_3813"> </a></td>
</tr>
<tr id="yui_3_16_0_1_1444489235968_3851">
<td height="165" width="700" bgcolor="#ffffff" class="yiv5310727432full-width-height-image" style="width:100%;min-height:auto;" id="yui_3_16_0_1_1444489235968_3850"><img src="http://www.homeguru.com.au/email/report/hgreport-header.jpg" alt="Sold Properties Update" border="0" width="700" height="165" style="display:block;" class="yiv5310727432small-header-hg2" id="yui_3_16_0_1_1444489235968_3849"></td>
</tr>
<tr id="yui_3_16_0_1_1444489235968_3830">
<td width="700" height="25" bgcolor="#ffffff" class="yiv5310727432full-width-image" style="width:100%;min-height:25px;" id="yui_3_16_0_1_1444489235968_3829">&nbsp;</td>
</tr>
<tr id="yui_3_16_0_1_1444489235968_3837">
<td width="700" bgcolor="#ffffff" class="yiv5310727432full-width" style="width:100%;min-height:auto;" align="center" id="yui_3_16_0_1_1444489235968_3836">
<table width="630" border="0" cellspacing="0" cellpadding="0" align="center" style="width:90% !important;" class="yiv5310727432responsive-table" id="yui_3_16_0_1_1444489235968_3835">
<tbody id="yui_3_16_0_1_1444489235968_3834">
<tr id="yui_3_16_0_1_1444489235968_3833">
<td width="332" class="yiv5310727432full-width yiv5310727432small-full-width" style="width:60%;" id="yui_3_16_0_1_1444489235968_3832">

</td>
<td width="36" class="yiv5310727432full-width yiv5310727432small-hidden" style="width:6%;" align="center" id="yui_3_16_0_1_1444489235968_3838">&nbsp;</td>
<td width="246" class="yiv5310727432full-width yiv5310727432small-full-width yiv5310727432small-hidden" style="width:34%;text-align:right;" valign="top" id="yui_3_16_0_1_1444489235968_3839">&nbsp;</td>
</tr>
<tr id="yui_3_16_0_1_1444489235968_3846">
<td class="yiv5310727432full-width yiv5310727432small-full-width yiv5310727432small-margin-top-15" style="width:100%;" valign="top" id="yui_3_16_0_1_1444489235968_3899">
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Address :</b> <span>' . $address . '</span>
</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Type of Property : </b><br />';

		$typeofproperty = explode(',', $typeofproperty);
		foreach ( getPropertyType() as $key => $value)
		{
			if (in_array($key, $typeofproperty))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'><img src='" . plugins_url('assets/images/icons/' . getPropertyTypeIcons($key) , dirname(__FILE__)) . "'</span>";	
			}				
		}

$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Condition : </b><br />';

		$condition = explode(',', $condition);
		foreach ( getPropertyCondition() as $key => $value)
		{
			if (in_array($key, $condition))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'><img src='" . plugins_url('assets/images/icons/' . getPropertyConditionIcons($key) , dirname(__FILE__)) . "'</span>";	
			}
		}
	 
$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Size : </b><br />';

		$size = explode(',', $size);
		foreach ( getPropertySize() as $key => $value)
		{
			if (in_array($key, $size))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'><img src='" . plugins_url('assets/images/icons/' . getPropertySizeIcons($key) , dirname(__FILE__)) . "'</span>";	
			}	
		}

$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Bedrooms : </b><br />';

		$bedrooms = array_filter(explode("," , $bedrooms));
	
		foreach (getPropertyFeaturesValue('bedrooms') as $num => $value)
		{
			if (in_array($num, $bedrooms))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'>" . $value . "</span><br />";	
			}
		}

$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Bathrooms : </b><br />';

		$bathrooms = array_filter(explode("," , $bathrooms));
	
		foreach (getPropertyFeaturesValue('bathrooms') as $num => $value)
		{
			if (in_array($num, $bathrooms))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'>" . $value . "</span><br />";	
			}
		}

$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Garages : </b><br />';

		$carspaces = array_filter(explode("," , $carspaces));
	
		foreach (getPropertyFeaturesValue('garages') as $num => $value)
		{
			if (in_array($num, $carspaces))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'>" . $value . "</span><br />";	
			}	
		}
$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Special Features : </b><br />';
		$specialfeatures = explode(',', $specialfeatures);
		foreach ( getSpecialFeatures() as $key => $value)
		{
			if (in_array($key, $specialfeatures))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'><img style='width: 200px; height: 50px;' src='" . plugins_url('assets/images/icons/' . getSpecialFeaturesIcon($key) , dirname(__FILE__)) . "'</span>";	
			}	
		}

$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Other Features : </b> <span>' . $otherfeatures . '</span>
</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Relationship : </b><br />';
		$relationship = explode(',', $relationship);
		foreach ( getRelationship() as $key => $value)
		{
			if (in_array($key, $relationship))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'><img src='" . plugins_url('assets/images/icons/' . getRelationshipIcon($key) , dirname(__FILE__)) . "'</span>";	
			}	
		}
$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Plans for the Property : </b><br />';
		$plans = explode(',', $plans);
		foreach ( getPlans() as $key => $value)
		{
			if (in_array($key, $plans))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'><img src='" . plugins_url('assets/images/icons/' . getPlansIcon($key) , dirname(__FILE__)) . "'</span>";	
			}	
		}
$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Timeframe : </b><br />';
		$timeframe = explode(',', $timeframe);
		foreach ( getTimeframe() as $key => $value)
		{
			if (in_array($key, $timeframe))
			{
				$owneremailtemplate .=  "<span style='margin-right: 10px;'><img src='" . plugins_url('assets/images/icons/' . getTimeframeIcon($key) , dirname(__FILE__)) . "'</span>";	
			}	
		}
$owneremailtemplate .= '</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Email : </b> <span>' . $email . '</span>
</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Firstname : </b> <span>' . $firstname . '</span>
</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Lastname : </b> <span>' . $lastname . '</span>
</p>
<p style="color:#666666;font-size:16px;font-family:Arial;margin:0 0 25px 0;line-height:24px;" id="yui_3_16_0_1_1444489235968_3898">
	<b>Contact Number : </b> <span>' . $contactnumber . '</span>
</p>

</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td width="700" height="35" bgcolor="#ffffff" class="yiv5310727432full-width-image" style="width:100%;min-height:35px;">&nbsp;</td>
</tr>
<tr id="yui_3_16_0_1_1444489235968_4624">
<td width="700" height="35" bgcolor="#f1f1f1" class="yiv5310727432full-width-image" style="width:100%;min-height:35px;" id="yui_3_16_0_1_1444489235968_4623">&nbsp;</td>
</tr>
<tr id="yui_3_16_0_1_1444489235968_4635">
<td width="700" bgcolor="#f1f1f1" class="yiv5310727432full-width-image" style="width:100%;" id="yui_3_16_0_1_1444489235968_4634">
<table width="630" border="0" cellspacing="0" cellpadding="0" align="center" style="width:90% !important;" class="yiv5310727432responsive-table yiv5310727432medium-center" id="yui_3_16_0_1_1444489235968_4633">
<tbody id="yui_3_16_0_1_1444489235968_4632">
<tr id="yui_3_16_0_1_1444489235968_4631">
<td width="290" class="yiv5310727432full-width yiv5310727432small-full-width" style="width:46%;" id="yui_3_16_0_1_1444489235968_4630">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" id="yui_3_16_0_1_1444489235968_4629">
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
   </td>
</tr>
</tbody>
</table>';


