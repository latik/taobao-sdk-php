<?php
/**
 * TOP API: taobao.xhotel.city.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class XhotelCityGetRequest
{
	/** 
	 * 分页读取的城市个数，最小值为1，最大值为200
	 **/
	private $count;
	
	/** 
	 * 分页读取的开始下标,从0开始
	 **/
	private $start;
	
	private $apiParas = array();
	
	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.city.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->count,"count");
		RequestCheckUtil::checkNotNull($this->start,"start");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
