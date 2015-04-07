<?php
/**
 * TOP API: taobao.xhotel.list.search request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class XhotelListSearchRequest
{
	/** 
	 * 入住时间，默认值为当前时间加3天
	 **/
	private $checkIn;
	
	/** 
	 * 离店日期，默认值为当前时间加4天
	 **/
	private $checkOut;
	
	/** 
	 * 城市编码，需通过taobao.xhotel.city.get接口获取
	 **/
	private $cityCode;
	
	/** 
	 * 城市名称，需通过taobao.xhotel.city.get接口获取
	 **/
	private $cityName;
	
	/** 
	 * 分页参数：当前页数，从1开始计数。
默认值：1
	 **/
	private $currentPage;
	
	/** 
	 * 酒店星级/档次。
五星/豪华:5
四星/高档:4
三星/舒适:3
二星及以下：2
经济连锁：1
客栈公寓:0
支持设置多个档次，多个档次用","隔开，如5,4,3
	 **/
	private $dangcis;
	
	/** 
	 * 排序方向。
从高往低: DESC
从低往高: ASC。
默认值为DESC
注意：如果按距离排序，设置此参数无效。如果按距离排序，则按离搜索中心点从近到远的顺序返回酒店列表，不需要再设置dir参数。
	 **/
	private $dir;
	
	/** 
	 * 指定价格范围搜索时的最高价，单位：元。
	 **/
	private $highPrice;
	
	/** 
	 * 搜索关键字
	 **/
	private $keywords;
	
	/** 
	 * 指定价格范围搜索时的最低价，单位：元。
	 **/
	private $lowPrice;
	
	/** 
	 * 排序方式。
默认排序：DEFAULT 
按销量排序：SALESCOUNT 
按价格排序：PRICE
按照距离排序：DISTANCE。
注意：如果按距离排序，则按离搜索中心点从近到远的顺序返回酒店列表，不需要再设置dir参数。
	 **/
	private $order;
	
	/** 
	 * 分页参数：每页酒店数量。最小值1，最大值为20。默认值：20
	 **/
	private $pageSize;
	
	/** 
	 * pid
	 **/
	private $pid;
	
	/** 
	 * 地图搜的半径，单位:米。默认值为5000米，允许的最大值为50000米。<br /> 支持最大值为：50000<br /> 支持最小值为：1
	 **/
	private $radius;
	
	/** 
	 * 地图搜时中心点的经度。注意：如果设置此参数，则参数radius_lng也必须设置。
	 **/
	private $radiusLat;
	
	/** 
	 * 地图搜索时中心点的经度。注意：如果设置此参数，则参数radius_lat也必须设置。
	 **/
	private $radiusLng;
	
	private $apiParas = array();
	
	public function setCheckIn($checkIn)
	{
		$this->checkIn = $checkIn;
		$this->apiParas["check_in"] = $checkIn;
	}

	public function getCheckIn()
	{
		return $this->checkIn;
	}

	public function setCheckOut($checkOut)
	{
		$this->checkOut = $checkOut;
		$this->apiParas["check_out"] = $checkOut;
	}

	public function getCheckOut()
	{
		return $this->checkOut;
	}

	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		$this->apiParas["city_code"] = $cityCode;
	}

	public function getCityCode()
	{
		return $this->cityCode;
	}

	public function setCityName($cityName)
	{
		$this->cityName = $cityName;
		$this->apiParas["city_name"] = $cityName;
	}

	public function getCityName()
	{
		return $this->cityName;
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

	public function setDangcis($dangcis)
	{
		$this->dangcis = $dangcis;
		$this->apiParas["dangcis"] = $dangcis;
	}

	public function getDangcis()
	{
		return $this->dangcis;
	}

	public function setDir($dir)
	{
		$this->dir = $dir;
		$this->apiParas["dir"] = $dir;
	}

	public function getDir()
	{
		return $this->dir;
	}

	public function setHighPrice($highPrice)
	{
		$this->highPrice = $highPrice;
		$this->apiParas["high_price"] = $highPrice;
	}

	public function getHighPrice()
	{
		return $this->highPrice;
	}

	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		$this->apiParas["keywords"] = $keywords;
	}

	public function getKeywords()
	{
		return $this->keywords;
	}

	public function setLowPrice($lowPrice)
	{
		$this->lowPrice = $lowPrice;
		$this->apiParas["low_price"] = $lowPrice;
	}

	public function getLowPrice()
	{
		return $this->lowPrice;
	}

	public function setOrder($order)
	{
		$this->order = $order;
		$this->apiParas["order"] = $order;
	}

	public function getOrder()
	{
		return $this->order;
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

	public function setRadius($radius)
	{
		$this->radius = $radius;
		$this->apiParas["radius"] = $radius;
	}

	public function getRadius()
	{
		return $this->radius;
	}

	public function setRadiusLat($radiusLat)
	{
		$this->radiusLat = $radiusLat;
		$this->apiParas["radius_lat"] = $radiusLat;
	}

	public function getRadiusLat()
	{
		return $this->radiusLat;
	}

	public function setRadiusLng($radiusLng)
	{
		$this->radiusLng = $radiusLng;
		$this->apiParas["radius_lng"] = $radiusLng;
	}

	public function getRadiusLng()
	{
		return $this->radiusLng;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.list.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->radius,50000,"radius");
		RequestCheckUtil::checkMinValue($this->radius,1,"radius");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
