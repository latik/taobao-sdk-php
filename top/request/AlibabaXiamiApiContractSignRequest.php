<?php
/**
 * TOP API: alibaba.xiami.api.contract.sign request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class AlibabaXiamiApiContractSignRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.xiami.api.contract.sign";
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
