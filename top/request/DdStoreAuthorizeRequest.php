<?php
/**
 * TOP API: taobao.dd.store.authorize request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdStoreAuthorizeRequest
{
	/** 
	 * 移动电话
	 **/
	private $mobilePhone;
	
	/** 
	 * 系统商门店id<br /> 支持最大长度为：50<br /> 支持的最大列表长度为：50
	 **/
	private $outStoreid;
	
	/** 
	 * 卖家账号<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $sellerUsernick;
	
	private $apiParas = array();
	
	public function setMobilePhone($mobilePhone)
	{
		$this->mobilePhone = $mobilePhone;
		$this->apiParas["mobile_phone"] = $mobilePhone;
	}

	public function getMobilePhone()
	{
		return $this->mobilePhone;
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
		return "taobao.dd.store.authorize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mobilePhone,"mobilePhone");
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkMaxLength($this->outStoreid,50,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkMaxLength($this->sellerUsernick,32,"sellerUsernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
