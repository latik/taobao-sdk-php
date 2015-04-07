<?php
/**
 * TOP API: taobao.wifi.session.check request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class WifiSessionCheckRequest
{
	/** 
	 * 设备id
	 **/
	private $equipId;
	
	/** 
	 * taowifi生成的会话id
	 **/
	private $sessionId;
	
	/** 
	 * 用户id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setEquipId($equipId)
	{
		$this->equipId = $equipId;
		$this->apiParas["equip_id"] = $equipId;
	}

	public function getEquipId()
	{
		return $this->equipId;
	}

	public function setSessionId($sessionId)
	{
		$this->sessionId = $sessionId;
		$this->apiParas["session_id"] = $sessionId;
	}

	public function getSessionId()
	{
		return $this->sessionId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.wifi.session.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->equipId,"equipId");
		RequestCheckUtil::checkNotNull($this->sessionId,"sessionId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
