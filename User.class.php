<?php
 
class User
{
   
    private $_firstName;
    private $_lastName;
    private $_password;
	private $_email;
	private $_physAddr;
	private $_postAddr;
	private $_contactNum;
	
 
   public function getFirstName()
   {
		return $_firstName;
   }
   
   public function setFirstName($_firstName)
   {
	   $this->_firstName =$firstName;
   }
   
   public function getLastName()
   {
		return $_lastName;
   }

   public function setLastName($_lastNamee)
   {
	   $this->_lastName =$lastNamee;
   }
    
   public function getPassword()
   {
		return $_password;
   }  
   
   public function setPassword($_password)
   {
	   $this->_password = $password;
   }  
   
   public function getPhysAddr()
   {
		return $_physAddr;
   }
   
   public function setPhysAddr($_physAddr)
   {
	   $this->_physAddr = $physAddr;
   }  
   
   public function getPosAddr()
   {
		return $_postAddr;
   }
	
   public function setPostAddr($_postAddr)
   {
	   $this->_contactNum = $contactNum;
   } 
   
   public function getContactNum()
   {
		return $_contactNum;
   }
   
   public function setContactNum($_contactNum)
   {
		$this->_contactNum = $contactNum;
   }	
   
   public function dbConnection()
   {

		$conn = mysql_connect("localhost","itn30at","mpumelelo");
		if (!$con)
		{
		  die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db("expresso", $con);
		
		
   }
}
 
?>