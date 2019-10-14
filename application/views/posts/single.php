<div class="card">
	<div class="card-header">
		<a class="btn btn-primary" href="<?php echo base_url()?>posts">Go back</a>
	</div>
	
	<div class="card-body">
		<h3><?php echo $post['title'];?></h3>
		<p><?php echo $post['body'];?></p>
	</div>
	<div class="card-footer">
		<small>Posted on: <?php echo $post['created_at'];?></small>
	</div>
</div>

<div class="mt-3">
	<div class="btn-group" role="group" aria-label="Basic example">
		<a class="btn btn-secondary pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>">
			Edit
			</a>

		<?php echo form_open('posts/delete/' . $post['id']);?>
		<input class="btn btn-danger ml-3" type="submit" value="Delete">
	</div>
</div>
