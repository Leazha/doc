<?php
	
	class Category
	{
		private $_catName;
		private $_catDescript;
		
		//getting and setting category name;
		public function getCatName()
		{
			return $_catName;
		}
		
		public function setCatDescript($_catName)
		{
			$this->_catName = $catName;
		}
		
		//getting and setting category description 
		public function getCatDescript()
		{
			return $_catDescript;
		}
		
		public function setCatDescript($_catDescript)
		{
			$this->_catDescript = $catDescript;
		}
	}
?>