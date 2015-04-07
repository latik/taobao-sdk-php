<?php
/**
 * TOP API: taobao.tae.delivery.item.update request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class TaeDeliveryItemUpdateRequest
{
	/** 
	 * 导购商品类
	 **/
	private $paramShopGuideItem;
	
	private $apiParas = array();
	
	public function setParamShopGuideItem($paramShopGuideItem)
	{
		$this->paramShopGuideItem = $paramShopGuideItem;
		$this->apiParas["param_shop_guide_item"] = $paramShopGuideItem;
	}

	public function getParamShopGuideItem()
	{
		return $this->paramShopGuideItem;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.delivery.item.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->paramShopGuideItem,"paramShopGuideItem");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
