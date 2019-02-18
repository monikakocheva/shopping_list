<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function index(){}

	public function add(){

		$post = $this->input->post();

		if($post){

			$products = array();

			if(isset($this->session->products)){
				$products = $this->session->products;
			}

			array_push($products, $post);

			$this->session->set_userdata('products', $products);

		}

		redirect('shopping/list');
	}

	public function list(){

		$data = array(
			'products' => array()
		);

		if(isset($this->session->products)){
			$data['products'] = $this->session->products;
		}

		$this->load->view('shopping', $data);

	}

	public function delete(){

		$id = $this->uri->segment(3);

		if(is_numeric($id)){

			$products = $this->session->products;

			unset($products[$id]);

			$products = array_values($products);

			$this->session->set_userdata('products', $products);
		}

		redirect('/shopping/list');

	}
}
