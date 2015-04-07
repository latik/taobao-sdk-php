<?php
/**
 * TOP API: taobao.baichuan.app.audit.query request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class BaichuanAppAuditQueryRequest
{
	/** 
	 * 应用的key
	 **/
	private $userAppkey;
	
	private $apiParas = array();
	
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
		return "taobao.baichuan.app.audit.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userAppkey,"userAppkey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
