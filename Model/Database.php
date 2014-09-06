<?php

class Database extends PDO{
	
	public $config = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'db'   => 'mvcSystem'
	);
	
	public function __construct(){
		$conURL = "mysql:host=" . $this->config['host'] . ";dbname=" . $this->config['db'];
		
		try{
			parent::__construct($conURL, $this->config['user'], $this->config['pass']);
		}catch(PDOException $e){
			$e->getMessage();
		}
	}
}