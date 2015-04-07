<?php
/**
 * TOP API: taobao.xhotel.increment.info.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class XhotelIncrementInfoGetRequest
{
	/** 
	 * 变化类别，1为酒店价格，0为酒店
	 **/
	private $changeType;
	
	/** 
	 * 分页参数：当前页数，从1开始计数。
默认值：1
	 **/
	private $currentPage;
	
	/** 
	 * 更新时间
	 **/
	private $gmtModified;
	
	/** 
	 * 分页参数：每页酒店数量。最小值1，最大值为1000。默认值：1000
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setChangeType($changeType)
	{
		$this->changeType = $changeType;
		$this->apiParas["change_type"] = $changeType;
	}

	public function getChangeType()
	{
		return $this->changeType;
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

	public function setGmtModified($gmtModified)
	{
		$this->gmtModified = $gmtModified;
		$this->apiParas["gmt_modified"] = $gmtModified;
	}

	public function getGmtModified()
	{
		return $this->gmtModified;
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

	public function getApiMethodName()
	{
		return "taobao.xhotel.increment.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->changeType,"changeType");
		RequestCheckUtil::checkNotNull($this->gmtModified,"gmtModified");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
