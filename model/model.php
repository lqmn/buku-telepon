<?php

class model{

	public $link;

	function __construct(){
		$this->link = mysqli_connect('localhost','root','','bukutelepon');
		// var_dump($this->link);
	}

	function getTable(){
		$sql = 'SELECT * FROM bukutelepon ORDER BY id ASC';
		$result = mysqli_query($this->link,$sql);
		// var_dump($result);
		$rows = array();
		while ($row = mysqli_fetch_object($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
	function insert($nama,$telp,$email){
		$sql = 'INSERT INTO bukutelepon(Nama,NoTel,Email) VALUES("'.$nama.'","'.$telp.'","'.$email.'")';
		$result = mysqli_query($this->link,$sql);
		return $result;
	}

	function getContact($id){
		$sql = 'SELECT * FROM bukutelepon WHERE ID='.$id;
		$result = mysqli_query($this->link,$sql);
		$data = mysqli_fetch_object($result);
		return $data;
	}

	function delete($id){
		$sql = 'DELETE FROM bukutelepon WHERE ID='.$id;
		$result = mysqli_query($this->link,$sql);
		return $result;
	}

	function edit($id,$nama,$telp,$email){
		$sql = 'UPDATE bukutelepon SET Nama="'.$nama.'", Notel="'.$telp.'", Email="'.$email.'" WHERE ID="'.$id.'"';
		$result = mysqli_query($this->link,$sql);
		return $result;
	}


}