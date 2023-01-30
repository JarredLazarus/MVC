<?php

class dbConfig
{
	private $host ="localhost";
	private $name ="bi20110224";
	private $pass ="thisisformydatabase";
	private $db = "project2";
	protected $conn = null;

	public function __construct()
	{
		try {
			 $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->name, $this->pass);
		} catch (PDOException $e){
			echo $e->getMessage();
		}
	}
}
?>