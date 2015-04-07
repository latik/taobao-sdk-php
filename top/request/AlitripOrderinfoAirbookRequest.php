<?php
/**
 * TOP API: taobao.alitrip.orderinfo.airbook request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class AlitripOrderinfoAirbookRequest
{
	/** 
	 * 联系人信息对象
	 **/
	private $bookArrangerInfo;
	
	/** 
	 * 航班信息
	 **/
	private $bookFlightSegmentList;
	
	/** 
	 * 乘客信息
	 **/
	private $bookTravelerList;
	
	/** 
	 * 接入方提供的用户名
	 **/
	private $channelName;
	
	/** 
	 * 扩展字段
	 **/
	private $extra;
	
	/** 
	 * 机场建设费（单位：元）
	 **/
	private $fee;
	
	/** 
	 * 接入方提供的密码，以MD5方式加密后传入
	 **/
	private $password;
	
	/** 
	 * 是否支付
	 **/
	private $payment;
	
	/** 
	 * 外部系统订单号
	 **/
	private $reservationCode;
	
	/** 
	 * 燃油附加费（单位：元）
	 **/
	private $tax;
	
	/** 
	 * 订单总价（单位：元）
	 **/
	private $totalMoney;
	
	private $apiParas = array();
	
	public function setBookArrangerInfo($bookArrangerInfo)
	{
		$this->bookArrangerInfo = $bookArrangerInfo;
		$this->apiParas["book_arranger_info"] = $bookArrangerInfo;
	}

	public function getBookArrangerInfo()
	{
		return $this->bookArrangerInfo;
	}

	public function setBookFlightSegmentList($bookFlightSegmentList)
	{
		$this->bookFlightSegmentList = $bookFlightSegmentList;
		$this->apiParas["book_flight_segment_list"] = $bookFlightSegmentList;
	}

	public function getBookFlightSegmentList()
	{
		return $this->bookFlightSegmentList;
	}

	public function setBookTravelerList($bookTravelerList)
	{
		$this->bookTravelerList = $bookTravelerList;
		$this->apiParas["book_traveler_list"] = $bookTravelerList;
	}

	public function getBookTravelerList()
	{
		return $this->bookTravelerList;
	}

	public function setChannelName($channelName)
	{
		$this->channelName = $channelName;
		$this->apiParas["channel_name"] = $channelName;
	}

	public function getChannelName()
	{
		return $this->channelName;
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

	public function setFee($fee)
	{
		$this->fee = $fee;
		$this->apiParas["fee"] = $fee;
	}

	public function getFee()
	{
		return $this->fee;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPayment($payment)
	{
		$this->payment = $payment;
		$this->apiParas["payment"] = $payment;
	}

	public function getPayment()
	{
		return $this->payment;
	}

	public function setReservationCode($reservationCode)
	{
		$this->reservationCode = $reservationCode;
		$this->apiParas["reservation_code"] = $reservationCode;
	}

	public function getReservationCode()
	{
		return $this->reservationCode;
	}

	public function setTax($tax)
	{
		$this->tax = $tax;
		$this->apiParas["tax"] = $tax;
	}

	public function getTax()
	{
		return $this->tax;
	}

	public function setTotalMoney($totalMoney)
	{
		$this->totalMoney = $totalMoney;
		$this->apiParas["total_money"] = $totalMoney;
	}

	public function getTotalMoney()
	{
		return $this->totalMoney;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.orderinfo.airbook";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookArrangerInfo,"bookArrangerInfo");
		RequestCheckUtil::checkNotNull($this->bookFlightSegmentList,"bookFlightSegmentList");
		RequestCheckUtil::checkMaxListSize($this->bookFlightSegmentList,20,"bookFlightSegmentList");
		RequestCheckUtil::checkNotNull($this->bookTravelerList,"bookTravelerList");
		RequestCheckUtil::checkMaxListSize($this->bookTravelerList,200,"bookTravelerList");
		RequestCheckUtil::checkNotNull($this->channelName,"channelName");
		RequestCheckUtil::checkNotNull($this->fee,"fee");
		RequestCheckUtil::checkNotNull($this->password,"password");
		RequestCheckUtil::checkNotNull($this->payment,"payment");
		RequestCheckUtil::checkNotNull($this->reservationCode,"reservationCode");
		RequestCheckUtil::checkNotNull($this->tax,"tax");
		RequestCheckUtil::checkNotNull($this->totalMoney,"totalMoney");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
