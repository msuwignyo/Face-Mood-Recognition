<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper('form');
    	$this->load->library('form_validation');
    } 

	public function index(){
		$this->load->view('landingPage');
	}

	public function recognize(){
		$this->template->load('tempFront', 'recognize');
	}

	public function get_recognize() {
	    $postdata = file_get_contents("php://input");
		$data = json_decode($postdata, TRUE);
	   	
	   	header('Content-Type: application/json');

		$post_param = $data;
	    $curl = curl_init();

	    curl_setopt_array($curl, array(
	        CURLOPT_RETURNTRANSFER => 1,
	        CURLOPT_URL => 'http://127.0.0.1:5000/',
	        CURLOPT_POST => 1,
	        CURLOPT_POSTFIELDS => $post_param
	    ));
	    
	    $resp = curl_exec($curl);
	    
	    curl_close($curl);

	    echo $resp;
	}

	public function get_recognize_mtcnn() {
	    $postdata = file_get_contents("php://input");
		$data = json_decode($postdata, TRUE);
	   	
	   	header('Content-Type: application/json');

		$post_param = $data;
	    $curl = curl_init();

	    curl_setopt_array($curl, array(
	        CURLOPT_RETURNTRANSFER => 1,
	        CURLOPT_URL => 'http://127.0.0.1:5000/mtcnn',
	        CURLOPT_POST => 1,
	        CURLOPT_POSTFIELDS => $post_param
	    ));
	    
	    $resp = curl_exec($curl);
	    
	    curl_close($curl);

	    echo $resp;
	}
	
	public function start_flask(){
		// system("activate base");
		// echo exec("cd C:\\xampp\\htdocs\\FaceRecog\\pyserver");
		// echo exec("set FLASK_ENV=development");
		// echo exec("flask run");
		// exec('c:\\WINDOWS\\system32\\cmd.exe /c START C:\\xampp\\htdocs\\FaceRecog\\pyserver\\run_server.bat');
		// exec("set FLASK_ENV=development");
		// exec("flask run");
	}
}
?>