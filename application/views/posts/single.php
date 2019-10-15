<?php if($this->session->flashdata('updated_posts')):;?>
  <div class="alert alert-success">
    <?php echo $this->session->flashdata('updated_posts');?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>

<a class="btn btn-default" href="<?php echo base_url()?>posts">Go back</a>
	
<div class="card my-2">
	<div class="card-body">
		<h3><?php echo $post['title'];?></h3>
		<small class="text-danger">Posted on: <?php echo $post['created_at'];?></small>
		<hr>
		<p><?php echo $post['body'];?></p>
	</div>
</div>

<div class="mt-3">
	<a class="btn btn-secondary" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug'];?>">Edit</a>

	<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>	
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      		<h3>Do you want to delete this post?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php echo form_open('posts/delete/' . $post['id']);?>
			<input class="btn btn-dark" type="submit" value="Confirm">
      </div>
    </div>
  </div>
</div>