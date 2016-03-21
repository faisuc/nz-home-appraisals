jQuery(document).ready(function($)
{

	$(".remodal-cancel").hover(
		function()
		{
			$(this).css("backgroundColor" , "red");
		} ,
		function()
		{
			$(this).css("backgroundColor" , "#578CA5");
		}
	);

	$(".remodal-confirm").hover(
		function()
		{
			$(this).css("backgroundColor" , "green");
		} ,
		function()
		{
			$(this).css("backgroundColor" , "#0F75BC");
		}
	);


	var modalfirst = $('[data-remodal-id=property').remodal();
	var inst = $('[data-remodal-id=modal]').remodal();
	var inst2 = $('[data-remodal-id=modal2]').remodal();
	var inst3 = $('[data-remodal-id=modal3]').remodal();
	var inst4 = $('[data-remodal-id=modal4]').remodal();
	var inst5 = $('[data-remodal-id=modal5]').remodal();
	var inst6 = $('[data-remodal-id=modal6]').remodal();
	var inst7 = $('[data-remodal-id=modal7]').remodal();
	var inst8 = $('[data-remodal-id=modal8]').remodal();
	var inst9 = $('[data-remodal-id=modal9]').remodal();
	var thankyoumessage = $('[data-remodal-id=thankyoumessage').remodal();
	var income = $('[data-remodal-id=income').remodal();
	var thankyoumessage2 = $('[data-remodal-id=thankyoumessage2').remodal();

	modalfirst.open();

	$("#submitAddressBtn").click(function(e)
	{
		e.preventDefault();
		var address = $.trim($("#searchTextField").val());

		var ajaxUrl = $("#ajaxUrl").val();

		if (address != "")
		{
				var origTxt = "FIND OUT YOUR PROPERTY'S WORTH";
				var loaderTxt = "Please wait...";

				var btn = $(this);

				btn.val(loaderTxt);

				$.ajax({
					url : ajaxUrl ,
					type: "POST" ,
					dataType: "json" ,
					data: {
						action : 'ajax_action' ,
						searchAddress : address
					},
					success: function(data)
					{
						if (data.success)
						{
							btn.val(origTxt);
							$(".nzha-search-address").text(data.address);
							inst.open();
						}
						else
						{
							btn.val(origTxt);
							alert("Invalid Location");
						}
					}
				});
		}
	});

	$("#next-remodal-2").click(function()
	{
		inst2.open();
	});

	$("#previous-remodal-1").click(function()
	{
		inst.open();
	});

	$("#next-remodal-3").click(function()
	{
		inst3.open();
	});

	$("#previous-remodal-2").click(function()
	{
		inst2.open();
	});

	$("#next-remodal-4").click(function()
	{
		inst4.open();
	});

	$("#previous-remodal-3").click(function()
	{
		inst3.open();
	});

	$("#next-remodal-5").click(function()
	{
		inst5.open();
	});

	$("#previous-remodal-4").click(function()
	{
		inst4.open();
	});

	$("#next-remodal-6").click(function()
	{
		inst6.open();
	});

	$("#previous-remodal-5").click(function()
	{
		inst5.open();
	});

	$("#next-remodal-7").click(function()
	{
		inst7.open();
	});

	$("#previous-remodal-6").click(function()
	{
		inst6.open();
	});

	$("#next-remodal-8").click(function()
	{
		$(".nzhaproperty_radio").each(function()
		{
			if ($(this).is(":checked"))
			{
				if ($(this).val() == "refinancing")
				{
					$("#timeframeDynamicChange").html("refinancing");
					inst8.open();
				}
				else if ($(this).val() == "selling")
				{
					$("#timeframeDynamicChange").html("selling");
					inst8.open();
				}
				else if ($(this).val() == "generalenquiry")
				{
					inst9.open();
				}
			}
		});
		//inst8.open();
	});

	$("#previous-remodal-7").click(function()
	{
		inst7.open();
	});

	$("#next-remodal-9").click(function()
	{
		inst9.open();
	});

	$("#previous-remodal-8").click(function()
	{
		$(".nzhaproperty_radio").each(function()
		{
			if ($(this).is(":checked"))
			{
				if ($(this).val() == "refinancing")
				{
					$("#timeframeDynamicChange").html("refinancing");
					inst8.open();
				}
				else if ($(this).val() == "selling")
				{
					$("#timeframeDynamicChange").html("selling");
					inst8.open();
				}
				else if ($(this).val() == "generalenquiry")
				{
					inst7.open();
				}
			}
		});
		
	});

	$("#next-remodal-income").click(function()
	{
		income.open();
	});

	$("#previous-remodal-thankyoumessage").click(function()
	{
		thankyoumessage.open();
	});

	$("#previous-remodal-modalfirst").click(function()
	{
		modalfirst.open();
	});

	$("#submitReportBtn").click(function(e)
	{
		e.preventDefault();

		var dataString = $("#nzha-appraisal-form").serialize();
		var ajaxUrl = $("#ajaxUrl").val();
		var nzha_property_type = [];
		var nzha_property_condition = [];
		var nzha_property_size = [];
		var nzha_property_bedrooms = [];
		var nzha_property_bathrooms = [];
		var nzha_property_carspaces = [];
		var nzha_property_specialfeatures = [];
		var nzha_property_otherspecialfeatures = $("textarea[name='nzha_property_otherspecialfeatures']").val();
		var nzha_property_relationship = [];
		var nzha_property_plans = [];
		var nzha_property_timeframe = [];
		var firstname = $("input[name='firstname']").val();
		var lastname = $("input[name='lastname']").val();
		var mobile = $("input[name='mobile']").val();
		var email = $("input[name='email']").val();
		var address = $("#searchTextField").val();

		$("input[name='nzha_property_type[]']:checked").each(function()
		{
			nzha_property_type.push($(this).val());
		});

		$("input[name='nzha_property_condition[]']:checked").each(function()
		{
			nzha_property_condition.push($(this).val());
		});

		$("input[name='nzha_property_size[]']:checked").each(function()
		{
			nzha_property_size.push($(this).val());
		});

		$("input[name='nzha_property_bedrooms[]']:checked").each(function()
		{
			nzha_property_bedrooms.push($(this).val());
		});

		$("input[name='nzha_property_bathrooms[]']:checked").each(function()
		{
			nzha_property_bathrooms.push($(this).val());
		});

		$("input[name='nzha_property_garages[]']:checked").each(function()
		{
			nzha_property_carspaces.push($(this).val());
		});

		$("input[name='nzha_property_specialfeatures[]']:checked").each(function()
		{
			nzha_property_specialfeatures.push($(this).val());
		});

		$("input[name='nzha_property_relationship[]']:checked").each(function()
		{
			nzha_property_relationship.push($(this).val());
		});

		$("input[name='nzha_property_plans[]']:checked").each(function()
		{
			nzha_property_plans.push($(this).val());
		});

		$("input[name='nzha_property_timeframe[]']:checked").each(function()
		{
			nzha_property_timeframe.push($(this).val());
		});
		

		var origTxt = "GET MY REPORT";
		var loaderTxt = "Please wait...";

		var btn = $(this);

		btn.html(loaderTxt);

		$.ajax({
			url: ajaxUrl ,
			type: "POST" ,
			dataType: "json" ,
			data: {
				action: "ajax_action" ,
				formdata : true ,
				nzha_property_type : nzha_property_type.join() ,
				nzha_property_condition : nzha_property_condition.join() ,
				nzha_property_size : nzha_property_size.join() ,
				nzha_property_bedrooms : nzha_property_bedrooms.join() ,
				nzha_property_bathrooms : nzha_property_bathrooms.join() ,
				nzha_property_carspaces : nzha_property_carspaces.join() ,
				nzha_property_specialfeatures : nzha_property_specialfeatures.join() ,
				nzha_property_otherspecialfeatures : nzha_property_otherspecialfeatures ,
				nzha_property_relationship : nzha_property_relationship.join() ,
				nzha_property_plans : nzha_property_plans.join() ,
				nzha_property_timeframe : nzha_property_timeframe.join() ,
				firstname : firstname ,
				lastname : lastname ,
				mobile : mobile ,
				email : email ,
				address : address
			},
			success: function(data)
			{
				if (data.success)
				{
					btn.html(origTxt);
					thankyoumessage.open();
					$("#reportid").val(data.reportid);
				}
			}
		});

	});

	$("#submitReportBtnTwo").click(function(e)
	{
		e.preventDefault();
		var purpose_of_this_loan = $("input[name='purpose']:checked").val();
		var first_home_buyer = $("input[name='first_home_buyer']:checked").val();
		var estimated_purchase_price = $("input[name='estimated_purchase_price']").val();
		var property_location = $("input[name='property_location']").val();
		var funds_available = $("input[name='funds_available']").val();
		var the_property_will_be = $("input[name='the_property_will_be']:checked").val();
		var when_do_you_need_the_finance = $("select[name='when_do_you_need_the_finance']").val();
		var original_purchase_price = $("input[name='original_purchase_price']").val();
		var estimated_value = $("input[name='estimated_value']").val();
		var outstanding_balance = $("input[name='outstanding_balance']").val();

		if (typeof first_home_buyer === 'undefined')
		{
			first_home_buyer = '';
		}

		var income_type = $("input[name='income_type']:checked").val();
		var gross_annual_household_income = $("input[name='gross_annual_household_income']").val();
		var number_of_dependants = $("select[name='number_of_dependants']").val();
		var good_credit_history = $("input[name='good_credit_history']:checked").val();
		var postcode = $("input[name='postcode']").val();
		var best_time_to_contact_you = $("input[name='best_time_to_contact_you']:checked").val();
		var other_gross_annual_income = $("input[name='other_gross_annual_income']").val();
		var other_monthly_loan_repayments = $("input[name='other_monthly_loan_repayments']").val();
		var employment_status = $("select[name='employment_status']").val();
		var mobile_number = $("input[name='mobile_number']").val();
		var reportid = $("#reportid").val();
		var ajaxUrl = $("#ajaxUrl").val();
		var email = $("input[name='email']").val();
		var firstname = $("input[name='firstname']").val();

		$.ajax({
			url: ajaxUrl ,
			type: "POST" ,
			dataType: "json" ,
			data: {
				action: "ajax_action" ,
				customreport : true ,
				purpose_of_this_loan : purpose_of_this_loan ,
				first_home_buyer : first_home_buyer ,
				estimated_purchase_price : estimated_purchase_price ,
				property_location : property_location ,
				funds_available : funds_available ,
				the_property_will_be : the_property_will_be ,
				when_do_you_need_the_finance : when_do_you_need_the_finance ,
				original_purchase_price : original_purchase_price ,
				estimated_value : estimated_value ,
				outstanding_balance : outstanding_balance ,
				income_type : income_type ,
				gross_annual_household_income : gross_annual_household_income ,
				number_of_dependants : number_of_dependants ,
				good_credit_history : good_credit_history ,
				postcode : postcode ,
				best_time_to_contact_you : best_time_to_contact_you ,
				other_gross_annual_income : other_gross_annual_income ,
				other_monthly_loan_repayments : other_monthly_loan_repayments ,
				employment_status : employment_status ,
				mobile_number : mobile_number ,
				reportid : reportid ,
				email : email ,
				firstname : firstname
			},
			success: function(data)
			{
				if (data.success)
				{
					thankyoumessage2.open();
				}
			}
		});

	});

	$("input[name='purpose']").change(function()
	{
		var val = $(this).val();

		$(".the-property-container").show();

		if (val == "purchasing")
		{
			$("input[name='first_home_buyer']").removeAttr("disabled");
			$(".the-property-one-container").show();
			$(".the-property-two-container").hide();
		}
		else
		{
			$("input[name='first_home_buyer']").attr("disabled" , true);
			$(".the-property-one-container").hide();
			$(".the-property-two-container").show();
		}
	});

	$(".display").hide();

	$(".nzhaproperty_radio").click(function()
	{
		var parent = $(this).parent().parent().parent().parent().parent().parent();
		var parent2 = $(this).parent().parent().parent().parent().parent().parent().parent();
		var ctr = 0;
		var pluginurl = $("#nzha-plugin-url").val();
		
		var id = $(this).attr("id");
		var image = $("." + id + "_image_nzimage");
		
		var dataimage = image.attr("data-key");

		if ($(this).is(":checked"))
		{
			var newimage = dataimage + "_dark.png";
			image.attr("src" , pluginurl + newimage);			
		}
		else
		{
			var newimage = dataimage + "_light.png";
			image.attr("src" , pluginurl + newimage);	
		}

		if (parent.hasClass("remodal"))
		{
			parent.find($(".nzhaproperty_radio")).each(function()
			{
				if ($(this).is(":checked"))
				{
					ctr++;
				}
			});
		}

		if (parent2.hasClass("remodal"))
		{
			parent2.find($(".nzhaproperty_radio")).each(function()
			{
				if ($(this).is(":checked"))
				{
					ctr++;
				}
			});
		}

		if (ctr > 0)
		{
			parent.find($(".remodal-confirm")).show();
			parent2.find($(".remodal-confirm")).show();
		}
		else
		{
			parent.find($(".remodal-confirm")).hide();
			parent2.find($(".remodal-confirm")).hide();
		}

	});

	$(".nzhaproperty_radio_2nd").click(function()
	{
		var parent = $(this).parent().parent().parent().parent().parent().parent();
		var ctr = 0;
		$(".nzhaproperty_radio_2nd").each(function()
		{
			if ($(this).is(":checked"))
			{
				ctr++;
			}
		});

		if (ctr == 3)
		{
			parent.find($(".remodal-confirm")).show();
		}
		else
		{
			parent.find($(".remodal-confirm")).hide();
		}
	});
		

});

function initialize()
{
	var input = document.getElementById('searchTextField');
	var autocomplete = new google.maps.places.Autocomplete(input);
}

google.maps.event.addDomListener(window, 'load', initialize);