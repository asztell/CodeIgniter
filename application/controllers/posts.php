<?php

class Posts extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('post');
	}
	
	function index() {
		$data['posts']=$this->post->get_posts();
		$this->load->view('post_index',$data);
	}
	
	function post($postID) {
		$data['post']=$this->post->get_post($postID);
		$this->load->view('post',$data);
	}
	
	function new_post() {
		if ($_POST) {
			$data=array(
				'title'=>$_POST['title'],
				'post'=>$_POST['post'],
				'active'=>1
			);
			$this->post->insert_post($data);
			redirect(base_url().'posts');
		} else {
			$this->load->view('new_post');
		}
	}
	
	function editpost($postID) {
		$data['success']=0;
		if ($_POST) {
			$data_post=array(
				'title'=>$_POST['title'],
				'post'=>$_POST['post'],
				'active'=>1
			);
			$this->post->update_post($postID,$data);
			$data['success']=1;
		}
		$data['post']=$this->post>get_post($postID);
		$this->load->view('edit_post',$data);
	}
	
	function deletepost($postID) {
		$this->post->delete_post($postID);
		redirect(base_url().'posts');
	}
}

?>
