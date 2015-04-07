<?php
/**
 * TOP API: taobao.waimai.order.index.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class WaimaiOrderIndexGetRequest
{
	/** 
	 * 订单创建时间的结束时间,格式为 yyyy-MM-dd HH:mm:ss
	 **/
	private $endCreateTime;
	
	/** 
	 * 订单修改时间的结束时间,格式为 yyyy-MM-dd HH:mm:ss
	 **/
	private $endTime;
	
	/** 
	 * 获取最近一定秒数的订单
	 **/
	private $interval;
	
	/** 
	 * 订单状态 待确认订单2 , 退款中订单4 , 已发货12 关闭20 交易成功21
	 **/
	private $orderStatus;
	
	/** 
	 * 可以同时输入多个订单状态,用逗号分隔
	 **/
	private $orderStatusMulti;
	
	/** 
	 * 订单类型
	 **/
	private $orderType;
	
	/** 
	 * 页码<br /> 支持的最大列表长度为：100
	 **/
	private $pageNo;
	
	/** 
	 * 返回记录数，超过200按200条返回数据<br /> 支持最大值为：200<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 外卖分店ID
	 **/
	private $shopId;
	
	/** 
	 * 订单创建时间的起点时间,格式为 yyyy-MM-dd HH:mm:ss
	 **/
	private $startCreateTime;
	
	/** 
	 * 订单修改时间的起点时间,格式为 yyyy-MM-dd HH:mm:ss
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndCreateTime($endCreateTime)
	{
		$this->endCreateTime = $endCreateTime;
		$this->apiParas["end_create_time"] = $endCreateTime;
	}

	public function getEndCreateTime()
	{
		return $this->endCreateTime;
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

	public function setInterval($interval)
	{
		$this->interval = $interval;
		$this->apiParas["interval"] = $interval;
	}

	public function getInterval()
	{
		return $this->interval;
	}

	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;
		$this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus()
	{
		return $this->orderStatus;
	}

	public function setOrderStatusMulti($orderStatusMulti)
	{
		$this->orderStatusMulti = $orderStatusMulti;
		$this->apiParas["order_status_multi"] = $orderStatusMulti;
	}

	public function getOrderStatusMulti()
	{
		return $this->orderStatusMulti;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setStartCreateTime($startCreateTime)
	{
		$this->startCreateTime = $startCreateTime;
		$this->apiParas["start_create_time"] = $startCreateTime;
	}

	public function getStartCreateTime()
	{
		return $this->startCreateTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.waimai.order.index.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
