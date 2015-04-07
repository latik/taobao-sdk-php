<?php
/**
 * TOP API: taobao.baichuan.securepic.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class BaichuanSecurepicGetRequest
{
	/** 
	 * 应用唯一标识
	 **/
	private $appUniqueIdentifer;
	
	/** 
	 * rsa 需Base64编码
	 **/
	private $certRsaContent;
	
	/** 
	 * os类型
	 **/
	private $osType;
	
	/** 
	 * 应用key
	 **/
	private $userAppkey;
	
	private $apiParas = array();
	
	public function setAppUniqueIdentifer($appUniqueIdentifer)
	{
		$this->appUniqueIdentifer = $appUniqueIdentifer;
		$this->apiParas["app_unique_identifer"] = $appUniqueIdentifer;
	}

	public function getAppUniqueIdentifer()
	{
		return $this->appUniqueIdentifer;
	}

	public function setCertRsaContent($certRsaContent)
	{
		$this->certRsaContent = $certRsaContent;
		$this->apiParas["cert_rsa_content"] = $certRsaContent;
	}

	public function getCertRsaContent()
	{
		return $this->certRsaContent;
	}

	public function setOsType($osType)
	{
		$this->osType = $osType;
		$this->apiParas["os_type"] = $osType;
	}

	public function getOsType()
	{
		return $this->osType;
	}

	public function setUserAppkey($userAppkey)
	{
		$this->userAppkey = $userAppkey;
		$this->apiParas["user_appkey"] = $userAppkey;
	}

	public function getUserAppkey()
	{
		return $this->userAppkey;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.securepic.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appUniqueIdentifer,"appUniqueIdentifer");
		RequestCheckUtil::checkNotNull($this->osType,"osType");
		RequestCheckUtil::checkNotNull($this->userAppkey,"userAppkey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
