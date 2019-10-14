<div class="card">
	<div class="card-header">
		<a class="btn btn-primary" href="<?php echo base_url()?>posts">Go back</a>
	</div>
	
	<div class="card-body">
		<h3><?php echo $title;?></h3>
		<p><?php echo $body;?></p>
	</div>
	<div class="card-footer">
		<small>Posted on: <?php echo $created_at;?></small>
	</div>
</div>