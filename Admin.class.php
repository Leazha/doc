<?php

	class Admin
	{
	   
		private $_adFirstName;
		private $_adLastName;
		private $_adPassword;
		private $_adEemail;
		private $_adPhysAddr;
		private $_adPostAddr;
		private $_adContactNum;
		
	   //getting sand setting admin first name
	   public function getAdminadFirstName()
	   {
			return $_adFirstName;
	   }
	   
	   public function AdminadFirstName($_adFirstName)
	   {
		   $this->_adFirstName =$adFirstName;
	   }
	   
	   //getting and setting admin last name
	   public function getAdminLastName()
	   {
			return $_adLastName;
	   }
	
	   public function setAdminLastName($_adLastName)
	   {
		   $this->_adLastName =$adLastNamee;
	   }
		
	   //getting and setting admin password
	   public function getAdminPassword()
	   {
			return $_adPassword;
	   }  
	   
	   public function setAdminPassword($_adPassword)
	   {
		   $this->_adPassword = $adPassword;
	   }  
	   
	   //getting and setting admin email
	   public function getAdminEmail()
	   {
		   return $_adEemail;
	   }
	   
	   public function setAdminEmail($_adEemail)
	   {
		   $this->_adEemail =  $adEemail;
	   }
	   
	   //getting and setting admin physical address
	   public function getAdminPhysAddr()
	   {
			return $_adPhysAddr;
	   }
	   
	   public function setAdminPhysAddr($_adPhysAddr)
	   {
		   $this->_adPhysAddr = $adPhysAddr;
	   }  
	   
	   //getting and setting admin postal address
	   public function getAdminPostAddr()
	   {
			return $_adPostAddr;
	   }
		
	   public function setAdminPostAddr($_adPostAddr)
	   {
		   $this->_adPostAddr = $adPostAddr;
	   }
	   
	   //getting and setting admin contact details 
	    public function getAdminContactNum()
	   {
			return $_adContactNum;
	   }	
	   
	     public function setAdminContactNum($_adContactNum)
	   {
		   $this->_adContactNum =$adContactNum;
	   }
	   
	}
 
?>