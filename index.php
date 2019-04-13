<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Puppy Pics | Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="js/login.js"></script>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
</head>
<body>
	<?php
		session_start();
		$_SESSION = array();
	?>
<div class="header">	
  <div class="wrap"> 
	  <div class="header-top">
		  <div class="header-left">
			 <div class="logo">
				<a href="index.php"><img src="images/Logo.png" alt=""/></a>
			 </div>
			 <div class="cssmenu">
				<ul>
					 <!--li class="active"><a href="index.php"><span>Home</span></a></li>
					 <li><a href="products.html"><span>Products</span></a></li>
					 <<li><a href="services.html"><span>Services</span></a></li>
					 <li class="has-sub"><a href="work.html"><span>My Work</span></a></li>>
					 <li class="last"><a href="contact.html"><span>Contact</span></a></li>
					 <li><a href="cart.php">Cart</a></li-->

					 <div class="clear"></div>
				</ul>
		    </div>
	      </div>
		  <div class="header-right">
			<div id="loginContainer">
				 <span>Newsletter</span><a id="loginButton"><img src="images/plus.png" alt="" /></a>   
				     <div id="loginBox">                
				          <form id="loginForm">
				             <div>
						    	<span><label>E-Mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						     </div>
							 <div>
						   		<span><input type="submit" value="Subscribe"></span>
						     </div>
					      </form>
				      </div>
			  </div>
		    </div>
		    <div class="clear"></div> 
	   </div>
	   <div class="header-bottom">
	   	   <ul class="follow_icon">
				 <li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
				 <li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
				 <li><a href="#" style="opacity: 1;"><img src="images/rss.png" alt=""></a></li>
		   </ul>
		   <!--<div class="banner-img">
		   		<img src="images/Uber-Puppies.jpg" alt=""/>
		   </div>-->
		   <div class="clear"></div> 
	  </div>
   </div>	
</div>
<div class="main">
	<div class="wrap">
		<div class="content-top">
			<div class="cont span_2_of_3">
				 <h3>NEED A BACKGROUND? <span class="red">FUND A PUP!</span></h3>
				 <p>Here at Puppy Pics INC., we strive to enhance your screen time with quality good dog backgrounds. 
				 We work with local animal shelters to help dogs of all shapes and sizes find homes. We strictly provide 
				 desktop backgrounds of dogs that need a home. If you don't have the resources to adopt one of these cuddly
				 pups, buy a desktop photo and fund their shelter!</p>
			</div>
			<div class="rsidebar span_1_of_3">
				 <img src="images/graph.png" alt=""/> 
			</div>
		   	<div class="clear"></div> 
		</div>
