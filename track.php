<html lang="en-US" class="csstransforms csstransforms3d csstransitions js_active  vc_desktop  vc_transform  vc_transform " style="height: 100%;">
    <?php include 'head.php'; ?>   
    <body class="page-template page-template-page-templates page-template-template-fullwidth page-template-page-templatestemplate-fullwidth-php page page-id-8 preview1 wpb-js-composer js-comp-ver-6.6.0 vc_responsive" style="position: relative; min-height: 100%; top: 0px;">
      <div id="preloader" style="display: none;"></div>
      <div id="wrapper">
         <!-- header begin -->
          <?php include 'header.php'; ?>
         <!-- header close -->

         <!-- subheader begin -->
         <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5" style="background-image: url(&quot;https://www.zenithlogisticservices.com/wp-content/uploads/2016/01/bg-subheader-5.jpg&quot;); background-position: 50% 225.5px;">
            <div class="overlay">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h1>Track  <span>Your Package Info</span> </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: flipInY;"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subheader close -->

         <div class="clearfix"></div>
         <section style="background-color: #1a1e20;" class="wpb_row vc_row-fluid vc_custom_1462173519664 vc_row-has-fill">
            <div class="row">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper  ">
                        <div class="wpb_text_column wpb_content_element  vc_custom_1462173533085">
                           <div class="wpb_wrapper">
                              <div class="container">
                                 <div class="row">

                                 <style>
                                    table {
                                    font-family: arial, sans-serif;
                                    border-collapse: collapse;
                                    width: 100%;
                                    }

                                    td, th {
                                    border: 1px solid #dddddd;
                                    text-align: left;
                                    padding: 8px;
                                    }

                                    tr:nth-child(even) {
                                    background-color: #dddddd;
                                    }
                                    #shipment {
                                       display: none;
                                    }
                                 </style>
                                    <div class="col-md-8 col-md-offset-2">
                                       <div id="search-container" data-wow-duration="1s" data-wow-delay="0s" class="cta-form wow fadeIn" style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeIn;">
                                          
                                             <input type="text" value="" name="s" id="tracking-number" placeholder="Insert tracking number here...">
                                             <input id="submit-tracking" type="submit"  value="TRACK IT" name="submit"> 
                                             <img id="loader-btn" style="display: none;" class="ajax-loader" src="https://www.zenithlogisticservices.com/wp-content/plugins/gocargo-shipment/include/admin/assets/images/loader.gif" alt="Sending ...">
                                             <input type="hidden" name="post_type" value="gocargo_shipment"> 
                                          
                                          <div class="clearfix"></div>

                                       </div>
                                    </div>
                                    <div id="shipment">
                                       <div class="row">
                                          <div style="margin-top: 20px; color: #fff; font-size: 20px; font-weight: 700;" id="trackingId" class="col-md-12">

                                          </div>
                                          <div class="col-md-6">
                                          <div style="font-size: 17px; font-weight: 700; display: flex; align-items: center; justify-content: center; height: 40px; background-color: #D03232; margin-top: 20px; color: #fff;">Shipping Information</div>
                                          <table id="to1" style="width:100%; color: #000; margin-top: 20px; background-color: #fff; ">
                                             <tr>
                                               <th>Shipping Date</th>
                                               <th id="ship-date">6th April 2016</th>
                                             </tr>
                                             <tr>
                                               <td>Shioper's Name</td>
                                               <td id="ship-name">Dare</td>
                                             </tr>
                                             <tr>
                                               <td>Address</td>
                                               <td id="ship-address">23, More street Isolo</td>
                                             </tr>
                                           </table>
                                          </div>
                                       
                                          <div class="col-md-6">
                                          <div style="height: 40px; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 700; background-color: #E8A317; color: #fff; margin-top: 20px;">Delivery Information</div>
                                           <table id="to1"  style="width:100%; color: #000; margin-top: 20px; background-color: #fff; ">
                                             <tr>
                                               <th>Delivery Date</th>
                                               <th id="delivery-date">6th April 2016</th>
                                             </tr>
                                             <tr>
                                               <td>Receiver's Name</td>
                                               <td id="delivery-name">Dare</td>
                                             </tr>
                                             <tr>
                                               <td>Address</td>
                                               <td id="delivery-address">23, More street Isolo</td>
                                             </tr>
                                           </table>
                                          </div>

                                          <div class="col-sm-12">
                                          <table id="to1" style="width:100%; color: #000; margin-top: 20px; background-color: #fff; ">
                                             <tr>
                                               <th>Package content/Description</th>
                                               <th>Weight</th>
                                             </tr>
                                             <tr>
                                               <td id="ship-content">Shiper's Name</td>
                                               <td id="delivery-weight">Unspecified</td>
                                             </tr>
                                           </table>
                                       </div>
                                       <div class="col-sm-12">
                                           <table id="to1" style="width:100%; color: #000; margin-top: 20px; background-color: #fff; ">
                                             <tr>
                                               <th>Package Status</th>
                                               <th>Service Type</th>
                                             </tr>
                                             <tr>
                                               <td id="ship-status">Door to door</td>
                                               <td id="delivery-type">Unspecified</td>
                                             </tr>
                                           </table>
                                    </div>
                                    <div style="margin-top: 20px; display: block;" id="history" class="col-sm-12">
                                    <div class="wrapper-line padding40 rounded10">
                                    <h4 style="color: #fff; font-size: 20px; font-weight: 700;" class="head">Shipment Progress</h4>
	<ul class="progress">
		<li>Accepted</li>
		<li class="beforeactive">Order Processing</li>
		<li class="active">Shipment Pending</li>
		<li>Estimated Delivery</li>
	</ul>
	<div class="divider-double"></div>
	<ul id="history-m" class="timeline custom-tl">
		<li class="timeline-inverted">
			<div data-wow-delay=".2s" class="timeline-date wow zoomIn" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Nov 03, 2015<span>22:07 pm</span>
			</div>
			<div class="timeline-badge success">
				<i class="fa fa-check-square-o wow zoomIn" style="visibility: visible; animation-name: zoomIn;"></i>
			</div>
			<div data-wow-delay=".6s" class="timeline-panel wow fadeInRight" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
				<div class="timeline-body"> The shipment has been successfully delivered <span class="location">Baker Street, UK                          
						<a class="popup-gmaps" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">view on map</a>
					</span>
				</div>
			</div>
      </li>
      
		<li class="timeline-inverted">
			<div data-wow-delay=".2s" class="timeline-date wow zoomIn" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                        Nov 03, 2015                                        
				<span>20:07 pm</span>
			</div>
			<div class="timeline-badge warning">
				<i class="fa fa-exclamation-triangle wow zoomIn" style="visibility: visible; animation-name: zoomIn;"></i>
			</div>
			<div data-wow-delay=".6s" class="timeline-panel wow fadeInRight" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
				<div class="timeline-body">
                                            The shipment could not be delivered                                            
					<span class="location">Baker Street, UK 
                                                
						<a class="popup-gmaps" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">view on map</a>
					</span>
				</div>
			</div>
		</li>
	</ul>
	<div class="divider-double"></div>
