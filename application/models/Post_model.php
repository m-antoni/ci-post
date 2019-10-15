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
			'slug' => url_title(strtolower($this->input->post('title'))),
			'body' => $this->input->post('body')
		);

		return $this->db->insert('posts', $data); // insert query in mysql
	}

	public function update_posts()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => url_title(strtolower($this->input->post('title'))),
			'body' => $this->input->post('body')
		);

		$this->db->where('id', $this->input->post('id'));
		
		$response = array(
			'updated' => $updated = $this->db->update('posts', $data),
			'slug' => url_title(strtolower($this->input->post('title')))
		);

		return $response;
	}

	public function delete_posts($param)
	{	
		$this->db->where('id', $param);
		$this->db->delete('posts');
		return true;
	}

	public function test_data()
	{	
		$this->db->select('title');
		$this->db->from('posts');
		$result = $this->db->get();
		return $result->result();
	}
}