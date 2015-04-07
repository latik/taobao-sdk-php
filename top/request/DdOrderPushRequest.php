<?php
/**
 * TOP API: taobao.dd.order.push request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdOrderPushRequest
{
	/** 
	 * 订单id
	 **/
	private $orderId;
	
	/** 
	 * 桌号信息
	 **/
	private $tableinfo;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setTableinfo($tableinfo)
	{
		$this->tableinfo = $tableinfo;
		$this->apiParas["tableinfo"] = $tableinfo;
	}

	public function getTableinfo()
	{
		return $this->tableinfo;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.order.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->tableinfo,"tableinfo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
