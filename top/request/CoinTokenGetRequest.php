<?php
/**
 * TOP API: taobao.coin.token.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinTokenGetRequest
{
	/** 
	 * 验证码的值
	 **/
	private $checkCode;
	
	private $apiParas = array();
	
	public function setCheckCode($checkCode)
	{
		$this->checkCode = $checkCode;
		$this->apiParas["check_code"] = $checkCode;
	}

	public function getCheckCode()
	{
		return $this->checkCode;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.token.get";
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