</div>

                                    </div>
                                    
                                 </div>
                                       </div>
                                 </div>
                              </div>
                              <div class="light-text" id="section-tracking-result"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </section>
         <!-- footer begin -->
         <?php include 'footer.php'; ?>
         <!-- footer close -->
      </div>
      <!-- #wrapper -->
      <?php include 'script.php'; ?>
      <script>

function getIcon(status) {
   if (status == 1) {
      return '<div class="timeline-badge"><i class="fa fa-plane wow zoomIn" style="visibility: visible; animation-name: zoomIn; margin-top: 15px;"></i></div>';
   }

   if (status == 2) {
      return '<div class="timeline-badge warning"><i class="fa fa-exclamation-triangle wow zoomIn" style="visibility: visible; animation-name: zoomIn; margin-top: 15px;"></i></div>';
   }

   if (status == 3) {
      return '<div class="timeline-badge success"><i class="fa fa-check wow zoomIn" style="visibility: visible; animation-name: zoomIn; margin-top: 15px;"></i></div>';
   }
}
$('#submit-tracking').click(function() {
    $('#shipment').hide();
    const trackingNumber = $('#tracking-number').val();
    console.log(trackingNumber);
    if (!trackingNumber || trackingNumber.length != 15) {
        return;
    }

    $('#submit-tracking').css('disabled', true);
    $('#submit-tracking').css('cursor', 'default');
    $('#submit-tracking').val('Loading..');
    $('#loader-btn').show();
    $.ajax('https://admin.zedlogisticservices.com/get-shipmentInfo', { data: {tracking_number: trackingNumber},
    type: 'POST',  success: function(result) {
        $('#submit-tracking').css('disabled', false);
        $('#loader-btn').hide();
        $('#submit-tracking').val('TRACK IT');
        $('#submit-tracking').css('cursor', 'pointer');
        response = result;
        console.log(result);
        if (response.success) {
            $('#shipment').show();
            const data = response.data
            let history = {};
            let date;
            data.history.reverse();
            data.history.forEach(function(item) {
                date = item.date_created.split(' ')[0];
                if (date in history) {
                    history[date].push(item);
                } else {
                    history[date] = [item];
                }
            });

            console.log(history);

            $('#ship-date').text(data.shipment.ship_date);
            $('#ship-name').text(data.shipment.shipper_name);
            $('#ship-content').text(data.shipment.content);
            $('#ship-status').text(data.shipment.status);
            $('#ship-address').text(data.shipment.shipper_address);

            $('#delivery-date').text(data.shipment.delivery_date);
            $('#delivery-name').text(data.shipment.receiver_name);
            $('#delivery-weight').text(data.shipment.weight);
            $('#delivery-type').text(data.shipment.type);
            $('#delivery-address').text(data.shipment.receiver_address);
            const $history = $('#history-m');
            $history.empty();
            // $('#history').append('<h4 style="color: #fff; font-size: 20px; font-weight: 700;" class="head">Shipment Progress</h4>');
            $('#trackingId').text('Tracking Number:   ' + trackingNumber);
            let html;
            if (data.history) {
                for (let key in history) {
                    dateHistory = history[key];
                    
                    // $history.append('<div class="col-sm-12" style="height: 30px; display: flex; align-items: center; justify-content: left; font-size: 17px; font-weight: 700; background-color: #E8A317; color: #000; margin-top: 20px;">' + key + '</div>');
                    dateHistory.forEach((item) => {
                        $historyHtml = '<li class="timeline-inverted"><div data-wow-delay=".2s" class="timeline-date wow zoomIn" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">' + new Date(item.date_created).toDateString() + '<span></span></div>';
			               $historyHtml += getIcon(item.status);
			               $historyHtml += '<div data-wow-delay=".6s" class="timeline-panel wow fadeInRight" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">';
                        $historyHtml += '<div class="timeline-body">' +  item.description + '<span class="location">' + item.location +  '<a class="popup-gmaps" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">view on map</a></span>';
                        $historyHtml += '</div></div></li>';
                        $history.append($historyHtml);
                    });
                }
            } else {
                $history.append('<div><span class="l">No History Yet</span></div>')
            }

        } else {
         $('#loader-btn').hide();
            console.log('I got here o!!!');
            // $('#m-success').css('display', 'block');
            // setTimeout(function() {
            //     $('#m-success').css('display', 'none');
            // }, 2000);
        }
    }})
});
    </script>
   </body>
</html>