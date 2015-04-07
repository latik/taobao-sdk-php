<?php
/**
 * TOP API: taobao.tbk.shop.coupon.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:03
 */
class TbkShopCouponGetRequest
{
	/** 
	 * 店铺Id
	 **/
	private $shopId;
	
	private $apiParas = array();
	
	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.shop.coupon.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
