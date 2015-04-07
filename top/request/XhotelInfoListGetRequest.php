<?php
/**
 * TOP API: taobao.xhotel.info.list.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class XhotelInfoListGetRequest
{
	/** 
	 * 城市code
	 **/
	private $cityCode;
	
	/** 
	 * 分页参数：当前页数，从1开始计数。
默认值：1
	 **/
	private $currentPage;
	
	/** 
	 * 分页参数：每页酒店数量。最小值1，最大值为50。默认值：20
	 **/
	private $pageSize;
	
	/** 
	 * pid
	 **/
	private $pid;
	
	/** 
	 * 标准酒店id，如果需要查询单条酒店的信息，需要传入此参数
	 **/
	private $shid;
	
	private $apiParas = array();
	
	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setShid($shid)
	{
		$this->shid = $shid;
		$this->apiParas["shid"] = $shid;
	}

	public function getShid()
	{
		return $this->shid;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.info.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cityCode,"cityCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
