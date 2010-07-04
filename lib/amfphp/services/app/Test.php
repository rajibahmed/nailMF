<?php  

require '../models/Users.php';

class Test
{

	
	public function getUsers()
	{
		$u = new Users;
		return $u->findById(84);
	}
	
	
	
	

}
