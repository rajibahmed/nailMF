<?php

require_once '../../../index.php';

class Users extends AHR_Database_ActiveRecord 
{
	
	public function getAuthenticatedUser(){
		return $this->findById(84);	
	}
	
	
	function setUserToGood(){
		$this->query('update users set is_active = 1 where id = '. 84);	
	}
	
	function setUserToEvil(){
		$this->query('update users set is_active = 2 where id = '. 84);
	}
	
}
?>