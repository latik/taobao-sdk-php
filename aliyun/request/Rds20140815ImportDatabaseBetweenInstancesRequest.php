<?php
/**
 * TOP API: rds.aliyuncs.com.ImportDatabaseBetweenInstances.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Rds20140815ImportDatabaseBetweenInstancesRequest
{
	/** 
	 * 待迁移实例的DB信息，JSON串格式，见DBInfo参数，示例：{"DBNames":["mydb","mydb2"]}
对于MySQL实例，值为数组 
{"DBNames":{"srcdb":"destdb"," srcdb2":"destmydb2"]}
对于SQLServer实例，值为key-value对，key为原db，目标为迁移目标db，此项必填，key和value值也不能相同
	 **/
	private $dBInfo;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 源实例名，不能与待迁移实例相同
	 **/
	private $sourceDBInstanceId;
	
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
	
	public function setdBInfo($dBInfo)
	{
		$this->dBInfo = $dBInfo;
		$this->apiParas["DBInfo"] = $dBInfo;
	}

	public function getdBInfo()
	{
		return $this->dBInfo;
	}

	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setSourceDBInstanceId($sourceDBInstanceId)
	{
		$this->sourceDBInstanceId = $sourceDBInstanceId;
		$this->apiParas["SourceDBInstanceId"] = $sourceDBInstanceId;
	}

	public function getSourceDBInstanceId()
	{
		return $this->sourceDBInstanceId;
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
		return "rds.aliyuncs.com.ImportDatabaseBetweenInstances.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInfo,"dBInfo");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->sourceDBInstanceId,"sourceDBInstanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
