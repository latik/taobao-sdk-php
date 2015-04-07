<?php
/**
 * TOP API: taobao.xhotel.price.info.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class XhotelPriceInfoGetRequest
{
	/** 
	 * 结束日期，默认值为当前时间加4天,结束日期最多是当前时间加28天
	 **/
	private $endDate;
	
	/** 
	 * pid
	 **/
	private $pid;
	
	/** 
	 * 标准酒店id和城市编码拼接字符串，最多50个
	 **/
	private $shidCityCode;
	
	/** 
	 * 开始时间，默认值为当前时间加3天,开始时间最多是当前时间加28天
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setShidCityCode($shidCityCode)
	{
		$this->shidCityCode = $shidCityCode;
		$this->apiParas["shid_city_code"] = $shidCityCode;
	}

	public function getShidCityCode()
	{
		return $this->shidCityCode;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.price.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shidCityCode,"shidCityCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
