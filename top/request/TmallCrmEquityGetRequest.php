<?php
/**
 * TOP API: tmall.crm.equity.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class TmallCrmEquityGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.crm.equity.get";
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
