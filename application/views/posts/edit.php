<h1><?php echo $title ?></h1>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/edit/'. $post['slug'])?>
<!-- <form> -->
	<div class="form-group">
		<label>Title</label>
		<input type="hidden" name="id" value="<?php echo $post['id'];?>">
		<input id="title" type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
	</div>
	<div class="form-group">
		<label>Title</label>
		<textarea id="body" class="form-control" name="body" rows="4"><?php echo $post['body']; ?></textarea>
	</div>
	<button type="submit" class="btn btn-dark">Update Post</button>
<!-- </form> -->

	