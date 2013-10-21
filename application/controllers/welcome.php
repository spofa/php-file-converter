<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            //$this->load->library("toolkit/KALS_object");
            //$this->load->library("toolkit/Generic_object");
            /*
            $this->load->library("object/log");
            $log = new Log();
            $log->set_field('action', "upload");
            //$log->set_field('ip', "154545");
            $log->set_field('bitstream_id', "1");
            //$log->update();
            
            //$this->load->library("upload");
            /*
             * 測試用
            $this->load->database();
            $db = $this->db;
            
            
            // insert user data
            $db->insert('log', array(
                'action' => "upload",
                'ip' => '140.119.61.141',
                'bitstream_id' => 1
            ));
             */
            //$view_data["page_title"] = "PHP File Converter";
            //$view_data["page_title"] = $this->lang->line("page_title");
            
            $converter = $this->config->item("converter");
            $parameters = NULL;
            if (isset($converter["params"])) {
                $parameters = $converter["params"];
            }
            
            
            $this->load->view('component/header');
            $this->load->view('upload_view', array(
                "parameters" => $parameters
            ));
            $this->load->view('component/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */