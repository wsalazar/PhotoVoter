<?php

use PDO;

abstract class DBConnect extends PDO{

	protected $dsn;
	protected $db;
	protected $user;
	protected $pass;
	protected $pdo;
	protected $res;

	public function __construct($host, $db, $user, $pass){
		$this->dsn = 'mysql:dbname=' . $db . ';host=' .$host;
		$this->db = $db;
		$this->user = $user;
		$this->pass = $pass;
		parent::__construct($this->dsn,$this->user,$this->pass);
	   $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}