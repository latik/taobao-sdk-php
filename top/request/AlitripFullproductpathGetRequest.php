<?php
/**
 * TOP API: taobao.alitrip.fullproductpath.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class AlitripFullproductpathGetRequest
{
	/** 
	 * CA,CZ,MU等航司二字码，以,号分割
	 **/
	private $airlineCode;
	
	/** 
	 * 接入方提供的用户名
	 **/
	private $channelName;
	
	/** 
	 * 接入方提供的密码，以MD5方式加密后传入
	 **/
	private $password;
	
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

	public function setChannelName($channelName)
	{
		$this->channelName = $channelName;
		$this->apiParas["channel_name"] = $channelName;
	}

	public function getChannelName()
	{
		return $this->channelName;
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

	public function getApiMethodName()
	{
		return "taobao.alitrip.fullproductpath.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->airlineCode,"airlineCode");
		RequestCheckUtil::checkNotNull($this->channelName,"channelName");
		RequestCheckUtil::checkNotNull($this->password,"password");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
