<?php
/**
 * TOP API: ess.aliyuncs.com.DescribeScalingConfigurations.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828DescribeScalingConfigurationsRequest
{
	/** 
	 * PageNumber
	 **/
	private $pageNumber;
	
	/** 
	 * PageSize<br /> 支持最大值为：50
	 **/
	private $pageSize;
	
	/** 
	 * 伸缩配置所在的region
	 **/
	private $regionId;
	
	/** 
	 * 伸缩配置ID，可以输入多个，最多可以支持10个。返回查询结果时略去失效的ScalingConfigurationId，并且不报错。
	 **/
	private $scalingConfigurationId1;
	
	/** 
	 * ScalingConfigurationId.1
	 **/
	private $scalingConfigurationId10;
	
	/** 
	 * ScalingConfigurationId
	 **/
	private $scalingConfigurationId2;
	
	/** 
	 * ScalingConfigurationId
	 **/
	private $scalingConfigurationId3;
	
	/** 
	 * ScalingConfigurationId.1
	 **/
	private $scalingConfigurationId4;
	
	/** 
	 * ScalingConfigurationId.1
	 **/
	private $scalingConfigurationId5;
	
	/** 
	 * ScalingConfigurationId.1
	 **/
	private $scalingConfigurationId6;
	
	/** 
	 * ScalingConfigurationId.7
	 **/
	private $scalingConfigurationId7;
	
	/** 
	 * ScalingConfigurationId.1
	 **/
	private $scalingConfigurationId8;
	
	/** 
	 * ScalingConfigurationId.1
	 **/
	private $scalingConfigurationId9;
	
	/** 
	 * 伸缩组名称，可以输入多个，最多可以支持10个。返回查询结果时略去失效的ScalingGroupName，并且不报错。
	 **/
	private $scalingConfigurationName1;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName10;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName2;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName3;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName4;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName5;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName6;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName7;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName8;
	
	/** 
	 * ScalingConfigurationName.1
	 **/
	private $scalingConfigurationName9;
	
	/** 
	 * 伸缩组ID
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
	
	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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

	public function setScalingConfigurationId1($scalingConfigurationId1)
	{
		$this->scalingConfigurationId1 = $scalingConfigurationId1;
		$this->apiParas["ScalingConfigurationId.1"] = $scalingConfigurationId1;
	}

	public function getScalingConfigurationId1()
	{
		return $this->scalingConfigurationId1;
	}

	public function setScalingConfigurationId10($scalingConfigurationId10)
	{
		$this->scalingConfigurationId10 = $scalingConfigurationId10;
		$this->apiParas["ScalingConfigurationId.10"] = $scalingConfigurationId10;
	}

	public function getScalingConfigurationId10()
	{
		return $this->scalingConfigurationId10;
	}

	public function setScalingConfigurationId2($scalingConfigurationId2)
	{
		$this->scalingConfigurationId2 = $scalingConfigurationId2;
		$this->apiParas["ScalingConfigurationId.2"] = $scalingConfigurationId2;
	}

	public function getScalingConfigurationId2()
	{
		return $this->scalingConfigurationId2;
	}

	public function setScalingConfigurationId3($scalingConfigurationId3)
	{
		$this->scalingConfigurationId3 = $scalingConfigurationId3;
		$this->apiParas["ScalingConfigurationId.3"] = $scalingConfigurationId3;
	}

	public function getScalingConfigurationId3()
	{
		return $this->scalingConfigurationId3;
	}

	public function setScalingConfigurationId4($scalingConfigurationId4)
	{
		$this->scalingConfigurationId4 = $scalingConfigurationId4;
		$this->apiParas["ScalingConfigurationId.4"] = $scalingConfigurationId4;
	}

	public function getScalingConfigurationId4()
	{
		return $this->scalingConfigurationId4;
	}

	public function setScalingConfigurationId5($scalingConfigurationId5)
	{
		$this->scalingConfigurationId5 = $scalingConfigurationId5;
		$this->apiParas["ScalingConfigurationId.5"] = $scalingConfigurationId5;
	}

	public function getScalingConfigurationId5()
	{
		return $this->scalingConfigurationId5;
	}

	public function setScalingConfigurationId6($scalingConfigurationId6)
	{
		$this->scalingConfigurationId6 = $scalingConfigurationId6;
		$this->apiParas["ScalingConfigurationId.6"] = $scalingConfigurationId6;
	}

	public function getScalingConfigurationId6()
	{
		return $this->scalingConfigurationId6;
	}

	public function setScalingConfigurationId7($scalingConfigurationId7)
	{
		$this->scalingConfigurationId7 = $scalingConfigurationId7;
		$this->apiParas["ScalingConfigurationId.7"] = $scalingConfigurationId7;
	}

	public function getScalingConfigurationId7()
	{
		return $this->scalingConfigurationId7;
	}

	public function setScalingConfigurationId8($scalingConfigurationId8)
	{
		$this->scalingConfigurationId8 = $scalingConfigurationId8;
		$this->apiParas["ScalingConfigurationId.8"] = $scalingConfigurationId8;
	}

	public function getScalingConfigurationId8()
	{
		return $this->scalingConfigurationId8;
	}

	public function setScalingConfigurationId9($scalingConfigurationId9)
	{
		$this->scalingConfigurationId9 = $scalingConfigurationId9;
		$this->apiParas["ScalingConfigurationId.9"] = $scalingConfigurationId9;
	}

	public function getScalingConfigurationId9()
	{
		return $this->scalingConfigurationId9;
	}

	public function setScalingConfigurationName1($scalingConfigurationName1)
	{
		$this->scalingConfigurationName1 = $scalingConfigurationName1;
		$this->apiParas["ScalingConfigurationName.1"] = $scalingConfigurationName1;
	}

	public function getScalingConfigurationName1()
	{
		return $this->scalingConfigurationName1;
	}

	public function setScalingConfigurationName10($scalingConfigurationName10)
	{
		$this->scalingConfigurationName10 = $scalingConfigurationName10;
		$this->apiParas["ScalingConfigurationName.10"] = $scalingConfigurationName10;
	}

	public function getScalingConfigurationName10()
	{
		return $this->scalingConfigurationName10;
	}

	public function setScalingConfigurationName2($scalingConfigurationName2)
	{
		$this->scalingConfigurationName2 = $scalingConfigurationName2;
		$this->apiParas["ScalingConfigurationName.2"] = $scalingConfigurationName2;
	}

	public function getScalingConfigurationName2()
	{
		return $this->scalingConfigurationName2;
	}

	public function setScalingConfigurationName3($scalingConfigurationName3)
	{
		$this->scalingConfigurationName3 = $scalingConfigurationName3;
		$this->apiParas["ScalingConfigurationName.3"] = $scalingConfigurationName3;
	}

	public function getScalingConfigurationName3()
	{
		return $this->scalingConfigurationName3;
	}

	public function setScalingConfigurationName4($scalingConfigurationName4)
	{
		$this->scalingConfigurationName4 = $scalingConfigurationName4;
		$this->apiParas["ScalingConfigurationName.4"] = $scalingConfigurationName4;
	}

	public function getScalingConfigurationName4()
	{
		return $this->scalingConfigurationName4;
	}

	public function setScalingConfigurationName5($scalingConfigurationName5)
	{
		$this->scalingConfigurationName5 = $scalingConfigurationName5;
		$this->apiParas["ScalingConfigurationName.5"] = $scalingConfigurationName5;
	}

	public function getScalingConfigurationName5()
	{
		return $this->scalingConfigurationName5;
	}

	public function setScalingConfigurationName6($scalingConfigurationName6)
	{
		$this->scalingConfigurationName6 = $scalingConfigurationName6;
		$this->apiParas["ScalingConfigurationName.6"] = $scalingConfigurationName6;
	}

	public function getScalingConfigurationName6()
	{
		return $this->scalingConfigurationName6;
	}

	public function setScalingConfigurationName7($scalingConfigurationName7)
	{
		$this->scalingConfigurationName7 = $scalingConfigurationName7;
		$this->apiParas["ScalingConfigurationName.7"] = $scalingConfigurationName7;
	}

	public function getScalingConfigurationName7()
	{
		return $this->scalingConfigurationName7;
	}

	public function setScalingConfigurationName8($scalingConfigurationName8)
	{
		$this->scalingConfigurationName8 = $scalingConfigurationName8;
		$this->apiParas["ScalingConfigurationName.8"] = $scalingConfigurationName8;
	}

	public function getScalingConfigurationName8()
	{
		return $this->scalingConfigurationName8;
	}

	public function setScalingConfigurationName9($scalingConfigurationName9)
	{
		$this->scalingConfigurationName9 = $scalingConfigurationName9;
		$this->apiParas["ScalingConfigurationName.9"] = $scalingConfigurationName9;
	}

	public function getScalingConfigurationName9()
	{
		return $this->scalingConfigurationName9;
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
		return "ess.aliyuncs.com.DescribeScalingConfigurations.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
