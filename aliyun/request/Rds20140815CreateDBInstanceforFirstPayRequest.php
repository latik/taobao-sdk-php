<?php
/**
 * TOP API: rds.aliyuncs.com.CreateDBInstanceforFirstPay.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Rds20140815CreateDBInstanceforFirstPayRequest
{
	/** 
	 * 字符集
	 **/
	private $characterSetName;
	
	/** 
	 * 用于保证幂等性。
	 **/
	private $clientToken;
	
	/** 
	 * 实例规格
	 **/
	private $dBInstanceClass;
	
	/** 
	 * 实例IP的网络类型：
Internet代表公网，
Intranet代表私网；
	 **/
	private $dBInstanceNetType;
	
	/** 
	 * 实例的描述或备注信息，不超过256个字节
可用字符限制说清楚，像ECS的靠拢。
	 **/
	private $dBInstanceRemarks;
	
	/** 
	 * 自定义存储空间，取值范围：mysql为[5,1000]，sql server为[10，1000]。
单位：GB
	 **/
	private $dBInstanceStorage;
	
	/** 
	 * 数据库类型，取值范围为MySQL|SQLServer。
	 **/
	private $engine;
	
	/** 
	 * 数据库版本号
取值如下：
MySQL：5.1/5.5/5.6，默认为5.5
SQLServer：2008r2，默认为2008r2
	 **/
	private $engineVersion;
	
	/** 
	 * 数据中心，长度不超过50个字符<br /> 支持最大长度为：50<br /> 支持的最大列表长度为：50
	 **/
	private $regionId;
	
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

	public function setClientToken($clientToken)
	{
		$this->clientToken = $clientToken;
		$this->apiParas["ClientToken"] = $clientToken;
	}

	public function getClientToken()
	{
		return $this->clientToken;
	}

	public function setdBInstanceClass($dBInstanceClass)
	{
		$this->dBInstanceClass = $dBInstanceClass;
		$this->apiParas["DBInstanceClass"] = $dBInstanceClass;
	}

	public function getdBInstanceClass()
	{
		return $this->dBInstanceClass;
	}

	public function setdBInstanceNetType($dBInstanceNetType)
	{
		$this->dBInstanceNetType = $dBInstanceNetType;
		$this->apiParas["DBInstanceNetType"] = $dBInstanceNetType;
	}

	public function getdBInstanceNetType()
	{
		return $this->dBInstanceNetType;
	}

	public function setdBInstanceRemarks($dBInstanceRemarks)
	{
		$this->dBInstanceRemarks = $dBInstanceRemarks;
		$this->apiParas["DBInstanceRemarks"] = $dBInstanceRemarks;
	}

	public function getdBInstanceRemarks()
	{
		return $this->dBInstanceRemarks;
	}

	public function setdBInstanceStorage($dBInstanceStorage)
	{
		$this->dBInstanceStorage = $dBInstanceStorage;
		$this->apiParas["DBInstanceStorage"] = $dBInstanceStorage;
	}

	public function getdBInstanceStorage()
	{
		return $this->dBInstanceStorage;
	}

	public function setEngine($engine)
	{
		$this->engine = $engine;
		$this->apiParas["Engine"] = $engine;
	}

	public function getEngine()
	{
		return $this->engine;
	}

	public function setEngineVersion($engineVersion)
	{
		$this->engineVersion = $engineVersion;
		$this->apiParas["EngineVersion"] = $engineVersion;
	}

	public function getEngineVersion()
	{
		return $this->engineVersion;
	}

	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		$this->apiParas["RegionId"] = $regionId;
	}

	public function getRegionId()
	{
		return $this->regionId;
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
		return "rds.aliyuncs.com.CreateDBInstanceforFirstPay.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clientToken,"clientToken");
		RequestCheckUtil::checkNotNull($this->dBInstanceClass,"dBInstanceClass");
		RequestCheckUtil::checkNotNull($this->dBInstanceNetType,"dBInstanceNetType");
		RequestCheckUtil::checkNotNull($this->dBInstanceStorage,"dBInstanceStorage");
		RequestCheckUtil::checkNotNull($this->engine,"engine");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
		RequestCheckUtil::checkMaxLength($this->regionId,50,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