<!-- 		<div class="content-middle">
			<div class="our-mission" id="team">
			   <div id="ca-container" class="ca-container">
				  <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								 <h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
									<p>$1.00</p>
									<p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
								</h4>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
								    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								    <p>$1.00</p>
								    <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
							    <h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
									<p>$1.00</p>
									<p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
									<p>$1.00</p>
									<p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
								</h4>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
									<p>$1.00</p>
							        <p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>

								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
									<p>$1.00</p>
									<p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
							        <p>$1.00</p>
									<p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
							        <p>$1.00</p>
									<p><a href="addtocart.php" class="btn btn-primary" role="button">Add to Cart</a></p>
								</h4>								
							 </div>
						</div>
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		</div> -->

	<div>	
		<h1>View Products</h1>		

		<center><table>
			<col width="500">
			<!--<col width="100">-->
			<col width="100">
			<col width="100">
			<col width="300">

			<tr>
			<th> Wallpaper</th>
			<!--<th> Photo ID </th>-->
			<th> Name </th>
			<th> Price </th>
			<th> Description </th>

			</tr>

			<?php 
			//connect to DB
			//include("includes/db_connection.php");
			$cart_id=$_POST['q'];
			include "../../sqlfiles/db_connection.php";
			$q = "SELECT * FROM main";
			$r = $conn->query($q);

			while ($row = $r->fetch_assoc()){
				echo "<tr>";
					//echo('<img alt="' . $row['img'] . '" src="doImage.php?photoID=' . $row['photoID'] . '&resize=280,215" />');
					echo "<td><img src='images/".$row['name'].".jpg'></td>";
					//echo "<td>".$row['photoID']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['price']."</td>";
					echo "<td>".$row['description']."</td>";
					//echo "<td><a onClick=\"javascript: return confirm('Buy item?');\" 
					//           href='buy.php?photoID_TBD=".$row['photoID']."'>Buy Now</a></td>";
					if($row['photoID'] = 123658){
						echo "<td>"
						?>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
							</form>

						</form>
					<?php
					"</td>";
					}
					else{
						echo "<td><a onClick=\"javascript: return confirm('Buy item?');\" 
					//           href='buy.php?photoID_TBD=".$row['photoID']."'>Buy Now</a></td>";
					}
				echo "</tr>";
			}
			?>					
			</table></center>
	</div> <!--content -->

	  </div><br>
	    <!--<div class="content-middle-bottom">
			<div class="our-mission" id="team1">
			   <div id="ca-container1" class="ca-container">
				  <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								 <h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
								    <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<h4>
									<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</span>
								</h4>								
							 </div>
						</div>
					 </div>
			     </div>
				    
					<script type="text/javascript">
						$('#ca-container1').contentcarousel();
					</script>
		</div>
	  </div>-->
	      <!--<div class="bottom-content"> 
	  		    <div class="col_1_of_2 span_1_of_2">
				   <h3>Lorem Ipsum is <span class="red">simply dummy text</span></h3>
				   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
 				</div>
				<div class="col_1_of_2 span_1_of_2">
				   <h3>Lorem Ipsum is <span class="red">simply dummy text</span></h3>
				   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="clear"></div>
	      </div>-->
	      <div class="heading">
	      	<h3>What makes us<span class="red"> DIFFERENT!</span></h3>
	      </div>
	      <div class="sap_tabs">	
			<div id="horizontalTab2">
				  <ul class="resp-tabs-list">
					  <li>Comfort</li>
				 	  <li>Style</li>
					  <li>Design</li>
					  <li>Quality</li>
					  <div class="clear"></div>
				  </ul>				  	 
				  <div class="resp-tabs-container">
					  <div class="tab-1">
						<div class="tab-content">
							<div class="cont span_2_of_3">
								 <h3>Pup Comfort</h3>
								 <p>At Puppy Pics, we ensure the models get a day to be spoiled and pampered before their photo shoots. They are brought to our corporate groomer and spa where they enjoy organic grown dry food followed by a haircut and manicure. Then they are taken to their favorite spot to run around whether it is the park or the beach like Ralph here to the right ->
								 </p>
								 <p>
								 We got the chance to play fetch with this little guy on his day off. As you can see he got a little tuckered out just enough for us to snap this picture!
								 </p>
								 <p>
								 These are the types of happy and natural moments we want to brighten up your day with!
								 </p>
							</div>
							<div class="rsidebar span_1_of_3">
								 <img src="images/bottomPic1.jpg" alt=""/> 
							</div>
						   	<div class="clear"></div> 
						</div>
	    			   </div>
					   <div class="tab-2">
						 <div class="tab-content">
							<div class="cont span_2_of_3">
								 <h3>diam nonummy nibh euismod tincidunt</h3>
								 <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
							</div>
							<div class="rsidebar span_1_of_3">
								 <img src="images/footer-banner.png" alt=""/> 
							</div>
						   	<div class="clear"></div> 
						</div>
					 </div>	
				    <div class="tab-3">
					    <div class="tab-content">
							<div class="cont span_2_of_3">
								 <h3>Lorem Ipsum is simply dummy text </h3>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
							</div>
							<div class="rsidebar span_1_of_3">
								 <img src="images/footer-banner.png" alt=""/> 
							</div>
						   	<div class="clear"></div> 
						</div>
				     </div>	
				     <div class="tab-4">
					     <div class="tab-content">
							<div class="cont span_2_of_3">
								 <h3>diam nonummy nibh euismod tincidunt</h3>
								 <p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
							</div>
							<div class="rsidebar span_1_of_3">
								 <img src="images/footer-banner.png" alt=""/> 
							</div>
						   	<div class="clear"></div> 
						</div>          
				      </div>					      	
		           </div>	        
	        </div>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab2').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
      	  </div>	  	        		
	 </div>
  </div>
  	  <center>
	  	<img src="images/dogInvite.png" alt=""/>
	  </center>
  <div class="footer">
  	   <div class="wrap">
  			<div class="bottom-content">
	  		    <div class="col_1_of_footer span_1_of_footer">
	  		      <div class="footer-logo">
					 <a href="index.php"><img src="images/Logo.png" alt=""/></a>
			 	  </div>
			 	  <div class="footer-border">
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					   <ul class="footer_icon">
						 <li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
						 <li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
						 <li><a href="#" style="opacity: 1;"><img src="images/rss.png" alt=""></a></li>
			  		   </ul>
			  	 </div>
 				</div>
				<div class="col_1_of_footer span_1_of_footer1">
				     <div class="col_1_of_footer span_1_of_footer">
						   <div class="sidebar-nav">
						   	<div class="footer-middle-right">
						   	   <h4>Puppy Pics INC.</h4>
				                <ul>
				                   <li><a href="">Home</a></li>
				                   <li><a href="">Products</a></li>
				                   <!--<li><a href="">Where to buy</a></li>
				                   <li><a href="">About Us</a></li>-->
				                   <li><a href="">Contact Us</a></li>
				               </ul>
		              	    </div>
		              	    </div>
		 				 </div>
						 <div class="col_1_of_footer span_1_of_footer">
						    <div class="sidebar-nav1">
						    	<div class="footer-right">
						   		<h4>About Us</h4>
				                <ul>
				                   <li><a href="">Supporters</a></li>
				                   <li><a href="">Our Team</a></li>
				                   <li><a href="">RSS</a></li>
				                   <li><a href="">Twitter</a></li>
				                </ul>
		              	   </div>
		              	    </div>
						</div>
						<div class="clear"></div>
	       	     </div>
				<div class="clear"></div>
	       </div>
	       <div class="copy">
		      <p class="copy">© 2019 Puppy Pics by Liam T. Grover </p>
	       </div>
  	   </div>
  </div>
</body>
</html>

    	
    	
            