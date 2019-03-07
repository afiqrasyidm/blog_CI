<?php
class Post extends CI_Controller {
		
		public function __construct()
        {
                parent::__construct();
                $this->load->model('post_model');
                $this->load->helper('url_helper');
        }
		
        public function create()
        {
		
			$this->load->helper('form');
			$this->load->library('form_validation');


			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			if ($this->form_validation->run() === FALSE)
			{
					
				$this->load->view('post/create');

			}
			else
			{
				$this->post_model->create();
				$this->load->view('post/success_post');
			}
        }

}