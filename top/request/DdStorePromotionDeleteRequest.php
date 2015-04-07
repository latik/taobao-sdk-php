<?php
/**
 * TOP API: taobao.dd.store.promotion.delete request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdStorePromotionDeleteRequest
{
	/** 
	 * 本地商户id
	 **/
	private $outStoreid;
	
	/** 
	 * 优惠id
	 **/
	private $promotionId;
	
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

	public function setPromotionId($promotionId)
	{
		$this->promotionId = $promotionId;
		$this->apiParas["promotion_id"] = $promotionId;
	}

	public function getPromotionId()
	{
		return $this->promotionId;
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
		return "taobao.dd.store.promotion.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->promotionId,"promotionId");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
