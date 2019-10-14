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

		// print_r($data);

		$data['title'] = $data['post']['title'];
		$data['body'] = $data['post']['body'];
		$data['created_at'] = $data['post']['created_at'];

		$this->load->view('templates/header');
		$this->load->view('posts/single', $data);
		$this->load->view('templates/footer');
	}
}