<?php
/**
 * TOP API: taobao.dd.order.payquery request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdOrderPayqueryRequest
{
	/** 
	 * 门店收银结账单id，代表唯一一笔订单
	 **/
	private $cashierOrderid;
	
	/** 
	 * 门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 卖家账号，用来收款
	 **/
	private $sellerUsernick;
	
	private $apiParas = array();
	
	public function setCashierOrderid($cashierOrderid)
	{
		$this->cashierOrderid = $cashierOrderid;
		$this->apiParas["cashier_orderid"] = $cashierOrderid;
	}

	public function getCashierOrderid()
	{
		return $this->cashierOrderid;
	}

	public function setOutStoreid($outStoreid)
	{
		$this->outStoreid = $outStoreid;
		$this->apiParas["out_storeid"] = $outStoreid;
	}

	public function getOutStoreid()
	{
		return $this->outStoreid;
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
		return "taobao.dd.order.payquery";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cashierOrderid,"cashierOrderid");
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
