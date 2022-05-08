<?php
 class User extends CI_controller{
 	function index(){
 		$this->load->model('User_model');
 		$teacher=$this->User_model->all();
 		$data = array();
 		$data ['teacher']= $teacher;
 		$this->load->view('list',$data);

 	}

 	function create(){
 		$this->load->model('User_model');
 		$this->form_validation->set_rules('name','Name','required');
 		$this->form_validation->set_rules('age','Age','required');
 		$this->form_validation->set_rules('phone_no','Phone Number','required');
 		$this->form_validation->set_rules('subject','Subject','required');

 		if($this->form_validation->run()== false)
 		{
 		$this->load->view('create');
 		}
 		else
 		{
 			$formArray = array();
 			$formArray['name'] = $this->input->post('name');
 			$formArray['age'] = $this->input->post('age');
 			$formArray['phone_no'] = $this->input->post('phone_no');
 			$formArray['subject'] = $this->input->post('subject');
 			$formArray['created-at'] = date('Y-m-d');
 			$this->User_model->create($formArray);
 			$this->session->set_flashdata('success','Record added successfully!');
 			redirect(base_url().'index.php/user/index');
 		}
 	}
 	function edit($id)
 	{
 		$this->load->model('User_model');
 		$teacher = $this->User_model->getUser($id);
 		$data = array();
 		$data ['teacher']= $teacher;
 		$this->form_validation->set_rules('name','Name','required');
 		$this->form_validation->set_rules('age','Age','required');
 		$this->form_validation->set_rules('phone_no','Phone Number','required');
 		$this->form_validation->set_rules('subject','Subject','required');
 		if($this->form_validation->run()== false)
 			{
 				$this->load->view('edit',$data);
 			} else
 			{
 				$formArray= array();
 				$formArray['name']= $this->input->post('name');
 				$formArray['age']= $this->input->post('age');
 				$formArray['phone_no']= $this->input->post('phone_no');
 				$formArray['subject']= $this->input->post('subject');
 				$this->User_model->updateUser($id,$formArray);
 				$this->session->set_flashdata('success','Record updated successfully!');
 				redirect(base_url().'index.php/user/index');
 			}
 		
 	}
 	function delete($id)
 	{
 		$this->load->model('User_model');
 		$teacher = $this->User_model->getUser($id);
 		if(empty($id))
 		{
 			$this->session->set_flashdata('failure','Record not found in database');
 				redirect(base_url().'index.php/user/index');
 		}

 		$this->User_model->deleteUser($id);
 		$this->session->set_flashdata('success','Record deleted successfully!');
 				redirect(base_url().'index.php/user/index');
 	}

 }	
?>
