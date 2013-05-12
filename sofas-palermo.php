<?php include("header.php"); ?>
		
		<div class="product-page-slider">
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider"> 
					<img src="img/carol-white.jpg" alt="" class="editable" id="editable-image-1" /> <!-- editable class makes the images editable in Surreal CMS -->
					<img src="img/carol-red.jpg" alt="" class="editable" id="editable-image-2" /> 
					<img src="img/carol-brown.jpg" alt="" class="editable" id="editable-image-3" />
				</div>
			</div>
		</div>
	  
	  <div class="product-page-content">
			<h2 class="editable" id="editable-region-1">palermo 3+2 sofa set </h2> <!-- editable class makes the h2 tag editable in Surreal CMS -->
			<div class="editable" id="editable-region-2"> <!-- editable class makes the whole description region editable in Surreal CMS -->
				<p>Palermo 3+2 sofa set is a stylish model, which will make your  living room elegant and nice.</p>
				<p>The palermo sofa is made from the highest quality faux leather <br />
					the leather is easy to clean.</p>
				<p><strong>Dimensions:</strong> <br />
				  3 Seater Height: 92cm / Width: 190cm / Depth: 85cm<br />
				2 Seater Height: 92cm / Width: 156cm / Depth: 85cm</p>
				<p><strong>Colors available:</strong> <br />
				Black and white / black and red / brown and cream</p>
				<p class="call"><strong>OUR PRICE £279.00</strong></p>
				<p class="call">Call to order: 07936 013 423</p>
			</div>
	  </div>
		  
<!----------------- Other Available Products ----------------->
	<div id="right_column">
	  <div class="advertising_block">
		<h4>Other Available Sofas</h4>
		<div class="block_content">
			<ul class="clearfix">
			  <li>
				<?php include("thumbnails/thumb-valentina.php"); ?>
			  </li>
			  
			  <li>
				<?php include("thumbnails/thumb-westpoint.php"); ?>
			  </li>
			  
			  <li>
				<?php include("thumbnails/thumb-drive.php"); ?>
			  </li>
			  
			  <li>
				<?php include("thumbnails/thumb-katia.php"); ?>
			  </li>
			</ul>
  		</div>
	  </div>
	</div>
<!----------------- END OF Other available products ----------------->
		  
<?php include("footer.php"); ?>