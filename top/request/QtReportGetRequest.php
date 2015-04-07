<?php
/**
 * TOP API: taobao.qt.report.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class QtReportGetRequest
{
	/** 
	 * 质检编号
	 **/
	private $qtCode;
	
	private $apiParas = array();
	
	public function setQtCode($qtCode)
	{
		$this->qtCode = $qtCode;
		$this->apiParas["qt_code"] = $qtCode;
	}

	public function getQtCode()
	{
		return $this->qtCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qt.report.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->qtCode,"qtCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
