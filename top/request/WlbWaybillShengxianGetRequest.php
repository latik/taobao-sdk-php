<?php
/**
 * TOP API: taobao.wlb.waybill.shengxian.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:03
 */
class WlbWaybillShengxianGetRequest
{
	/** 
	 * 物流服务方代码，生鲜配送：YXSR<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $bizCode;
	
	/** 
	 * 物流服务类型。冷链：602，常温：502<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $deliveryType;
	
	/** 
	 * 预留扩展字段<br /> 支持最大长度为：512<br /> 支持的最大列表长度为：512
	 **/
	private $feature;
	
	/** 
	 * 订单渠道： 淘宝平台订单："TB"; 天猫平台订单："TM"; 京东："JD"; 拍拍："PP"; 易迅平台订单："YX"; 一号店平台订单："YHD"; 当当网平台订单："DD"; EBAY："EBAY"; QQ网购："QQ"; 苏宁："SN"; 国美："GM"; 唯品会："WPH"; 聚美："Jm"; 乐峰："LF"; 蘑菇街："MGJ"; 聚尚："JS"; 银泰："YT"; VANCL："VANCL"; 邮乐："YL"; 优购："YG"; 拍鞋："PX"; 1688平台："1688";<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $orderChannelsType;
	
	/** 
	 * 商家淘宝地址信息ID<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $senderAddressId;
	
	/** 
	 * 仓库的服务代码标示，代码一个仓库的实体。(可以通过taobao.wlb.stores.baseinfo.get接口查询)<br /> 支持最大长度为：128<br /> 支持的最大列表长度为：128
	 **/
	private $serviceCode;
	
	/** 
	 * 交易号，传入交易号不能存在拆单场景。<br /> 支持最大长度为：128<br /> 支持的最大列表长度为：128
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setDeliveryType($deliveryType)
	{
		$this->deliveryType = $deliveryType;
		$this->apiParas["delivery_type"] = $deliveryType;
	}

	public function getDeliveryType()
	{
		return $this->deliveryType;
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setOrderChannelsType($orderChannelsType)
	{
		$this->orderChannelsType = $orderChannelsType;
		$this->apiParas["order_channels_type"] = $orderChannelsType;
	}

	public function getOrderChannelsType()
	{
		return $this->orderChannelsType;
	}

	public function setSenderAddressId($senderAddressId)
	{
		$this->senderAddressId = $senderAddressId;
		$this->apiParas["sender_address_id"] = $senderAddressId;
	}

	public function getSenderAddressId()
	{
		return $this->senderAddressId;
	}

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.shengxian.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkMaxLength($this->bizCode,64,"bizCode");
		RequestCheckUtil::checkNotNull($this->deliveryType,"deliveryType");
		RequestCheckUtil::checkMaxLength($this->deliveryType,64,"deliveryType");
		RequestCheckUtil::checkMaxLength($this->feature,512,"feature");
		RequestCheckUtil::checkNotNull($this->orderChannelsType,"orderChannelsType");
		RequestCheckUtil::checkMaxLength($this->orderChannelsType,64,"orderChannelsType");
		RequestCheckUtil::checkMaxLength($this->senderAddressId,64,"senderAddressId");
		RequestCheckUtil::checkMaxLength($this->serviceCode,128,"serviceCode");
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
		RequestCheckUtil::checkMaxLength($this->tradeId,128,"tradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
