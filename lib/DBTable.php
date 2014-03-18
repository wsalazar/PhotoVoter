<?php

 class DBTable extends DBConnect{

 	protected $fields;

 	protected $likecount;

 	protected $unlikecount;

 	protected $res;

 	public $liker;

 	public $image;

	public function transaction(){
		$this->beginTransaction();
	}
	public function executeQuery(array $param = array()){
		$this->fields = $param;
		$this->image = $this->fields['0'];
		$this->countLiker($this->fields);
		$sql = "UPDATE photos SET ";
		if($this->fields['1'] == 'unlike'){
			$sql .= 'dislikes = ?';
			$this->liker = $this->unlikecount;
		} else {
			$sql .= 'likes = ?';
			$this->liker = $this->likecount;
		}
		$sql .= " WHERE pic_name = ? ";
		$this->res = $this->prepare($sql);
		$this->res->execute(array($this->liker,$this->image));
	}

	public function countLiker($fields){
		if($fields['1'] == 'unlike'){
			$this->unlikecount += 1;
		} else{
			$this->likecount += 1;
		}
	}
}