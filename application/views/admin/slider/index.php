<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active">Slider management</li>
	</ol>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
			<div class="col-md-8">Slider management</div>
			<div class="col-md-4 text-right"><a href="<?php echo admin_url('slider/add'); ?>" class='btn btn-info'><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Insert</a></div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr class="info">					
								<th>Name</th>
								<th>Image</th>
								<th>Link</th>
								<th>Ordinal numbers</th>		
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($slider as $value) { ?>
								<tr>
									<td><strong><?php echo $value->name; ?></strong></td>
									<td><img src="<?php echo base_url(); ?>/upload/slider/<?php echo $value->image_link; ?>" alt="" style="width: 200px;float:left;margin-right: 10px;"></td>
									<td><?php echo $value->link; ?></td>
									<td><?php echo $value->sort_order; ?></td>
									<td class="list_td aligncenter">
							            <a href="../admin/slider/edit/<?php echo $value->id; ?>" title="edit"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
							            <a href="../admin/slider/del/<?php echo $value->id; ?>" title="delete"> <span class="glyphicon glyphicon-remove" onclick=" return confirm('Are you sure you want to delete?')"></span> </a>
								    </td>    
				                </tr>
							<?php } ?>
			    		</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div><!--/.row-->
