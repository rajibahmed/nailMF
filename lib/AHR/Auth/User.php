<?php  
//require	'../Mail/swift_required.php';

//require '../../Object/Base.php';
/**
* 
*/
class AHR_Auth_User 
{
    
    const ADMIN = 'admin';    	
    const PASSWORD = 'ebd6ca3abb01f628385fa8ba6227d076719a97be';//amader        
    
    public $name;
	
    private $password;
	
    public $email;
        
        
        function __construct($name='',$password='')
	{
            if(!empty($name)&& !empty($password)){
                $this->setName($name);
                $this->setPassword($password); 
            }
	}
	
	public function isAdmin()
	{
		if($this->getName() == AHR_Auth_User::ADMIN && $this->getPassword()== AHR_Auth_User::PASSWORD ){
			return true;
		}
		else {
			return false;
		}
	}
	
	public function setName($value='')
	{
		$this->name = $value;
	}
	
	public function getName()
	{
		return $this->name;
        }


        public function setPassword($sPass) {
            $this->password = SHA1($sPass);
        }
        
	
	private function getPassword()
	{
		return $this->password;
	}
	
	public function generatePassword($length=6) 
	{
		$characthers = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!$";
		
		$password = '';
		
		for ($i = 0; $i < $length; $i++) {
			$password .= $characthers[(rand() % strlen($characthers))];
		}
		return $password;
	}
	
	
	public function emailPassoword($userEmails = array())
	{
		
		//$swift =new Swift(new Swift_Connection_SMTP("host.tld"));

		if(isset($userEmails) and is_array($userEmails)){
			foreach ($userEmails as $emailAddress) {
				
			}
		}
		else{
			// mail to current user
		}
	}

}

?>
