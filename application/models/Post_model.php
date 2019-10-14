<?php

class Post_model extends CI_model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_posts()
	{
		$query = $this->db->query('SELECT * FROM posts');
		return $query->result_array();
	}

	public function get_posts_single($param)
	{
		$this->db->where('slug', $param);
		$result = $this->db->get('posts');

		return $result->row_array();
	}
}