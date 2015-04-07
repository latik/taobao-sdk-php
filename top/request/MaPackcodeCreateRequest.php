<?php
/**
 * TOP API: taobao.ma.packcode.create request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class MaPackcodeCreateRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.ma.packcode.create";
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
