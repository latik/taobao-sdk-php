<?php
/**
 * TOP API: taobao.fenxiao.grades.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:03
 */
class FenxiaoGradesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.fenxiao.grades.get";
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