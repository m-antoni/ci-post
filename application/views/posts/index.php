<h1><?php echo $title; ?></h1>

<?php if($this->session->flashdata('create_post')) :;?>
<div class="alert alert-success">
	<?php echo $this->session->flashdata('create_post')?>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	   <span aria-hidden="true">&times;</span>
	</button>
</div>
<?php endif;?>

<?php if($this->session->flashdata('delete_post')) :;?>
<div class="alert alert-success">
	<?php echo $this->session->flashdata('delete_post')?>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	   <span aria-hidden="true">&times;</span>
	</button>
</div>
<?php endif;?>

<hr>

<?php foreach($posts as $post ) : ?>
	<h3><?php echo $post['title'];?></h3>
	<small class="text-danger">Posted on: <?php echo $post['created_at'];?></small>
	<p class="text-justify"><?php echo $post['body']; ?></p>
	<a class="btn btn-dark" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a>
	<hr>
<?php endforeach; ?>