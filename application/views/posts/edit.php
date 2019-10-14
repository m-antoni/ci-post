<h1><?php echo $title ?></h1>

<?php echo form_open('posts/update')?>
<!-- <form> -->
	<div class="form-group">
		<label>Title</label>
		<input id="editID"type="hidden" name="id" value="<?php echo $post['id'];?>">

		<input id="title" type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
	</div>
	<div class="form-group">
		<label>Title</label>
		<textarea id="body" class="form-control" name="body"><?php echo $post['body']; ?></textarea>
	</div>
	<button type="submit" class="btn btn-dark">Update Post</button>
<!-- </form> -->

	