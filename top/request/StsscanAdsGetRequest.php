<?php
/**
 * TOP API: taobao.stsscan.ads.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class StsscanAdsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.stsscan.ads.get";
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
