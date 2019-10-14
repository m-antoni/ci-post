<?php

class Post_model extends CI_model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_posts()
	{	
		$this->db->order_by('created_at', 'DESC');
		$query = $this->db->get('posts');
		return $query->result_array();
	} 

	public function get_posts_single($param)
	{
		$this->db->where('slug', $param);
		$result = $this->db->get('posts');

		return $result->row_array();
	}

	public function insert_posts()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => url_title($this->input->post('title'), '-', true),
			'body' => $this->input->post('body')
		);

		return $this->db->insert('posts', $data); // insert query in mysql
	}

	public function delete_posts($param)
	{	
		$this->db->where('id', $param);
		$this->db->delete('posts');
		return true;
	}

	public function update_post()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $this->input->post('title'),
			'body' => $this->input->post('body')
		);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('posts', $data);
	}
}