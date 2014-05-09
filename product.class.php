<?php

	class Product
	{
		private $_prodName;
		private $_prodDescrip;
		private $_prodSize;
		private $_prodPrice;
		
		//getting and setting product name
		public function getProdName()
		{
			return $_prodName;	
		}
		
		public function setProdName($_prodName)
		{
			$this->_prodName = $prodName;
		}
		
		//getting and setting product description
		public function getProdDescrip()
		{
			return $_prodDescrip;
		}
		public function getProdDescrip($_prodDescrip)
		{
			$this->_prodDescrip	= $prodDescrip;
		}
		
		//getting and setting product size
		public function getProdSize()
		{
			return $_prodSize;
		}
		
		public function setProdSize($_prodSize)
		{
			$this->_prodSize = $prodSize;
		}
		
		//getting and setting unit price
		public function getProdPrice()
		{
			return $_prodPrice;
		}
		
		public function setProdPrice($_prodPricec)
		{
			$this->_prodPrice = $prodPrice;
		}
	}
?>