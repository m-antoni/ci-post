<h1><?php echo $title ?></h1>


<?php echo validation_errors(); ?>

<?php echo form_open('posts/create')?>
<!-- <form> -->
	<div class="form-group">
		<label>Title</label>
		<input id="title" type="text" name="title" class="form-control" value="<?php echo set_value('title'); ?>">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea id="body" class="form-control" name="body" rows="4"><?php echo set_value('body'); ?></textarea>
	</div>
	<button type="submit" class="btn btn-dark">Submit</button>
<!-- </form> -->

	