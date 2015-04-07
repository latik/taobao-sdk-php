<?php
/**
 * TOP API: taobao.tae.delivery.info.add request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class TaeDeliveryInfoAddRequest
{
	/** 
	 * 导购资讯类信息
	 **/
	private $paramShopGuideInfo;
	
	private $apiParas = array();
	
	public function setParamShopGuideInfo($paramShopGuideInfo)
	{
		$this->paramShopGuideInfo = $paramShopGuideInfo;
		$this->apiParas["param_shop_guide_info"] = $paramShopGuideInfo;
	}

	public function getParamShopGuideInfo()
	{
		return $this->paramShopGuideInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.delivery.info.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->paramShopGuideInfo,"paramShopGuideInfo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
