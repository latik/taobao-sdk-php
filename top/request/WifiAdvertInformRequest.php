<?php
/**
 * TOP API: taobao.wifi.advert.inform request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class WifiAdvertInformRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.wifi.advert.inform";
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
