<?php
/**
 * TOP API: taobao.coin.seller.details.query request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinSellerDetailsQueryRequest
{
	/** 
	 * 明细创建时间：起始点
	 **/
	private $createTimeFrom;
	
	/** 
	 * 明细创建时间：截止点
	 **/
	private $createTimeTo;
	
	/** 
	 * 外键ID列表
	 **/
	private $outIds;
	
	/** 
	 * 当前页码，从1开始
	 **/
	private $page;
	
	/** 
	 * 单页记录数
	 **/
	private $pageSize;
	
	/** 
	 * 淘金币平台活动ID列表
	 **/
	private $tbActivityIds;
	
	/** 
	 * 明细类型，0-全部，1-赚取，2-消耗
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

	public function setTbActivityIds($tbActivityIds)
	{
		$this->tbActivityIds = $tbActivityIds;
		$this->apiParas["tb_activity_ids"] = $tbActivityIds;
	}

	public function getTbActivityIds()
	{
		return $this->tbActivityIds;
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
		return "taobao.coin.seller.details.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->outIds,20,"outIds");
		RequestCheckUtil::checkMaxListSize($this->tbActivityIds,20,"tbActivityIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
