<?php
/**
 * TOP API: rds.aliyuncs.com.ModifyBackupPolicy.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Rds20140815ModifyBackupPolicyRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday
	 **/
	private $preferredBackupPeriod;
	
	/** 
	 * 备份时间，格式：
00:00—01:00,01:00-02:00一个小时为一个粒度等等
	 **/
	private $preferredBackupTime;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setPreferredBackupPeriod($preferredBackupPeriod)
	{
		$this->preferredBackupPeriod = $preferredBackupPeriod;
		$this->apiParas["PreferredBackupPeriod"] = $preferredBackupPeriod;
	}

	public function getPreferredBackupPeriod()
	{
		return $this->preferredBackupPeriod;
	}

	public function setPreferredBackupTime($preferredBackupTime)
	{
		$this->preferredBackupTime = $preferredBackupTime;
		$this->apiParas["PreferredBackupTime"] = $preferredBackupTime;
	}

	public function getPreferredBackupTime()
	{
		return $this->preferredBackupTime;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.ModifyBackupPolicy.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->preferredBackupPeriod,"preferredBackupPeriod");
		RequestCheckUtil::checkNotNull($this->preferredBackupTime,"preferredBackupTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
