<?php
/**
 * TOP API: rds.aliyuncs.com.ImportDataFromDatabase.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Rds20140815ImportDataFromDatabaseRequest
{
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 全量：Full
全量+增量:Incremental
	 **/
	private $importDataType;
	
	/** 
	 * True：锁表，Flase：不锁表
	 **/
	private $isLockTable;
	
	/** 
	 * 数据库名称
	 **/
	private $sourceDatabaseDBNames;
	
	/** 
	 * 源数据库IP
	 **/
	private $sourceDatabaseIp;
	
	/** 
	 * 源数据库密码
	 **/
	private $sourceDatabasePassword;
	
	/** 
	 * 源数据库port
	 **/
	private $sourceDatabasePort;
	
	/** 
	 * 源数据库用户名
	 **/
	private $sourceDatabaseUserName;
	
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

	public function setImportDataType($importDataType)
	{
		$this->importDataType = $importDataType;
		$this->apiParas["ImportDataType"] = $importDataType;
	}

	public function getImportDataType()
	{
		return $this->importDataType;
	}

	public function setIsLockTable($isLockTable)
	{
		$this->isLockTable = $isLockTable;
		$this->apiParas["IsLockTable"] = $isLockTable;
	}

	public function getIsLockTable()
	{
		return $this->isLockTable;
	}

	public function setSourceDatabaseDBNames($sourceDatabaseDBNames)
	{
		$this->sourceDatabaseDBNames = $sourceDatabaseDBNames;
		$this->apiParas["SourceDatabaseDBNames"] = $sourceDatabaseDBNames;
	}

	public function getSourceDatabaseDBNames()
	{
		return $this->sourceDatabaseDBNames;
	}

	public function setSourceDatabaseIp($sourceDatabaseIp)
	{
		$this->sourceDatabaseIp = $sourceDatabaseIp;
		$this->apiParas["SourceDatabaseIp"] = $sourceDatabaseIp;
	}

	public function getSourceDatabaseIp()
	{
		return $this->sourceDatabaseIp;
	}

	public function setSourceDatabasePassword($sourceDatabasePassword)
	{
		$this->sourceDatabasePassword = $sourceDatabasePassword;
		$this->apiParas["SourceDatabasePassword"] = $sourceDatabasePassword;
	}

	public function getSourceDatabasePassword()
	{
		return $this->sourceDatabasePassword;
	}

	public function setSourceDatabasePort($sourceDatabasePort)
	{
		$this->sourceDatabasePort = $sourceDatabasePort;
		$this->apiParas["SourceDatabasePort"] = $sourceDatabasePort;
	}

	public function getSourceDatabasePort()
	{
		return $this->sourceDatabasePort;
	}

	public function setSourceDatabaseUserName($sourceDatabaseUserName)
	{
		$this->sourceDatabaseUserName = $sourceDatabaseUserName;
		$this->apiParas["SourceDatabaseUserName"] = $sourceDatabaseUserName;
	}

	public function getSourceDatabaseUserName()
	{
		return $this->sourceDatabaseUserName;
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
		return "rds.aliyuncs.com.ImportDataFromDatabase.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->importDataType,"importDataType");
		RequestCheckUtil::checkNotNull($this->isLockTable,"isLockTable");
		RequestCheckUtil::checkNotNull($this->sourceDatabaseDBNames,"sourceDatabaseDBNames");
		RequestCheckUtil::checkNotNull($this->sourceDatabaseIp,"sourceDatabaseIp");
		RequestCheckUtil::checkNotNull($this->sourceDatabasePassword,"sourceDatabasePassword");
		RequestCheckUtil::checkNotNull($this->sourceDatabasePort,"sourceDatabasePort");
		RequestCheckUtil::checkNotNull($this->sourceDatabaseUserName,"sourceDatabaseUserName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
