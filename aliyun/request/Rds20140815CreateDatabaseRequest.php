<?php
/**
 * TOP API: rds.aliyuncs.com.CreateDatabase.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Rds20140815CreateDatabaseRequest
{
	/** 
	 * 字符集，取值范围限定如下字符集：
MySQL类型：utf8|gbk|latin1|utf8mb4(5.5和5.6有)
SQLServer类型：
Chinese_PRC_CI_AS
Chinese_PRC_CS_AS
SQL_Latin1_General_CP1_CI_AS
SQL_Latin1_General_CP1_CS_AS
Chinese_PRC_BIN
	 **/
	private $characterSetName;
	
	/** 
	 * 数据库描述
	 **/
	private $createDatabase;
	
	/** 
	 * 数据库描述，不超过256个字符
	 **/
	private $dBDescription;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 数据库名，由小写字母，数字、下划线组成，字母开头，长度不超过64个字符
	 **/
	private $dBName;
	
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
	
	public function setCharacterSetName($characterSetName)
	{
		$this->characterSetName = $characterSetName;
		$this->apiParas["CharacterSetName"] = $characterSetName;
	}

	public function getCharacterSetName()
	{
		return $this->characterSetName;
	}

	public function setCreateDatabase($createDatabase)
	{
		$this->createDatabase = $createDatabase;
		$this->apiParas["CreateDatabase"] = $createDatabase;
	}

	public function getCreateDatabase()
	{
		return $this->createDatabase;
	}

	public function setdBDescription($dBDescription)
	{
		$this->dBDescription = $dBDescription;
		$this->apiParas["DBDescription"] = $dBDescription;
	}

	public function getdBDescription()
	{
		return $this->dBDescription;
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

	public function setdBName($dBName)
	{
		$this->dBName = $dBName;
		$this->apiParas["DBName"] = $dBName;
	}

	public function getdBName()
	{
		return $this->dBName;
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
		return "rds.aliyuncs.com.CreateDatabase.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->characterSetName,"characterSetName");
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->dBName,"dBName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
