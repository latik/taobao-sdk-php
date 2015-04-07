<?php
/**
 * TOP API: taobao.baichuan.app.create request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class BaichuanAppCreateRequest
{
	/** 
	 * 回调地址
	 **/
	private $callbackurl;
	
	/** 
	 * 应用描述简介
	 **/
	private $description;
	
	/** 
	 * 应用logo
	 **/
	private $logo;
	
	/** 
	 * 应用名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setCallbackurl($callbackurl)
	{
		$this->callbackurl = $callbackurl;
		$this->apiParas["callbackurl"] = $callbackurl;
	}

	public function getCallbackurl()
	{
		return $this->callbackurl;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setLogo($logo)
	{
		$this->logo = $logo;
		$this->apiParas["logo"] = $logo;
	}

	public function getLogo()
	{
		return $this->logo;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.app.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->callbackurl,"callbackurl");
		RequestCheckUtil::checkNotNull($this->logo,"logo");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
