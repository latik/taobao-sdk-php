<?php
/**
 * TOP API: taobao.coin.buyer.details.query request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinBuyerDetailsQueryRequest
{
	/** 
	 * 记录创建时间：开始点
	 **/
	private $createTimeFrom;
	
	/** 
	 * 记录创建时间：截止点
	 **/
	private $createTimeTo;
	
	/** 
	 * 查询外键
	 **/
	private $outIds;
	
	/** 
	 * 当前页
	 **/
	private $page;
	
	/** 
	 * 单页大小
	 **/
	private $pageSize;
	
	/** 
	 * 查询类型，0-全部，1-发放，2-消耗
	 **/
	private $type;
	
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

	public function setOutIds($outIds)
	{
		$this->outIds = $outIds;
		$this->apiParas["out_ids"] = $outIds;
	}

	public function getOutIds()
	{
		return $this->outIds;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.buyer.details.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->outIds,20,"outIds");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
