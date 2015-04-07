<?php
/**
 * TOP API: rds.aliyuncs.com.CreatePostpaidDBInstance.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Rds20140815CreatePostpaidDBInstanceRequest
{
	/** 
	 * 用于保证幂等性
	 **/
	private $clientToken;
	
	/** 
	 * 实例规格，可选值：见实例规格附表
	 **/
	private $dBInstanceClass;
	
	/** 
	 * 不能以http://,https开头 开始以中文，英文字母开头 可以包含中文，英文字符，_，-，数字字符長度2~256
	 **/
	private $dBInstanceDescription;
	
	/** 
	 * 实例IP的网络类型：
Internet代表公网，
Intranet代表私网；
	 **/
	private $dBInstanceNetType;
	
	/** 
	 * 自定义存储空间，取值范围：mysql为[5,1000]，sql server为[10，1000]。
单位：GB
	 **/
	private $dBInstanceStorage;
	
	/** 
	 * 数据库类型，取值范围为MySQL|SQLServer
	 **/
	private $engine;
	
	/** 
	 * 数据库版本号
取值如下：
MySQL：5.5/5.6SQLServer：2008r2
	 **/
	private $engineVersion;
	
	/** 
	 * 数据中心，长度不超过50个字符
	 **/
	private $regionId;
	
	/** 
	 * 允许访问该实例下所有数据库的IP名单，以逗号隔开，不可重复，最多100个；支持格式：%，0.0.0.0/0，10.23.12.24（IP），或者10.23.12.24/24（CIDR模式，无类域间路由，/24表示了地址中前缀的长度，范围[1,32]）
其中，0.0.0.0/0，表示不限制，用户输入%提示报错
	 **/
	private $securityIPList;
	
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

	public function setdBInstanceDescription($dBInstanceDescription)
	{
		$this->dBInstanceDescription = $dBInstanceDescription;
		$this->apiParas["DBInstanceDescription"] = $dBInstanceDescription;
	}

	public function getdBInstanceDescription()
	{
		return $this->dBInstanceDescription;
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

	public function setSecurityIPList($securityIPList)
	{
		$this->securityIPList = $securityIPList;
		$this->apiParas["SecurityIPList"] = $securityIPList;
	}

	public function getSecurityIPList()
	{
		return $this->securityIPList;
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
		return "rds.aliyuncs.com.CreatePostpaidDBInstance.2014-08-15";
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
		RequestCheckUtil::checkNotNull($this->engineVersion,"engineVersion");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
		RequestCheckUtil::checkNotNull($this->securityIPList,"securityIPList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
