<?php

class DB{
	private $db_obj = '';//数据库连接对象
	private $host = '127.0.0.1';//数据库链接地址
	private $name = 'root';//数据库用户名
	private $password = '';//数据库密码
	private $db_name = 'test';//数据库名称
	
	function __construct(){
		$this->CreateDBConnect();
	}
	
	
	/**
	**数据库链接
	**/
	private function CreateDBConnect(){
		try{
			$this->db_obj = new Mysqli($this->host,$this->name,$this->password,$this->db_name);
		}catch(Exception $e){
			echo '数据库连接错误：'.$db_obj->connect_error();die;
		}
		return $this->db_obj;
	}
	
	/**
	*数据库查询
	**/
	function Select($sql){
		$data = array();
		$result = $this->db_obj->query(trim($sql));
		 while ($row = $result->fetch_assoc()) {
                array_push($data,$row);
         }
        $result->close();
		return $data;
	}
	
	
	/**
	*数据库插入
	**/
	private function Insert(){
		return 1;
	}
	
	/**
	*数据库更新
	**/
	private function Update(){
		return 1;
	}
	
	/**
	*数据库删除
	**/
	private function Delete(){
		return 1;
	}
	
	
	
	
	
	
	
	
	
	
	
	
}