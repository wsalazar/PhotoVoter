<?php
namespace ImagesVoter;

use Request;
use DBTable;
use DBConnect;

require 'config/config.php';

class ImagesVoter{

	public function __construct($args){
		$request = new Request();
		$request->setPostParams($args);
		if($request->isPost()){
			$image = $request->post('image');
			$liker = $request->post('call');
			try{
				$db = new DBTable(LOCAL_HOST, DB_NAME, USERNAME, PASS);
				$db->beginTransaction();
				$db->executeQuery(array($image, $liker));
			} catch(PDOException $e){
				echo 'Connection failed: ' . $e->getMessage();
			}
		}
	}

}
$votes = new ImagesVoter($_POST);