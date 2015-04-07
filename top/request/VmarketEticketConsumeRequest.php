<?php
/**
 * TOP API: taobao.vmarket.eticket.consume request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketConsumeRequest
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
	 * 手机后四位(没有特殊说明请不要传该参数)
	 **/
	private $mobile;
	
	/** 
	 * 核销后需要重新生成的码，如果不需要重新生成码，不要传该参数
	 **/
	private $newCode;
	
	/** 
	 * 进行验码的电子凭证订单的订单ID
	 **/
	private $orderId;
	
	/** 
	 * 机具ID(此参数信任卖家可不传递，码商必须传递)
	 **/
	private $posid;
	
	/** 
	 * 不需要上传二维码图片或者核销后不需重新生成码码商请不要传，需要传入二维码的码商请先调用taobao.vmarket.eticket.qrcode.upload接口，将返回的img_filename文件名称作为参数（如果二维码不变的话，也可将将发码时传入二维码文件名作为参数传入），文件名与参数new_code必须相互对应。
	 **/
	private $qrImages;
	
	/** 
	 * 自定义核销流水号，如果核销调用失败，可以用该核销流水号进行冲正操作，需要小于等于100个字符(a-zA-Z0-9_)；每次核销都是唯一的流水号
	 **/
	private $serialNum;
	
	/** 
	 * 安全验证token,需要和发码通知中的token一致
	 **/
	private $token;
	
	/** 
	 * 核销的码，只支持单个码，多个码核销需要多次调用
	 **/
	private $verifyCode;
	
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

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setNewCode($newCode)
	{
		$this->newCode = $newCode;
		$this->apiParas["new_code"] = $newCode;
	}

	public function getNewCode()
	{
		return $this->newCode;
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

	public function setVerifyCode($verifyCode)
	{
		$this->verifyCode = $verifyCode;
		$this->apiParas["verify_code"] = $verifyCode;
	}

	public function getVerifyCode()
	{
		return $this->verifyCode;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consumeNum,"consumeNum");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->token,"token");
		RequestCheckUtil::checkNotNull($this->verifyCode,"verifyCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
