<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			  <?php foreach ($slider as  $value) { ?>
			  	<div class="item <?php if($value->sort_order=='1') echo 'active'; ?>">
			      <a href="<?php echo $value->link; ?>"><img src="<?php echo base_url(); ?>/upload/slider/<?php echo $value->image_link; ?>" alt="..."></a>
			      <div class="carousel-caption">
			      </div>
			    </div>
			  <?php } ?>
			    
			  </div>
		   </div>
		</div>
