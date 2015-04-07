<?php
/**
 * TOP API: taobao.coin.seller.sum request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinSellerSumRequest
{
	/** 
	 * 卖家数字ID
	 **/
	private $sellerId;
	
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

	public function getApiMethodName()
	{
		return "taobao.coin.seller.sum";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
