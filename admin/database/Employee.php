<?php
class Employee
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}
	public function aboutus(){
		$result =$this->db->con->query("SELECT * FROM aboutus");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function aboutupdate($id,$title,$paragraph,$new_filename){
				if(!$new_filename==''|| !$new_filename==null){
		$result =$this->db->con->query("UPDATE aboutus SET Title='".$title."',Paragraph='".$paragraph."',Image='".$new_filename."' WHERE ID=".$id);
	}else{
	$result =$this->db->con->query("UPDATE aboutus SET Title='".$title."',Paragraph='".$paragraph."' WHERE ID=".$id);
	}
		return $result;
	
	}
		public function inserteply($title,$paragraph,$new_filename){
		$sql="INSERT INTO employee(Image,Title,Paragraph) VALUES ('$new_filename','$title','$paragraph')";
		$result = mysqli_query($this->db->con,$sql) or die(mysqli_error($this->db->con));
		return $result;
	}
		public function employeedata(){
		$result =$this->db->con->query("SELECT * FROM employee");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function employeedatabyid($id){
		$result =$this->db->con->query("SELECT * FROM employee WHERE ID=".$id);
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function updateabout($id,$title,$paragraph,$new_filename){
		if(!$new_filename==''|| !$new_filename==null){
		$result =$this->db->con->query("UPDATE employee SET Image='".$new_filename."',Title='".$title."',Paragraph='".$paragraph."' WHERE ID=".$id);
	}else{	
		$result =$this->db->con->query("UPDATE employee SET Title='".$title."',Paragraph='".$paragraph."' WHERE ID=".$id);
		}
		return $result;
	
	}
}


?>