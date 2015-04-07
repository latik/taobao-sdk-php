<?php
/**
 * TOP API: taobao.dd.order.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdOrderGetRequest
{
	/** 
	 * 淘宝订单id
	 **/
	private $orderid;
	
	/** 
	 * 订单的卖家
	 **/
	private $sellerUsernick;
	
	private $apiParas = array();
	
	public function setOrderid($orderid)
	{
		$this->orderid = $orderid;
		$this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid()
	{
		return $this->orderid;
	}

	public function setSellerUsernick($sellerUsernick)
	{
		$this->sellerUsernick = $sellerUsernick;
		$this->apiParas["seller_usernick"] = $sellerUsernick;
	}

	public function getSellerUsernick()
	{
		return $this->sellerUsernick;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderid,"orderid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
