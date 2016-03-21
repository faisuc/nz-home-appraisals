<?php

global $wpdb;

$userid = get_current_user_id();

$defaults = array(
  'post_status'           => 'publish', 
  'post_type'             => POST_TYPE_NZHA_CUSTOM_REPORT,
  'post_title'			  => 'CUSTOM REPORT' ,
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

update_post_meta( $post_id, '_my_meta_property_custom_reports_purpose_of_this_loan_value_key', $purpose_of_this_loan );
update_post_meta( $post_id, '_my_meta_property_custom_reports_first_home_buyer_value_key', $first_home_buyer );
update_post_meta( $post_id, '_my_meta_property_custom_reports_estimated_purchase_price_value_key', $estimated_purchase_price );
update_post_meta( $post_id, '_my_meta_property_custom_reports_property_location_value_key', $property_location );
update_post_meta( $post_id, '_my_meta_property_custom_reports_funds_available_value_key', $funds_available );
update_post_meta( $post_id, '_my_meta_property_custom_reports_the_property_will_be_value_key', $the_property_will_be );
update_post_meta( $post_id, '_my_meta_property_custom_reports_when_do_you_need_the_finance_value_key', $when_do_you_need_the_finance );
update_post_meta( $post_id, '_my_meta_property_custom_reports_original_purchase_price_value_key', $original_purchase_price );
update_post_meta( $post_id, '_my_meta_property_custom_reports_estimated_value_value_key', $estimated_value );
update_post_meta( $post_id, '_my_meta_property_custom_reports_outstanding_balance_value_key', $outstanding_balance );
update_post_meta( $post_id, '_my_meta_property_custom_reports_income_type_value_key', $income_type );
update_post_meta( $post_id, '_my_meta_property_custom_reports_gross_annual_household_income_value_key', $gross_annual_household_income );
update_post_meta( $post_id, '_my_meta_property_custom_reports_number_of_dependants_value_key', $number_of_dependants );
update_post_meta( $post_id, '_my_meta_property_custom_reports_good_credit_history_value_key', $good_credit_history );
update_post_meta( $post_id, '_my_meta_property_custom_reports_postcode_value_key', $postcode );
update_post_meta( $post_id, '_my_meta_property_custom_reports_best_time_to_contact_you_value_key', $best_time_to_contact_you );
update_post_meta( $post_id, '_my_meta_property_custom_reports_other_gross_annual_income_value_key', $other_gross_annual_income );
update_post_meta( $post_id, '_my_meta_property_custom_reports_other_monthly_loan_repayments_value_key', $other_monthly_loan_repayments );
update_post_meta( $post_id, '_my_meta_property_custom_reports_employment_status_value_key', $employment_status );
update_post_meta( $post_id, '_my_meta_property_custom_reports_mobile_number_value_key', $mobile_number );
update_post_meta( $post_id, '_my_meta_property_custom_reports_reportid_value_key', $reportid );


$html = '<div id=":19c" class="a3s" style="overflow: hidden;"><div class="adM">
</div><div style="margin:0;padding:0"><div class="adM">
  </div><table width="100%" align="center" cellpadding="0" cellspacing="0" style="background-color:#258da7;font-family:Arial,Helvetica,sans-serif;font-size:16px">
    <tbody><tr>
      <td>
        <table width="700" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;background-color:white">
          <tbody><tr style="background-color:#258da7">
            <td style="color:#95d7e8">
              <table width="100%" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif">
                <tbody><tr>
                  <td style="color:#444545;vertical-align:bottom" width="50%">
                    <img src="https://ci5.googleusercontent.com/proxy/1zlL2oGFDmCAd89ydzYi7c_yOzKyDtNiQmRb21UN6qHexlsQJcEcEOxYQk2ZfCaEh4p9L_iICAQjyxZ6RRU_3d6dERoINyfe8VjZRQsd_5p_UbfLUM-UAzIRhu2q=s0-d-e1-ft#https://www.homeloanreport.com.au/images/emails/report/header-top.jpg?!" alt="Home Loan Report" style="border:none;vertical-align:bottom;max-height:41px" width="100%" class="CToWUd">
                  </td>
<td style="text-align:right;color:#95d7e8;font-size:13px;padding-right:5px" width="50%">
                    <span></span>
                  </td>                                    
                </tr>
              </tbody></table>
            </td>
          </tr>
          <tr>
            <td width="100%">
              <img src="https://ci4.googleusercontent.com/proxy/_YiwNH_cFZC_2Ay7yIb0ufTYsS8pzaeO32vI179gDRdn_Rd0Cl2bSTT7Paq2jrS6RAWloH7Av2TNE1Sl7YqT_AjVLkxjEPemPz7wv3DaQZ1pzJx9EZgVilMVeoZCmHUR=s0-d-e1-ft#https://www.homeloanreport.com.au/images/emails/report/header-bottom.jpg?1" alt="Home Loan Report" width="100%" style="border:none;max-height:155px" class="CToWUd">
            </td>
          </tr>
          <tr>
            <td style="padding:20px;color:#444545">
              <p style="margin:10px 0;line-height:140%"> Hi <span style="color:#258da7;font-weight:bold">' . $firstname . '</span>,</p>
              <p style="margin:10px 0;line-height:140%">
                                Thank you for submitting your enquiry, your personalised report is now ready for you. <a href="http://mandrillapp.com/track/click/30248399/www.homeloanreport.com.au?p=eyJzIjoiQnQtUUZwN1FUSVFpWmdjX213VnFpWmVYaGRrIiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5ob21lbG9hbnJlcG9ydC5jb20uYXVcXFwvUmVwb3J0P2lkPTllOGExODgwLTk2YWQtNDE3Mi05Yzg1LTFmYjFlNjc0ZTkyMCZlbWFpbD1uZWNhZmFzdUBnbWFpbC5jb21cIixcImlkXCI6XCJiMTg5ZmI2NTZjMjk0YTY4OWI4OGU1OGZiMGQ1NDdlYlwiLFwidXJsX2lkc1wiOltcIjAwZDNmMzkwZjgzOTNlYzgzOWZlM2FkNDQ2MDYwMDk5YTQ4MzA3OThcIixcImY2NzVhMTgzYWJhZjM0ZjBjOTFmMDBlZDY1ZDU1ZTcxZWFjY2ExMzFcIl19In0" style="color:#258da7;text-decoration:none" target="_blank">View your online report here.</a>
              </p>                     
                            <p style="margin:10px 0;line-height:140%">
                            A broker will be in contact with you shortly to help you understand this report and discuss your requirements and options.  This professional consultation is completely obligation free. <a href="http://mandrillapp.com/track/click/30248399/www.homeloanreport.com.au?p=eyJzIjoiZGQ2RlZyZjZlZnBzX241QkVrZDNraDdNampJIiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5ob21lbG9hbnJlcG9ydC5jb20uYXVcXFwvaG93LWEtaG9tZS1sb2FuLXByb2Zlc3Npb25hbC1jYW4tYmVuZWZpdC15b3VcXFwvXCIsXCJpZFwiOlwiYjE4OWZiNjU2YzI5NGE2ODliODhlNThmYjBkNTQ3ZWJcIixcInVybF9pZHNcIjpbXCIxMTdmYzJmYThmOTI0MjMyMjUzNDE2YTE5MzQ3ZDA0YTU5MmVlNmNjXCIsXCI3NDQ3NWM1MzZiM2Y1MGNjMTMwMzgwNGRhMzg5YmE0Y2I1ZDE5NmM4XCJdfSJ9" style="color:#258da7;text-decoration:none" target="_blank">Read about how a broker can be of benefit to you.</a></p>
            </td>
          </tr>
          <tr>
            <td style="padding:20px">
              <table cellpadding="15" style="font-family:Arial,Helvetica,sans-serif;font-size:18px;background-color:#258da7">
                <tbody><tr>
                  <td>
                    <a href="http://mandrillapp.com/track/click/30248399/www.homeloanreport.com.au?p=eyJzIjoiR1ZVMEdXWlRnUGhiZHoxYUxveHFwM2wydm5rIiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5ob21lbG9hbnJlcG9ydC5jb20uYXVcXFwvUmVwb3J0P2lkPTllOGExODgwLTk2YWQtNDE3Mi05Yzg1LTFmYjFlNjc0ZTkyMCZlbWFpbD1uZWNhZmFzdUBnbWFpbC5jb21cIixcImlkXCI6XCJiMTg5ZmI2NTZjMjk0YTY4OWI4OGU1OGZiMGQ1NDdlYlwiLFwidXJsX2lkc1wiOltcIjAwZDNmMzkwZjgzOTNlYzgzOWZlM2FkNDQ2MDYwMDk5YTQ4MzA3OThcIixcIjgxYWZkODBiODVkZjFkNGFlZjA2ZWEzN2MyNDdmNzczOTYwODM3YTFcIl19In0" style="color:white;padding:15px 0;text-decoration:none;font-weight:bold" target="_blank">VIEW YOUR REPORT &gt;</a>
                  </td>
                  
                </tr>
              </tbody></table>
            </td>
          </tr>        
                    <tr>
            <td style="padding:30px 20px 20px;font-weight:bold;color:#444545">
              <p style="margin:10px 0">Sincerely,</p>
                            
                            <p style="margin:10px 0">Smartline</p>          
            </td>
          </tr>
                    <tr>
            <td style="padding:0 15px 20px">
                            <img src="https://ci5.googleusercontent.com/proxy/DYPBJLQwN_XN50OIUh5cWFC1-ZYTcypb_2bogWn0ZBq4i0cExxfpVMB-CYZUhaOQHM4Fxc8-tq1Cgv6rJmiGByujFIbWZnEaAXVUUxf5EM18Mjx6GJ-DBXc=s0-d-e1-ft#https://www.homeloanreport.com.au/images/brokers/Smartline_logo.png" alt="" style="border:none;max-height:200px" class="CToWUd">
            </td>
          </tr>
          <tr>
            <td style="padding:20px;color:#999999;font-style:italic">
              We want to ensure that your experience with us is positive. Should you have any queries or feedback
              regarding the service, you may
                            <a href="http://mandrillapp.com/track/click/30248399/www.homeloanreport.com.au?p=eyJzIjoiV1Mza19sSUkwMm9ESDZsVGUxUHhqQ0ZzNzlrIiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5ob21lbG9hbnJlcG9ydC5jb20uYXVcXFwvY29udGFjdC11c1xcXC9cIixcImlkXCI6XCJiMTg5ZmI2NTZjMjk0YTY4OWI4OGU1OGZiMGQ1NDdlYlwiLFwidXJsX2lkc1wiOltcImFhNGYxY2NiMjVhOWIyMzA5N2M4ZWU4MjFjY2Q0MDAzNjliNzUxYzVcIl19In0" style="color:#258da7;text-decoration:none" target="_blank">contact us here</a>.
            </td>
          </tr>
                    <tr style="background-color:#f2f2f2">
            <td style="padding:20px">
              <table width="100%" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif">
                <tbody><tr style="font-size:19px">
                  <td style="color:#606060;padding-right:10px">
                                        <p style="margin:8px 0">Looking to <a href="http://mandrillapp.com/track/click/30248399/www.homeguru.com.au?p=eyJzIjoidXFWMWdQT0xsY09hQk5QZkNYcUhGdVIyaF84IiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmhvbWVndXJ1LmNvbS5hdVxcXC8_dXRtX3NvdXJjZT1obHImdXRtX21lZGl1bT1lRE0mdXRtX2NhbXBhaWduPXJlcG9ydGFsZXJ0XCIsXCJpZFwiOlwiYjE4OWZiNjU2YzI5NGE2ODliODhlNThmYjBkNTQ3ZWJcIixcInVybF9pZHNcIjpbXCI3OWZkMDFhMWM3MTg2ZDU2ZDIyNWU5NmM2OTZmZGU0NTc3ODkzNTYyXCIsXCJlZjdiMzE0MWE1MDk0ZmE5Yjg3NDBjNWU4MDkwNmRiYWEzYTFhMTViXCJdfSJ9" style="color:#258da7;text-decoration:none" target="_blank">sell you property?</a></p>
                    <p style="margin:8px 0">Want to find out <a href="http://mandrillapp.com/track/click/30248399/www.homeguru.com.au?p=eyJzIjoidXFWMWdQT0xsY09hQk5QZkNYcUhGdVIyaF84IiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmhvbWVndXJ1LmNvbS5hdVxcXC8_dXRtX3NvdXJjZT1obHImdXRtX21lZGl1bT1lRE0mdXRtX2NhbXBhaWduPXJlcG9ydGFsZXJ0XCIsXCJpZFwiOlwiYjE4OWZiNjU2YzI5NGE2ODliODhlNThmYjBkNTQ3ZWJcIixcInVybF9pZHNcIjpbXCI3OWZkMDFhMWM3MTg2ZDU2ZDIyNWU5NmM2OTZmZGU0NTc3ODkzNTYyXCIsXCJlZjdiMzE0MWE1MDk0ZmE5Yjg3NDBjNWU4MDkwNmRiYWEzYTFhMTViXCJdfSJ9" style="color:#258da7;text-decoration:none" target="_blank">how much it\'s worth?</a></p>
                  </td>
                  <td style="text-align:center" width="260">
                    <table width="100%" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;padding:10px 15px;background-color:#258da7;color:white;font-weight:bold;line-height:130%;font-size:18px">
                      <tbody><tr style="background-color:#258da7">
                        <td>
                          <table width="100%" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif;color:white;background-color:#258da7">
                            <tbody><tr>
                              <td>
                                <a href="http://mandrillapp.com/track/click/30248399/www.homeguru.com.au?p=eyJzIjoidXFWMWdQT0xsY09hQk5QZkNYcUhGdVIyaF84IiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmhvbWVndXJ1LmNvbS5hdVxcXC8_dXRtX3NvdXJjZT1obHImdXRtX21lZGl1bT1lRE0mdXRtX2NhbXBhaWduPXJlcG9ydGFsZXJ0XCIsXCJpZFwiOlwiYjE4OWZiNjU2YzI5NGE2ODliODhlNThmYjBkNTQ3ZWJcIixcInVybF9pZHNcIjpbXCI3OWZkMDFhMWM3MTg2ZDU2ZDIyNWU5NmM2OTZmZGU0NTc3ODkzNTYyXCIsXCJlZjdiMzE0MWE1MDk0ZmE5Yjg3NDBjNWU4MDkwNmRiYWEzYTFhMTViXCJdfSJ9" style="color:white;text-decoration:none;font-weight:bold" target="_blank">GET YOUR COMPLIMENTARY</a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <a href="http://mandrillapp.com/track/click/30248399/www.homeguru.com.au?p=eyJzIjoidXFWMWdQT0xsY09hQk5QZkNYcUhGdVIyaF84IiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwOlxcXC9cXFwvd3d3LmhvbWVndXJ1LmNvbS5hdVxcXC8_dXRtX3NvdXJjZT1obHImdXRtX21lZGl1bT1lRE0mdXRtX2NhbXBhaWduPXJlcG9ydGFsZXJ0XCIsXCJpZFwiOlwiYjE4OWZiNjU2YzI5NGE2ODliODhlNThmYjBkNTQ3ZWJcIixcInVybF9pZHNcIjpbXCI3OWZkMDFhMWM3MTg2ZDU2ZDIyNWU5NmM2OTZmZGU0NTc3ODkzNTYyXCIsXCJlZjdiMzE0MWE1MDk0ZmE5Yjg3NDBjNWU4MDkwNmRiYWEzYTFhMTViXCJdfSJ9" style="color:white;text-decoration:none;font-weight:bold" target="_blank">PROPERTY REPORT</a>
                              </td>
                            </tr>
                          </tbody></table>
                        </td>
                        <td width="20" style="text-align:center">
                          <a href="#15087557935ecb07_" style="color:white;text-decoration:none;font-weight:bold">&gt;</a>
                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </tbody></table>
            </td>
          </tr>

        </tbody></table>
      </td>
    </tr>
    <tr>
      <td>
        <table width="700" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif">
          <tbody><tr>
            <td style="padding:0 10px 10px">
              <table width="100%" align="center" cellpadding="0" cellspacing="0" style="font-family:Arial,Helvetica,sans-serif">
                <tbody><tr style="width:100%">
                  <td style="width:100%;background-color:#0d5f74;height:10px;font-size:8px">&nbsp;</td>
                </tr>
              </tbody></table>
            </td>
          </tr>
          <tr>
            <td style="padding:10px 0;text-align:center;color:#a9e2f3;font-size:14px">
              <a href="http://mandrillapp.com/track/click/30248399/www.homeloanreport.com.au?p=eyJzIjoicDIySXpRMmRVOUdrY3doODVhV3ZhdWdBQk1RIiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5ob21lbG9hbnJlcG9ydC5jb20uYXVcXFwvdGVybXMtYW5kLWNvbmRpdGlvbnNcXFwvXCIsXCJpZFwiOlwiYjE4OWZiNjU2YzI5NGE2ODliODhlNThmYjBkNTQ3ZWJcIixcInVybF9pZHNcIjpbXCIyNWVlYTU4YWMyYTRhOWE4ZDE4Nzk2ZDFjNGYxODViMDhhZDQzYmVkXCJdfSJ9" style="color:#a9e2f3;text-decoration:none" target="_blank">Terms &amp; Conditions</a>
              |
              <a href="http://mandrillapp.com/track/click/30248399/www.homeloanreport.com.au?p=eyJzIjoiZGFIUE5yeFJlMGY0VXE3NEtOMU1lS3dnckpZIiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5ob21lbG9hbnJlcG9ydC5jb20uYXVcXFwvcHJpdmFjeS1wb2xpY3lcXFwvXCIsXCJpZFwiOlwiYjE4OWZiNjU2YzI5NGE2ODliODhlNThmYjBkNTQ3ZWJcIixcInVybF9pZHNcIjpbXCI0MGM4OGUxZWY5MGFkYjc1ZjE1MGQ2NDJhNjNjZTEyZGRjOWFhZjJkXCJdfSJ9" style="color:#a9e2f3;text-decoration:none" target="_blank">Privacy Policy</a>
            </td>
          </tr>
          <tr>
            <td style="padding:0 0 10px;text-align:center;color:#a9e2f3;font-size:13px">
                            You are receiving this email because you requested a report from <a href="http://mandrillapp.com/track/click/30248399/www.homeloanreport.com.au?p=eyJzIjoiS3FNZ3FFVFp1ZUtqcmMyZEt0ZTlJdWd6Mzl3IiwidiI6MSwicCI6IntcInVcIjozMDI0ODM5OSxcInZcIjoxLFwidXJsXCI6XCJodHRwczpcXFwvXFxcL3d3dy5ob21lbG9hbnJlcG9ydC5jb20uYXVcIixcImlkXCI6XCJiMTg5ZmI2NTZjMjk0YTY4OWI4OGU1OGZiMGQ1NDdlYlwiLFwidXJsX2lkc1wiOltcIjI5OTJjYjQ0MjkxYTgwNDUxZTdmYmM2MGIxYTk0YzA5NGMyMTg1MjlcIl19In0" style="color:#a9e2f3;text-decoration:none;font-weight:bold" target="_blank">www.homeloanreport.com.au</a>.<br>
              This email is sent from MediaCell Pty Ltd, Suite 406, 2 Grosvenor St, Bondi Junction, NSW 2022 Australia.<br>
            </td>
          </tr>
        </tbody></table>
      </td>
    </tr>
  </tbody></table>
<img src="https://ci5.googleusercontent.com/proxy/c-CXMBqecNC8tMF4yQFnGrFQOSoD8Yv3fMu-do_cY07rbjrEcrFPUznFxQ5qcgqQK1BaKG3D0l2E1LdGoSYbmeoH-9B65yd_6-m1ZTPVbntlr0dtDuA029HtY6_OKZVmhOUF0v7s8HEDlw=s0-d-e1-ft#http://mandrillapp.com/track/open.php?u=30248399&amp;id=b189fb656c294a689b88e58fb0d547eb" height="1" width="1" class="CToWUd"></div><div class="yj6qo"></div><div class="adL">
</div></div>';

wp_mail( $email , 'NZ Home Appraisal', $html );
wp_send_json( array('success' => true) );