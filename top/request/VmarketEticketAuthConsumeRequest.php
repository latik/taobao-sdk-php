<?php
/**
 * TOP API: taobao.vmarket.eticket.auth.consume request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketAuthConsumeRequest
{
	/** 
	 * 核销份数
	 **/
	private $consumeNum;
	
	/** 
	 * 核销方的ID，如果是普通码商必须传入机具ID,如果是私有码商家（即原有的信任商家）可默认传入私有码商ID
	 **/
	private $operatorid;
	
	/** 
	 * 自定义核销流水号，需要小于等于100个字符(a-zA-Z0-9_)
	 **/
	private $serialNum;
	
	/** 
	 * 网点ID,网点授权核销时，必须传入；其他核销方式可不传
	 **/
	private $storeid;
	
	/** 
	 * 核销的码，只支持单个码，多个码核销需要多次调用
	 **/
	private $verifyCode;
	
	private $apiParas = array();
	
	public function setConsumeNum($consumeNum)
	{
		$this->consumeNum = $consumeNum;
		$this->apiParas["consume_num"] = $consumeNum;
	}

	public function getConsumeNum()
	{
		return $this->consumeNum;
	}

	public function setOperatorid($operatorid)
	{
		$this->operatorid = $operatorid;
		$this->apiParas["operatorid"] = $operatorid;
	}

	public function getOperatorid()
	{
		return $this->operatorid;
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

	public function setStoreid($storeid)
	{
		$this->storeid = $storeid;
		$this->apiParas["storeid"] = $storeid;
	}

	public function getStoreid()
	{
		return $this->storeid;
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
		return "taobao.vmarket.eticket.auth.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consumeNum,"consumeNum");
		RequestCheckUtil::checkNotNull($this->operatorid,"operatorid");
		RequestCheckUtil::checkNotNull($this->serialNum,"serialNum");
		RequestCheckUtil::checkNotNull($this->verifyCode,"verifyCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
