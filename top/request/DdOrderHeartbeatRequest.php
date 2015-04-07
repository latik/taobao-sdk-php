<?php
/**
 * TOP API: taobao.dd.order.heartbeat request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdOrderHeartbeatRequest
{
	/** 
	 * 轮询周期，单位s；范围5-300s
	 **/
	private $freq;
	
	/** 
	 * 系统商门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 门店卖家昵称
	 **/
	private $sellerUsernick;
	
	/** 
	 * 类型
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setFreq($freq)
	{
		$this->freq = $freq;
		$this->apiParas["freq"] = $freq;
	}

	public function getFreq()
	{
		return $this->freq;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.order.heartbeat";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->freq,"freq");
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
