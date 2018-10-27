<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
class gkquestest{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function addQuestions($data){
		$quesNo = mysqli_real_escape_string($this->db->link, $data['quesNo']);
		$ques      = mysqli_real_escape_string($this->db->link, $data['que']);
		
		$ans = array();
		$ans[1] = $data['ans1'];
		$ans[2] = $data['ans2'];
		$ans[3] = $data['ans3'];
		$ans[4] = $data['ans4'];
		$rightAns = $data['rightAns'];
		
		$query = "insert into gktbl_que(quesNo, que) values('$quesNo','$ques')";
		$insert_row = $this->db->insert($query);
		if($insert_row){
			foreach($ans as $key => $ansName){
				if($ansName != ''){
					if($rightAns == $key){
						$rquery = "insert into gktbl_ans(quesNo,rightAns,ans) values('$quesNo','1', '$ansName')";
					}else{
						$rquery = "insert into gktbl_ans(quesNo,rightAns,ans) values('$quesNo','0', '$ansName')";
					}
					$insertrow = $this->db->insert($rquery);
					if($insertrow){
						continue;
					}else{
						die('Error.........');
					}
				}
			}
			$msg = "<span class = 'success'>Question added Successfully.</span>";
			return $msg;
		}
	}
	
	public function getQueByOrder(){
		$query = "select * from gktbl_que order by quesNo ASC";
		$result = $this->db->select($query);
		return $result;
	}
	
	public function delQuestion($quesNo){
		$tables = array("gktbl_que","gktbl_ans");
		foreach($tables as $table){
			$delquery = "delete from $table where quesNo = '$quesNo'";
			$deldata = $this->db->delete($delquery);
		}
		if($deldata){
			$msg = "<span class = 'success'>Data Deleted Successfully</span>";
			return $msg;
		}else{
			$msg = "<span class = 'error'>Data Not Deleted </span>";
			return $msg;
		}
	}
	public function getTotalRows(){
		$query = "select * from gktbl_que";
		$getResult = $this->db->select($query);
		$total = $getResult->num_rows;
		return $total;
	}
	public function getQuestion(){
		$query = "select * from gktbl_que";
		$getdata = $this->db->select($query);
		$result = $getdata->fetch_assoc();
		return $result;
	}
	 public function getQuesByNumber($number ){
		$query = "select * from gktbl_que where quesNo = '$number'";
		$getdata = $this->db->select($query);
		$result = $getdata->fetch_assoc();
		return $result;
	 }
	  public function getAnswer($number){
		$query = "select * from gktbl_ans where quesNo = '$number'";
		$getdata = $this->db->select($query); 
		return $getdata ;
	  }
}
?> 