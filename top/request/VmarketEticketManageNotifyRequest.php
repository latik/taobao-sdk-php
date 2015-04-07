<?php
/**
 * TOP API: taobao.vmarket.eticket.manage.notify request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketManageNotifyRequest
{
	/** 
	 * 码商ID，如果是码商，必须传，如果是信任卖家，不需要传
	 **/
	private $codemerchantId;
	
	/** 
	 * 需要调用的通知方法，目前仅支持是send（发码）或resend（重新发码）
	 **/
	private $notifyMethod;
	
	/** 
	 * 订单编号
	 **/
	private $orderId;
	
	private $apiParas = array();
	
	public function setCodemerchantId($codemerchantId)
	{
		$this->codemerchantId = $codemerchantId;
		$this->apiParas["codemerchant_id"] = $codemerchantId;
	}

	public function getCodemerchantId()
	{
		return $this->codemerchantId;
	}

	public function setNotifyMethod($notifyMethod)
	{
		$this->notifyMethod = $notifyMethod;
		$this->apiParas["notify_method"] = $notifyMethod;
	}

	public function getNotifyMethod()
	{
		return $this->notifyMethod;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.manage.notify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->notifyMethod,"notifyMethod");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
