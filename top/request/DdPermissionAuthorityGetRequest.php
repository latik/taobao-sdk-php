<?php
/**
 * TOP API: taobao.dd.permission.authority.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class DdPermissionAuthorityGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.dd.permission.authority.get";
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
