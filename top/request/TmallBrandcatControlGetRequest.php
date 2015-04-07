<?php
/**
 * TOP API: tmall.brandcat.control.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class TmallBrandcatControlGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.brandcat.control.get";
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
