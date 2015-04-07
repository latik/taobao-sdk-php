<?php
/**
 * TOP API: taobao.coin.activities.query request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinActivitiesQueryRequest
{
	/** 
	 * 活动创建时间：起始点
	 **/
	private $createTimeFrom;
	
	/** 
	 * 活动创建时间：超始点
	 **/
	private $createTimeTo;
	
	/** 
	 * 活动结束时间：起始点
	 **/
	private $endTimeFrom;
	
	/** 
	 * 活动结束时间：截止点
	 **/
	private $endTimeTo;
	
	/** 
	 * 活动ID列表
	 **/
	private $outActivityIds;
	
	/** 
	 * 当前页，从1开始
	 **/
	private $page;
	
	/** 
	 * 单次返回记录数
	 **/
	private $pageSize;
	
	/** 
	 * 活动开始时间：起始点
	 **/
	private $startTimeFrom;
	
	/** 
	 * 活动开始时间：截止点
	 **/
	private $startTimeTo;
	
	/** 
	 * 状态，0-有效状态，-1-创建失败，-2-卖家中止, -3-系统中止, -4-到期终止
	 **/
	private $status;
	
	/** 
	 * 淘宝活动ID
	 **/
	private $tbActivityIds;
	
	private $apiParas = array();
	
	public function setCreateTimeFrom($createTimeFrom)
	{
		$this->createTimeFrom = $createTimeFrom;
		$this->apiParas["create_time_from"] = $createTimeFrom;
	}

	public function getCreateTimeFrom()
	{
		return $this->createTimeFrom;
	}

	public function setCreateTimeTo($createTimeTo)
	{
		$this->createTimeTo = $createTimeTo;
		$this->apiParas["create_time_to"] = $createTimeTo;
	}

	public function getCreateTimeTo()
	{
		return $this->createTimeTo;
	}

	public function setEndTimeFrom($endTimeFrom)
	{
		$this->endTimeFrom = $endTimeFrom;
		$this->apiParas["end_time_from"] = $endTimeFrom;
	}

	public function getEndTimeFrom()
	{
		return $this->endTimeFrom;
	}

	public function setEndTimeTo($endTimeTo)
	{
		$this->endTimeTo = $endTimeTo;
		$this->apiParas["end_time_to"] = $endTimeTo;
	}

	public function getEndTimeTo()
	{
		return $this->endTimeTo;
	}

	public function setOutActivityIds($outActivityIds)
	{
		$this->outActivityIds = $outActivityIds;
		$this->apiParas["out_activity_ids"] = $outActivityIds;
	}

	public function getOutActivityIds()
	{
		return $this->outActivityIds;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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

	public function setStartTimeFrom($startTimeFrom)
	{
		$this->startTimeFrom = $startTimeFrom;
		$this->apiParas["start_time_from"] = $startTimeFrom;
	}

	public function getStartTimeFrom()
	{
		return $this->startTimeFrom;
	}

	public function setStartTimeTo($startTimeTo)
	{
		$this->startTimeTo = $startTimeTo;
		$this->apiParas["start_time_to"] = $startTimeTo;
	}

	public function getStartTimeTo()
	{
		return $this->startTimeTo;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTbActivityIds($tbActivityIds)
	{
		$this->tbActivityIds = $tbActivityIds;
		$this->apiParas["tb_activity_ids"] = $tbActivityIds;
	}

	public function getTbActivityIds()
	{
		return $this->tbActivityIds;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.activities.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->outActivityIds,20,"outActivityIds");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxListSize($this->status,20,"status");
		RequestCheckUtil::checkMaxListSize($this->tbActivityIds,20,"tbActivityIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
