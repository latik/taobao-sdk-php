<?php
/**
 * TOP API: taobao.vmarket.eticket.reverse request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketReverseRequest
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
	 * 进行验码的电子凭证订单的订单ID
	 **/
	private $orderId;
	
	/** 
	 * 机具id，如果是码商必须传，如果是信任卖家不要传
	 **/
	private $posid;
	
	/** 
	 * 不需要上传二维码图片或者冲正后不需要变更码的请不要传，需要传入二维码的码商请先调用taobao.vmarket.eticket.qrcode.upload接口，将返回的img_filename文件名称作为参数，多个文件名用逗号隔开且与参数verify_codes按从左到有的顺序一一对应。
	 **/
	private $qrImages;
	
	/** 
	 * 冲正的码，只支持单个码
	 **/
	private $reverseCode;
	
	/** 
	 * 冲正份数（必须是和被冲正的核销记录的份数一致）
	 **/
	private $reverseNum;
	
	/** 
	 * 安全验证token，需要和该订单发码通知中的token一致
	 **/
	private $token;
	
	/** 
	 * 所有冲正后需要重新生成的码和对应的次数。码和次数之间用英文冒号分隔，多个码之间用英文逗号分隔。如果冲正后不需要重新生成码，留空
	 **/
	private $verifyCodes;
	
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

	public function setQrImages($qrImages)
	{
		$this->qrImages = $qrImages;
		$this->apiParas["qr_images"] = $qrImages;
	}

	public function getQrImages()
	{
		return $this->qrImages;
	}

	public function setReverseCode($reverseCode)
	{
		$this->reverseCode = $reverseCode;
		$this->apiParas["reverse_code"] = $reverseCode;
	}

	public function getReverseCode()
	{
		return $this->reverseCode;
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

	public function setVerifyCodes($verifyCodes)
	{
		$this->verifyCodes = $verifyCodes;
		$this->apiParas["verify_codes"] = $verifyCodes;
	}

	public function getVerifyCodes()
	{
		return $this->verifyCodes;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.reverse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consumeSecialNum,"consumeSecialNum");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->reverseCode,"reverseCode");
		RequestCheckUtil::checkNotNull($this->reverseNum,"reverseNum");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
