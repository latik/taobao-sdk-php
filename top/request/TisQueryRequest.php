<?php
/**
 * TOP API: taobao.tis.query request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class TisQueryRequest
{
	/** 
	 * 检索字符串，routeValue是分组键值对
	 **/
	private $queryStr;
	
	/** 
	 * 索引名称<br /> 支持最大长度为：100<br /> 支持的最大列表长度为：100
	 **/
	private $serviceName;
	
	private $apiParas = array();
	
	public function setQueryStr($queryStr)
	{
		$this->queryStr = $queryStr;
		$this->apiParas["query_str"] = $queryStr;
	}

	public function getQueryStr()
	{
		return $this->queryStr;
	}

	public function setServiceName($serviceName)
	{
		$this->serviceName = $serviceName;
		$this->apiParas["service_name"] = $serviceName;
	}

	public function getServiceName()
	{
		return $this->serviceName;
	}

	public function getApiMethodName()
	{
		return "taobao.tis.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->queryStr,"queryStr");
		RequestCheckUtil::checkNotNull($this->serviceName,"serviceName");
		RequestCheckUtil::checkMaxLength($this->serviceName,100,"serviceName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
