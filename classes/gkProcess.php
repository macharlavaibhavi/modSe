<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	//Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
class gkprocess{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function processData($data){
		$selectedAns        = $this->fm->validation($data['ans']);
		$number               = $this->fm->validation($data['number']);
		$selectedAns        = mysqli_real_escape_string($this->db->link, $selectedAns );
		$number               = mysqli_real_escape_string($this->db->link, $number );
		$next                    = $number+1;
		if(!isset($_SESSION['score'])){
			$_SESSION['score'] = '0';	
		}
		$total = $this->getTotal();
		$right = $this->rightAns($number);
		if($right == $selectedAns ){
			$_SESSION['score']++;
		}
		if($number == $total){
			header("Location:Tecfinal.php");
			exit();
		}else{
			header("Location:Tectest.php?q=".$next);
		}
	}
	private function getTotal(){
		$query = "select * from protbl_que";
		$getResult = $this->db->select($query);
		$total = $getResult->num_rows;
		return $total;
	}
	private function rightAns($number){
		 $query = "select * from protbl_ans where quesNo = '$number' and rightAns = '1'";
		$getdata = $this->db->select($query)->fetch_assoc();
		$result = $getdata['id'];
		return $result;
	}
}
?> 