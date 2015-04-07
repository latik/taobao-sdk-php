<?php
/**
 * TOP API: taobao.vmarket.eticket.card.consume request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketCardConsumeRequest
{
	/** 
	 * 码商ID,是码商的话必须传递,如果是信任卖家不需要传
	 **/
	private $codemerchantId;
	
	/** 
	 * 核销份数
	 **/
	private $consumeNum;
	
	/** 
	 * 证件的加密串
	 **/
	private $idCard;
	
	/** 
	 * 进行验码的电子凭证订单的订单ID
	 **/
	private $orderId;
	
	/** 
	 * 机具ID(此参数信任卖家可不传递，码商必须传递)
	 **/
	private $posid;
	
	/** 
	 * 自定义核销流水号，如果核销调用失败，可以用该核销流水号进行冲正操作，需要小于等于100个字符(a-zA-Z0-9_),注意流水号必须保证唯一
	 **/
	private $serialNum;
	
	/** 
	 * 安全验证token,需要和发码通知中的token一致
	 **/
	private $token;
	
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

	public function setConsumeNum($consumeNum)
	{
		$this->consumeNum = $consumeNum;
		$this->apiParas["consume_num"] = $consumeNum;
	}

	public function getConsumeNum()
	{
		return $this->consumeNum;
	}

	public function setIdCard($idCard)
	{
		$this->idCard = $idCard;
		$this->apiParas["id_card"] = $idCard;
	}

	public function getIdCard()
	{
		return $this->idCard;
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

	public function setPosid($posid)
	{
		$this->posid = $posid;
		$this->apiParas["posid"] = $posid;
	}

	public function getPosid()
	{
		return $this->posid;
	}

	public function setSerialNum($serialNum)
	{
		$this->serialNum = $serialNum;
		$this->apiParas["serial_num"] = $serialNum;
	}

	public function getSerialNum()
	{
		return $this->serialNum;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.card.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consumeNum,"consumeNum");
		RequestCheckUtil::checkNotNull($this->idCard,"idCard");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->serialNum,"serialNum");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
