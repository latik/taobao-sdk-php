<?php
/**
 * TOP API: taobao.jipiao.agent.order.search request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class JipiaoAgentOrderSearchRequest
{
	/** 
	 * 创建订单时间范围的开始时间，注意：当前搜索条件开始结束时间范围不能超过三天，默认开始时间为当前时间往前推三天 （具体天数可能调整）
	 **/
	private $beginTime;
	
	/** 
	 * 创建订单时间范围的结束时间，注意：当前搜索条件开始结束时间范围不能超过三天，默认为当前时间 （具体天数可能调整）
	 **/
	private $endTime;
	
	/** 
	 * 扩展字段:
needFilterAutobook：默认true。待出票状态下，会根据此值过滤掉自动出票状态下订单，以防止重复出票的问题。对于精选票，此值需要设置成false，并由API使用者保证不会重复出票。
	 **/
	private $extra;
	
	/** 
	 * 是否需要行程单，true表示需要行程单；false表示不许要
	 **/
	private $hasItinerary;
	
	/** 
	 * 页码，默认第一页；注意：页大小固定，搜索结果中返回页大小pageSize，和是否包含下一页hasNext
	 **/
	private $page;
	
	/** 
	 * 订单状态，默认为空，查询所有状态的订单
1:待确认
2:待出票
3:强制成功
4:未付款
5:预订成功
6:已失效
	 **/
	private $status;
	
	/** 
	 * 航程类型： 0.单程；1.往返
	 **/
	private $tripType;
	
	private $apiParas = array();
	
	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
		$this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime()
	{
		return $this->beginTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setExtra($extra)
	{
		$this->extra = $extra;
		$this->apiParas["extra"] = $extra;
	}

	public function getExtra()
	{
		return $this->extra;
	}

	public function setHasItinerary($hasItinerary)
	{
		$this->hasItinerary = $hasItinerary;
		$this->apiParas["has_itinerary"] = $hasItinerary;
	}

	public function getHasItinerary()
	{
		return $this->hasItinerary;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTripType($tripType)
	{
		$this->tripType = $tripType;
		$this->apiParas["trip_type"] = $tripType;
	}

	public function getTripType()
	{
		return $this->tripType;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.agent.order.search";
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
