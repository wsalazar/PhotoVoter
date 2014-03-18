<?php

class Request{

	private $params = array();

	public function setPostParams($params){
		foreach($params as $key => $value){
			$this->params[$key] = $this->satinizeValues($value);
		}
	}
	public function satinizeValues($value){
		return basename($value);
	}
	public function isPost(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			return true;
		}
	}

	public function isGet(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			return true;
		}
	}

	public function post($index){
		return $this->params[$index];
	}
}