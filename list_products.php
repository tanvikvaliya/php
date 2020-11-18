<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie" lang="en" dir="ltr"><![endif]-->
<!--[if gt IE 8]> <html class="no-js gt-ie8 ie" lang="en" dir="ltr"><![endif]-->


<!-- Mirrored from wireframes.php-dev.in/training/v1.2/php/assignment/list_products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 11:03:21 GMT -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.html" />
<title>Vital Partners Leading Dating and Introduction Agency in Sydney &amp; Canberra</title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all">
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all">
<!--<link href="css/small-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/medium-resolution.css" rel="stylesheet" type="text/css" media="all">
<link href="css/high-resolution.css" rel="stylesheet" type="text/css" media="all">-->

<!-- jQuery library (served from Google) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$('#chkall').on('click',function(){
         if(this.checked){
             $('.case').each(function(){
                 this.checked = true;
             });
         }else{
              $('.case').each(function(){
                 this.checked = false;
             });
         }
     });

     $('.case').on('click',function(){
         if($('.case:checked').length == $('.case').length){
             $('#chkall').prop('checked',true);
         }else{
             $('#chkall').prop('checked',false);
         }
     });
});
</script>

<!-- bxSlider CSS file -->
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet" />



</head>

<body>
<!--wrapper-starts-->
<div id="wrapper">

 <!--header-starts-->
  <header class="clearfix">

    <div class="container"><!--container Start-->

		<div class="Logo_Cont left"><!--Logo_Cont Start-->

           <a href="index.html"><img src="images/logo.png" alt=""  /></a>

        </div><!--Logo_Cont End-->

		<div class="Home_Cont_Right right"><!--Home_Cont_Right Start-->

            <div class="Home_Cont_Right_Top left"><!--Home_Cont_Right_Top Start-->

				 <div class="Top_Search1 left">Call Us Today! (02) 9017 8413</div>
				 <div class="Top_Search2 right">
				 	<input  id="tags1" name="" type="text" onclick="this.value='';" onblur="validate_field('phone');"  value="Type desired Job Location" />
				 </div>

        	</div><!--Home_Cont_Right_Top End-->

			<div class="Home_Cont_Right_Bottom left"><!--Home_Cont_Right_Bottom Start-->
				<div class="toggle_menu"><a href="javascript:void(0)">Menu</a></div>
                 <div id= "topMenu">
                 	<ul>
                 		<li><a href="index.html">Home</a></li>
                 		<li><a href="blog_index.html">Dating Blog</a></li>
                 		<li><a href="who_we_help.html">Who We Help</a></li>
                 		<li><a href="why_vital.html">Why Vital</a></li>
                 		<li><a href="reviews.html">Reviews</a></li>
                 		<li><a href="contact_us.html">Contact Us</a></li>
                 	</ul>
                 </div>

        	</div><!--Home_Cont_Right_Bottom End-->

        </div><!--Home_Cont_Right End-->

	</div><!--container End-->

  </header>
  <!--header-ends-->

  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Manage Category</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
  <form method="POST" enctype="multipart/form-data" action="dlt.php">
  <div class="section content_section">
	<div class="container">
		<div class="filable_form_container">
			<div class="mange_buttons">
				<ul>
					<!--<li class="search_div">
				 <div class="Search">
				 	<input name="search" type="text" />
				 	<input type="submit" class="submit" value="submit">
				 </div>
					</li>-->
					<li><a href="add_product.php">Create Product</a></li>
					<li><button type="submit" style="border:none;background:none;" ><a>Delete </a></button></li>
				</ul>
			</div>
			<div class="table_container_block">
				<table width="100%" id="table">
					<thead>
						<tr>
						<th width="10%">
							<input type="checkbox" name="check_all[]" id="chkall" value="<?php echo $row['id']; ?>"  /> <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample18"></label>
						</th>
						<th style="">Product Name <!--<a href="#" class="sort_icon"><img src="images/sort.png"></a>--></th>
						<th style="">Product Image</th>
						<th style="">Product Price</th>
						<th style="">Product Category <!--<a href="#" class="sort_icon"><img src="images/sort.png"></a>--></th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $servername = "localhost";
                          $username = "tanvik";
                          $password = "root";
                          $dbname = "cateDB";

                        // Create connection
                        $con = new mysqli($servername, $username, $password, $dbname);
                        $result = mysqli_query($con,"SELECT * FROM product order by id desc");
												$results_per_page = 2;
												$number_of_result = mysqli_num_rows($result);


												$number_of_page = ceil ($number_of_result / $results_per_page);
												if (!isset ($_GET['page']) ) {
										        $page = 2;
										    } else {
										        $page = $_GET['page'];
										    }
												 $page_first_result = ($page-1) * $results_per_page;
												 $query1 = "SELECT * FROM product order by id desc LIMIT " . $page_first_result . ',' . $results_per_page;
 											 	$result1 = mysqli_query($con, $query1);

                            while($row = mysqli_fetch_array($result1))
                            {

                            echo "<tr>";
                            ?>
                            <td>
                              <input type="checkbox" name="chk[]" value="<?php echo $row['id']; ?>" class="case" /> <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample19"></label>
                            </td>
                            <?php
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td> <img src=" . $row['pimage'] . " height=150px width=150px alt=Unavailable></td>";
                            echo "<td>" . $row['price'] . ".00</td>";
                            echo "<td>" . $row['cat_name'] . "</td>";
                        ?>
                            <td>
								<div class="buttons">
								  <a href="dlt.php?did=<?php echo $row['id'] ?>" class="btn btn_edit" name="dltbtn">Delete</a>
								  <button class="btn btn_delete" >Edit</button>
								</div>
                            </td>
                        <?php
                            echo "</tr>";
                            }
                        ?>

					</tbody>
				</table>
			</div>

			<div class="pagination_listing">
				<ul>
					<?php
					for($page = 1; $page<= $number_of_page; $page++) {
			 			echo '<li><a href = "list_products.php?page=' . $page . '">' . $page . ' </a></li>';
	 				}
					?>

				</ul>
			</div>

		</div>
	</div>
  </div>
