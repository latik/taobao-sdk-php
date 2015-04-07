<?php
/**
 * TOP API: taobao.sp.shop.info.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class SpShopInfoGetRequest
{
	/** 
	 * 卖家Nick对应的Userid
	 **/
	private $sellerId;
	
	/** 
	 * 每个站点的唯一Key(加密的site id)
	 **/
	private $siteKey;
	
	private $apiParas = array();
	
	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSiteKey($siteKey)
	{
		$this->siteKey = $siteKey;
		$this->apiParas["site_key"] = $siteKey;
	}

	public function getSiteKey()
	{
		return $this->siteKey;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.shop.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
