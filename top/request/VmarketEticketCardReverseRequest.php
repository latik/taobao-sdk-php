<?php
/**
 * TOP API: taobao.vmarket.eticket.card.reverse request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketCardReverseRequest
{
	/** 
	 * 码商ID，是码商的话必须传递，如果是信任卖家不要传
	 **/
	private $codemerchantId;
	
	/** 
	 * 需要冲正的核销记录对应核销流水号（对应的核销操作时候传递的自定义流水号）
	 **/
	private $consumeSecialNum;
	
	/** 
	 * 证件的加密串
	 **/
	private $idCard;
	
	/** 
	 * 进行验码的电子凭证订单的订单ID
	 **/
	private $orderId;
	
	/** 
	 * 机具id，如果是码商必须传，如果是信任卖家不要传
	 **/
	private $posid;
	
	/** 
	 * 冲正份数（必须是和被冲正的核销记录的份数一致）
	 **/
	private $reverseNum;
	
	/** 
	 * 安全验证token，需要和该订单发码通知中的token一致
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

	public function setConsumeSecialNum($consumeSecialNum)
	{
		$this->consumeSecialNum = $consumeSecialNum;
		$this->apiParas["consume_secial_num"] = $consumeSecialNum;
	}

	public function getConsumeSecialNum()
	{
		return $this->consumeSecialNum;
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

	public function setReverseNum($reverseNum)
	{
		$this->reverseNum = $reverseNum;
		$this->apiParas["reverse_num"] = $reverseNum;
	}

	public function getReverseNum()
	{
		return $this->reverseNum;
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
		return "taobao.vmarket.eticket.card.reverse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consumeSecialNum,"consumeSecialNum");
		RequestCheckUtil::checkNotNull($this->idCard,"idCard");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->reverseNum,"reverseNum");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