</form>
  <!-- Content Section End-->




<div class="section clearfix section-colored7"><!--section start-->

	<div class="container"><!--container Start-->

		<div class="Download_Cont_Top_Left left"><!--Download_Cont_Top Start-->
			<img src="images/icon5.png" alt=""> <h1 style="display:inline;">FREE: Men Are From Mars</h1> <a href="#">Download Now</a>

		</div><!--Download_Cont_Top End-->

	</div><!--container End-->

</div><!--section End-->




 <!--footer-starts-->
  <footer class="footer_wrapper">

    <div class="container"><!--container Start-->

		<div class="Footer_Cont_Top clearfix"><!--Footer_Cont_Top Start-->

			<span class="left"><img src="images/foot_logo.png" alt=""></span>
			<p class="right">Shortcut your search to happiness right now.
Live a life without regrets and take action today!</p>
		</div><!--Footer_Cont_Top End-->

		<div class="Footer_Cont_Top2 clearfix"><!--Footer_Cont_Top2 Start-->

			<h1>Call Us Today! (02) 9017 8413</h1>
			 <a href="#">Book an Appointment <img src="images/icon7.png" alt=""></a>
 			 <a href="#">Contact a Consultant <img src="images/icon6.png" alt=""></a>
		</div><!--Footer_Cont_Top2 End-->

		<div class="Footer_Cont_Top3 clearfix"><!--Footer_Cont_Top3 Start-->

			<div class="Foot_Link1"><!--Foot_Link1 Start-->

				<h1>CONTACT INFO</h1>

				<div class="Foot_Link2"><!--Foot_Link2 Start-->

				  <span>4/220 George St, Sydney NSW 2000</span>
				  <p>Phone: (02) 9017 8413</p>
				  <p>Email: <a href="mailto:info@syd.vitalpartners.com.au" target="_blank">info@syd.vitalpartners.com.au</a></p>

				</div><!--Foot_Link2 End-->

				<div class="Foot_Link2"><!--Foot_Link2 Start-->

				  <span>Canberra City Act 2600 </span>
				  <p>Phone: (02) 9017 8426</p>
				  <p>Email: <a href="mailto:can@syd.vitalpartners.com.au" target="_blank">can@syd.vitalpartners.com.au</a></p>

				</div><!--Foot_Link2 End-->

			</div><!--Foot_Link1 End-->

			<div class="Foot_Link1"><!--Foot_Link2 Start-->
				<h1>RECENT POSTS</h1>

				<div class="Foot_Link3"><!--Foot_Link3 Start-->
					<ul>
						<li><a href="#">How to Recover After a Bad Date</a></li>
                        <li><a href="#">Review | Vital Partners Review</a></li>
                        <li><a href="#">Review | Vital Partners Review</a></li>
                        <li><a href="#">Review | Vital Partners Derek and Julie</a></li>
                        <li><a href="#">7 Rules for a Happy Relationship | Vital Partners Dating Sydney</a></li>
					</ul>
				</div><!--Foot_Link3 End-->

			</div><!--Foot_Link1 End-->

			<div class="Foot_Link1"><!--Foot_Link2 Start-->
				<h1>RECENT TWEETS</h1>

				<div class="Foot_Link4"><!--Foot_Link4 Start-->
					<ul>
						<li class="left">
							<p>Are you being vulnerable to find love? via offline dating agency Sydney Canberra Vital Partners </p>
			             <div class="Page_Link left"><a  href="#">http://t.co/hGCgHEU6If</a></div>
						 <div class="Page_Link right"> 1 week ago</div>
					    </li>
                      <li class="left">
							<p>Are you being vulnerable to find love? via offline dating agency Sydney Canberra Vital Partners </p>
			             <div class="Page_Link left"><a  href="#">http://t.co/hGCgHEU6If</a></div>
						 <div class="Page_Link right"> 2 week ago</div>
					    </li>
					</ul>
				</div><!--Foot_Link4 End-->

			</div><!--Foot_Link2 End-->


		</div><!--Footer_Cont_Top3 End-->

	</div><!--container End-->

    <div class="section clearfix section-colored9"><!--section section-colored9 start-->

        <div class="container"><!--container Start-->

          <div class="Foot_Link5 left"><!--Foot_Link5 Start-->
				&copy; VitalPartners.com.au
		  </div><!--Foot_Link5 End-->

			<div class="Foot_Link6 left"><!--Foot_Link5 Start-->
				<a href="contact_us.html">Contact</a> |  <a href="terms_of_use.html">Terms of Use</a> |   <a href="privacy_policy.html">Privacy Policy</a> |  <a href="disclaimer.html">Disclaimer</a>
            </div><!--Foot_Link6 End-->


			<div class="Foot_Link7 right"><!--Foot_Link7 Start-->
				<span>FOLLOW US:</span>

				<ul class="social_media">
					<li><a href="#" class="fb">facebook</a></li>
					<li><a href="#" class="twitter">Twitter</a></li>
					<li><a href="#" class="linkedin">LinkedIn</a></li>
					<li><a href="#" class="you_tube">You Tube</a></li>
					<li><a href="#" class="gplus">googl plus</a></li>
				</ul>


				<!-- <p><a href="#"><img src="images/icon10.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon11.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon12.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon13.png" alt=""></a></p>
                <p><a href="#"><img src="images/icon14.png" alt=""></a></p> -->
			</div><!--Foot_Link7 End-->

      </div><!--container End-->

    </div><!--section section-colored9 End-->

    <div class="section section-colored10"><!--section section-colored9 start-->

        <div class="container"><!--container Start-->
			<div class="Foot_Link8 "><!--Foot_Link8 Start-->
			<a href="#">Who Designed This Site?</a> <a href="#">Who  Built This Site?</a>
			</div><!--Foot_Link8 End-->
		</div><!--container End-->

    </div><!--section section-colored9 End-->
  </footer>
  <!--footer-ends-->

  <!-- Sticky Contact Number Start
  <div class="fixed_contact_number">
  	<div class="container">
  		<div class="contact_number">
  			<span>Call Us Today! (02) 9017 8413</span>
  			<a href="contact_us.html">Conatct Us</a>
  		</div>
  	</div>
  </div>
   Sticky Contact Number End-->

</div>
<!--wrapper-starts-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.select').each(function(){
		  var title = $(this).attr('title');
		  if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
		  $(this).css({'z-index':10,'opacity':0,'-khtml-appearance':'none'}).after('<span class="select">' + title + '</span>').change(function(){
			val = $('option:selected',this).text();
			$(this).next().text(val);
		  })
		});
	});
</script>
</body>

<!-- Mirrored from wireframes.php-dev.in/training/v1.2/php/assignment/list_products.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 11:03:44 GMT -->
</html>
