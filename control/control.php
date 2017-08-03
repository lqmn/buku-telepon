<?php
class control{

	public $model;

	function __construct(){
		$this->model = new model();
		// var_dump($this->model);
	}

	function handleRequest(){
		$this->show();
	}

	function handleAjax(){
		$op= $_GET['op'];

		switch ($op) {
			case 'form':
				$this->form();
				break;
			case 'ins':
				$this->insert();
				break;
			case 'table':
				$this->table();
				break;
			case 'cdel':
				$this->cdel();
				break;
			case 'del':
				$this->del();
				break;
			case 'editform':
				$this->editform();
				break;
			case 'edit':
				$this->edit();
				break;
			default:
				# code...
				break;
		}
	}

	function edit(){
		// var_dump($_POST);
		$result = $this->model->edit($_POST['id'],$_POST['nama'],$_POST['telp'],$_POST['email']);
		if ($result) {
			echo "success";
		}else{
			echo "error";
		}

	}

	function editform(){
		$data = $this->model->getContact($_GET['id']);
		include "view/edit.php";
	}

	function del(){
		// var_dump($_POST['id']);
		$result = $this->model->delete($_POST['id']);
		if ($result) {
			echo "success";
		}else{
			echo "error";
		}

	}

	function cdel(){
		// var_dump($_GET);
		$data = $this->model->getContact($_GET['id']);
		// var_dump($data);
		include "view/confirm.php";
	}

	function table(){
		$data = $this->model->getTable();
		include "view/table.php";
	}

	function form(){
		include "view/form.php";
	}

	function show(){
		$data = $this->model->getTable();
		// var_dump($data);
		include "view/view.php";
	}

	function insert(){
		// echo $_POST['nama'].' '.$_POST['telp'].' '.$_POST['email'];
		$result = $this->model->insert($_POST['nama'],$_POST['telp'],$_POST['email']);
		// var_dump($result);
		if ($result) {
			echo "success";
		}else{
			echo "error";
		}
	}

}

