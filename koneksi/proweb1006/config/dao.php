<?php
include_once 'dbconfig.php';
class Dao{
	var $link;
	public function __construct(){
		$this->link=new Dbconfig();

	}
	public function read(){
		$query = "select * from users";
		return mysqli_query($this->link->conn,$query);
	}
}