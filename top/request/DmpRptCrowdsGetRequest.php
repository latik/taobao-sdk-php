<?php
/**
 * TOP API: taobao.dmp.rpt.crowds.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DmpRptCrowdsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.dmp.rpt.crowds.get";
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
