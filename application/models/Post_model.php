<?php
class Post_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		public function create()
		{
			$this->load->helper('url');

		
			$data = array(
				'judul' => $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi')
			);

			return $this->db->insert('post', $data);
		}
}