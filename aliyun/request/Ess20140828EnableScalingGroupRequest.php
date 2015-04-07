<?php
/**
 * TOP API: ess.aliyuncs.com.EnableScalingGroup.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Ess20140828EnableScalingGroupRequest
{
	/** 
	 * 伸缩配置的ID
	 **/
	private $activeScalingConfigurationId;
	
	/** 
	 * 最多可以支持20个。（需要在启动伸缩组后优先加入的既有实例）
	 **/
	private $instanceId1;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId10;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId11;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId12;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId13;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId14;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId15;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId16;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId17;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId18;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId19;
	
	/** 
	 * InstanceId
	 **/
	private $instanceId2;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId3;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId4;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId5;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId6;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId7;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId8;
	
	/** 
	 * InstanceId.
	 **/
	private $instanceId9;
	
	/** 
	 * Scaling Group的ID，用户账号下唯一。
	 **/
	private $scalingGroupId;
	
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
	
	public function setActiveScalingConfigurationId($activeScalingConfigurationId)
	{
		$this->activeScalingConfigurationId = $activeScalingConfigurationId;
		$this->apiParas["ActiveScalingConfigurationId"] = $activeScalingConfigurationId;
	}

	public function getActiveScalingConfigurationId()
	{
		return $this->activeScalingConfigurationId;
	}

	public function setInstanceId1($instanceId1)
	{
		$this->instanceId1 = $instanceId1;
		$this->apiParas["InstanceId.1"] = $instanceId1;
	}

	public function getInstanceId1()
	{
		return $this->instanceId1;
	}

	public function setInstanceId10($instanceId10)
	{
		$this->instanceId10 = $instanceId10;
		$this->apiParas["InstanceId.10"] = $instanceId10;
	}

	public function getInstanceId10()
	{
		return $this->instanceId10;
	}

	public function setInstanceId11($instanceId11)
	{
		$this->instanceId11 = $instanceId11;
		$this->apiParas["InstanceId.11"] = $instanceId11;
	}

	public function getInstanceId11()
	{
		return $this->instanceId11;
	}

	public function setInstanceId12($instanceId12)
	{
		$this->instanceId12 = $instanceId12;
		$this->apiParas["InstanceId.12"] = $instanceId12;
	}

	public function getInstanceId12()
	{
		return $this->instanceId12;
	}

	public function setInstanceId13($instanceId13)
	{
		$this->instanceId13 = $instanceId13;
		$this->apiParas["InstanceId.13"] = $instanceId13;
	}

	public function getInstanceId13()
	{
		return $this->instanceId13;
	}

	public function setInstanceId14($instanceId14)
	{
		$this->instanceId14 = $instanceId14;
		$this->apiParas["InstanceId.14"] = $instanceId14;
	}

	public function getInstanceId14()
	{
		return $this->instanceId14;
	}

	public function setInstanceId15($instanceId15)
	{
		$this->instanceId15 = $instanceId15;
		$this->apiParas["InstanceId.15"] = $instanceId15;
	}

	public function getInstanceId15()
	{
		return $this->instanceId15;
	}

	public function setInstanceId16($instanceId16)
	{
		$this->instanceId16 = $instanceId16;
		$this->apiParas["InstanceId.16"] = $instanceId16;
	}

	public function getInstanceId16()
	{
		return $this->instanceId16;
	}

	public function setInstanceId17($instanceId17)
	{
		$this->instanceId17 = $instanceId17;
		$this->apiParas["InstanceId.17"] = $instanceId17;
	}

	public function getInstanceId17()
	{
		return $this->instanceId17;
	}

	public function setInstanceId18($instanceId18)
	{
		$this->instanceId18 = $instanceId18;
		$this->apiParas["InstanceId.18"] = $instanceId18;
	}

	public function getInstanceId18()
	{
		return $this->instanceId18;
	}

	public function setInstanceId19($instanceId19)
	{
		$this->instanceId19 = $instanceId19;
		$this->apiParas["InstanceId.19"] = $instanceId19;
	}

	public function getInstanceId19()
	{
		return $this->instanceId19;
	}

	public function setInstanceId2($instanceId2)
	{
		$this->instanceId2 = $instanceId2;
		$this->apiParas["InstanceId.2"] = $instanceId2;
	}

	public function getInstanceId2()
	{
		return $this->instanceId2;
	}

	public function setInstanceId3($instanceId3)
	{
		$this->instanceId3 = $instanceId3;
		$this->apiParas["InstanceId.3"] = $instanceId3;
	}

	public function getInstanceId3()
	{
		return $this->instanceId3;
	}

	public function setInstanceId4($instanceId4)
	{
		$this->instanceId4 = $instanceId4;
		$this->apiParas["InstanceId.4"] = $instanceId4;
	}

	public function getInstanceId4()
	{
		return $this->instanceId4;
	}

	public function setInstanceId5($instanceId5)
	{
		$this->instanceId5 = $instanceId5;
		$this->apiParas["InstanceId.5"] = $instanceId5;
	}

	public function getInstanceId5()
	{
		return $this->instanceId5;
	}

	public function setInstanceId6($instanceId6)
	{
		$this->instanceId6 = $instanceId6;
		$this->apiParas["InstanceId.6"] = $instanceId6;
	}

	public function getInstanceId6()
	{
		return $this->instanceId6;
	}

	public function setInstanceId7($instanceId7)
	{
		$this->instanceId7 = $instanceId7;
		$this->apiParas["InstanceId.7"] = $instanceId7;
	}

	public function getInstanceId7()
	{
		return $this->instanceId7;
	}

	public function setInstanceId8($instanceId8)
	{
		$this->instanceId8 = $instanceId8;
		$this->apiParas["InstanceId.8"] = $instanceId8;
	}

	public function getInstanceId8()
	{
		return $this->instanceId8;
	}

	public function setInstanceId9($instanceId9)
	{
		$this->instanceId9 = $instanceId9;
		$this->apiParas["InstanceId.9"] = $instanceId9;
	}

	public function getInstanceId9()
	{
		return $this->instanceId9;
	}

	public function setScalingGroupId($scalingGroupId)
	{
		$this->scalingGroupId = $scalingGroupId;
		$this->apiParas["ScalingGroupId"] = $scalingGroupId;
	}

	public function getScalingGroupId()
	{
		return $this->scalingGroupId;
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
		return "ess.aliyuncs.com.EnableScalingGroup.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scalingGroupId,"scalingGroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
