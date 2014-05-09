<?php

	class Order
	{
		private $_orderNum;
		private $_orderDate;
		private $_totalAmount;
		
		//getting and setting order numer
		public function getOrderNum()
		{
			return $_orderNum;
		}
		
		public function setOrderNum($_orderNum)
		{
			$this->_orderNum = $orderNum;
		}
		
		//getting and setting order date
		public function getOrderDate()
		{
			return $_orderDate;
		}
		
		public function setOrderDate($_orderDate)
		{
			$this->_orderDate = $orderDate;
		}
		
		//getting and setting total amount
		public function getTotalAmount()
		{
			return $_totalAmount;
		}
		
		public function setToatlAmount($_totalAmount)
		{
			$this->_totalAmount = $totalAmount;
		}
	}
?>