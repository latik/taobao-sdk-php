<?php
/**
 * TOP API: taobao.alitrip.flightinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class AlitripFlightinfoGetRequest
{
	/** 
	 * 航空公司大写二字码
	 **/
	private $airlineCode;
	
	/** 
	 * 到达机场三字码
	 **/
	private $arrAirport;
	
	/** 
	 * 舱位
	 **/
	private $cabin;
	
	/** 
	 * 接入方提供的用户名
	 **/
	private $channelName;
	
	/** 
	 * 起飞机场三字码
	 **/
	private $depAirport;
	
	/** 
	 * 起飞日期
	 **/
	private $depDate;
	
	/** 
	 * 航班号
	 **/
	private $flightNo;
	
	/** 
	 * 接入方提供的密码
	 **/
	private $password;
	
	/** 
	 * 价格
	 **/
	private $price;
	
	private $apiParas = array();
	
	public function setAirlineCode($airlineCode)
	{
		$this->airlineCode = $airlineCode;
		$this->apiParas["airline_code"] = $airlineCode;
	}

	public function getAirlineCode()
	{
		return $this->airlineCode;
	}

	public function setArrAirport($arrAirport)
	{
		$this->arrAirport = $arrAirport;
		$this->apiParas["arr_airport"] = $arrAirport;
	}

	public function getArrAirport()
	{
		return $this->arrAirport;
	}

	public function setCabin($cabin)
	{
		$this->cabin = $cabin;
		$this->apiParas["cabin"] = $cabin;
	}

	public function getCabin()
	{
		return $this->cabin;
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

	public function setDepAirport($depAirport)
	{
		$this->depAirport = $depAirport;
		$this->apiParas["dep_airport"] = $depAirport;
	}

	public function getDepAirport()
	{
		return $this->depAirport;
	}

	public function setDepDate($depDate)
	{
		$this->depDate = $depDate;
		$this->apiParas["dep_date"] = $depDate;
	}

	public function getDepDate()
	{
		return $this->depDate;
	}

	public function setFlightNo($flightNo)
	{
		$this->flightNo = $flightNo;
		$this->apiParas["flight_no"] = $flightNo;
	}

	public function getFlightNo()
	{
		return $this->flightNo;
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

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.flightinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->airlineCode,"airlineCode");
		RequestCheckUtil::checkNotNull($this->arrAirport,"arrAirport");
		RequestCheckUtil::checkNotNull($this->cabin,"cabin");
		RequestCheckUtil::checkNotNull($this->channelName,"channelName");
		RequestCheckUtil::checkNotNull($this->depAirport,"depAirport");
		RequestCheckUtil::checkNotNull($this->depDate,"depDate");
		RequestCheckUtil::checkNotNull($this->flightNo,"flightNo");
		RequestCheckUtil::checkNotNull($this->password,"password");
		RequestCheckUtil::checkNotNull($this->price,"price");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
