<?php
/**
 * TOP API: taobao.dd.store.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdStoreGetRequest
{
	/** 
	 * 系统商门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 卖家账号
	 **/
	private $sellerUsernick;
	
	private $apiParas = array();
	
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
		return "taobao.dd.store.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
