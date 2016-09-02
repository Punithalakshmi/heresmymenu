<?php
/**
 * Template Name: Homepage Template
 * Description: A home page with slider and widgets.
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 * 
 * @package Frozr
 * @subpackage Templates
 */

    // calling the header.php
    get_header();
	
	?>
		<div id="container" >
		
				<div id="content">			
            	
            	<div>
            		<h2>ABOUT US</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<p>
						<img src="http://162.144.41.156/~izaapinn/heresmymenu/wp-content/uploads/2016/08/cheff-300x265.jpg" alt="cheff" width="300" height="265" class="alignnone size-medium wp-image-2588" />
            	
            	</div>
            	
            	<? frozr_below_indexloop(); ?>
				
				<div>
					<h2>BOOK TABLE</h2>
						<span>+123-4567-890</span><br/>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text.</p>
						<p>Monday to Tuesday</p>
						<span>09:00 am - 22.00 pm</span> <br/>

				<input type="button" value="BOOK NOW"><br/>
				<img class="alignnone size-full wp-image-2597" src="http://162.144.41.156/~izaapinn/heresmymenu/wp-content/uploads/2016/08/imgpsh_fullsize-1.png" alt="imgpsh_fullsize" width="2000" height="753" />
				</div>

				<div>
					<h2>NEWSLETTER</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard dummy text.</p>
            		<?php es_subbox( $namefield = "Yes", $desc = "", $group = "" ); ?>
            	</div>

            	<div>
            		<img src="http://162.144.41.156/~izaapinn/heresmymenu/wp-content/uploads/2016/08/mobil-236x300.png" alt="mobil" width="236" height="300" class="alignnone size-medium wp-image-2594" />
            		<h3>Looking for the Food Feed? Get the app!</h3><br/>
            			<p>Follow foodies to see their reviews and photos in your Feed,and discover great new restaurants!
            			   We'll send you a link,open it on your phone to download the app</p>
            	</div>

			</div><!-- #content -->

		</div><!-- #container -->

<?php   
    // calling footer.php
    get_footer(); 
?>