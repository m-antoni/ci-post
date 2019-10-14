<?php

class Posts extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Latest Posts';

		$data['posts'] = $this->Post_model->get_posts();

		// print_r($data['posts']);

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function single($param)
	{

		$data['post'] = $this->Post_model->get_posts_single($param);

		if(empty($data['post'])){
			show_404();
		}

		// get the single post data
		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/single', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		// validation rules 
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		$this->form_validation->set_rules('title', 'Title', 'required|max_length[20]');
		$this->form_validation->set_rules('body','Body','required');

		// check if the validation doesn't run
		if($this->form_validation->run() == FALSE){

			$data['title'] = 'Create Posts';

			// load the view
			$this->load->view('/templates/header');
			$this->load->view('/posts/create', $data);
			$this->load->view('/templates/footer');

		}else{
			// insert data to model
			$this->Post_model->insert_posts();

			redirect('posts');
		}

	}

	public function delete($id)
	{
		$this->Post_model->delete_posts($id);
		redirect('posts');
	}

	public function edit($slug)
	{	
		$data['post'] = $this->Post_model->get_posts_single($slug);

		if(empty($data['post'])){
			show_404();
		}

		$data['title'] = 'Edit Post';

		// load the view
		$this->load->view('/templates/header');
		$this->load->view('/posts/edit', $data);
		$this->load->view('/templates/footer');
	}

	public function update()
	{
		$this->Post_model->update_post();
		redirect('posts');
	}
}