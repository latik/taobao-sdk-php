<?php
/**
 * TOP API: ess.aliyuncs.com.DescribeScalingGroups.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828DescribeScalingGroupsRequest
{
	/** 
	 * PageNumber<br /> 支持最小值为：1
	 **/
	private $pageNumber;
	
	/** 
	 * PageSize<br /> 支持最大值为：50
	 **/
	private $pageSize;
	
	/** 
	 * RegionId
	 **/
	private $regionId;
	
	/** 
	 * ScalingGroupId
	 **/
	private $scalingGroupId1;
	
	/** 
	 * ScalingGroupId.10
	 **/
	private $scalingGroupId10;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId11;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId12;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId13;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId14;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId15;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId16;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId17;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId18;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId19;
	
	/** 
	 * ScalingGroupId
	 **/
	private $scalingGroupId2;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId20;
	
	/** 
	 * ScalingGroupId.3
	 **/
	private $scalingGroupId3;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId4;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId5;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId6;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId7;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId8;
	
	/** 
	 * ScalingGroupId.
	 **/
	private $scalingGroupId9;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName1;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName10;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName11;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName12;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName13;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName14;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName15;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName16;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName17;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName18;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName19;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName2;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName20;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName3;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName4;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName5;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName6;
	
	/** 
	 * ScalingGroupName.1ScalingGroupName.1
	 **/
	private $scalingGroupName7;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName8;
	
	/** 
	 * ScalingGroupName.1
	 **/
	private $scalingGroupName9;
	
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

	public function setScalingGroupId1($scalingGroupId1)
	{
		$this->scalingGroupId1 = $scalingGroupId1;
		$this->apiParas["ScalingGroupId.1"] = $scalingGroupId1;
	}

	public function getScalingGroupId1()
	{
		return $this->scalingGroupId1;
	}

	public function setScalingGroupId10($scalingGroupId10)
	{
		$this->scalingGroupId10 = $scalingGroupId10;
		$this->apiParas["ScalingGroupId.10"] = $scalingGroupId10;
	}

	public function getScalingGroupId10()
	{
		return $this->scalingGroupId10;
	}

	public function setScalingGroupId11($scalingGroupId11)
	{
		$this->scalingGroupId11 = $scalingGroupId11;
		$this->apiParas["ScalingGroupId.11"] = $scalingGroupId11;
	}

	public function getScalingGroupId11()
	{
		return $this->scalingGroupId11;
	}

	public function setScalingGroupId12($scalingGroupId12)
	{
		$this->scalingGroupId12 = $scalingGroupId12;
		$this->apiParas["ScalingGroupId.12"] = $scalingGroupId12;
	}

	public function getScalingGroupId12()
	{
		return $this->scalingGroupId12;
	}

	public function setScalingGroupId13($scalingGroupId13)
	{
		$this->scalingGroupId13 = $scalingGroupId13;
		$this->apiParas["ScalingGroupId.13"] = $scalingGroupId13;
	}

	public function getScalingGroupId13()
	{
		return $this->scalingGroupId13;
	}

	public function setScalingGroupId14($scalingGroupId14)
	{
		$this->scalingGroupId14 = $scalingGroupId14;
		$this->apiParas["ScalingGroupId.14"] = $scalingGroupId14;
	}

	public function getScalingGroupId14()
	{
		return $this->scalingGroupId14;
	}

	public function setScalingGroupId15($scalingGroupId15)
	{
		$this->scalingGroupId15 = $scalingGroupId15;
		$this->apiParas["ScalingGroupId.15"] = $scalingGroupId15;
	}

	public function getScalingGroupId15()
	{
		return $this->scalingGroupId15;
	}

	public function setScalingGroupId16($scalingGroupId16)
	{
		$this->scalingGroupId16 = $scalingGroupId16;
		$this->apiParas["ScalingGroupId.16"] = $scalingGroupId16;
	}

	public function getScalingGroupId16()
	{
		return $this->scalingGroupId16;
	}

	public function setScalingGroupId17($scalingGroupId17)
	{
		$this->scalingGroupId17 = $scalingGroupId17;
		$this->apiParas["ScalingGroupId.17"] = $scalingGroupId17;
	}

	public function getScalingGroupId17()
	{
		return $this->scalingGroupId17;
	}

	public function setScalingGroupId18($scalingGroupId18)
	{
		$this->scalingGroupId18 = $scalingGroupId18;
		$this->apiParas["ScalingGroupId.18"] = $scalingGroupId18;
	}

	public function getScalingGroupId18()
	{
		return $this->scalingGroupId18;
	}

	public function setScalingGroupId19($scalingGroupId19)
	{
		$this->scalingGroupId19 = $scalingGroupId19;
		$this->apiParas["ScalingGroupId.19"] = $scalingGroupId19;
	}

	public function getScalingGroupId19()
	{
		return $this->scalingGroupId19;
	}

	public function setScalingGroupId2($scalingGroupId2)
	{
		$this->scalingGroupId2 = $scalingGroupId2;
		$this->apiParas["ScalingGroupId.2"] = $scalingGroupId2;
	}

	public function getScalingGroupId2()
	{
		return $this->scalingGroupId2;
	}

	public function setScalingGroupId20($scalingGroupId20)
	{
		$this->scalingGroupId20 = $scalingGroupId20;
		$this->apiParas["ScalingGroupId.20"] = $scalingGroupId20;
	}

	public function getScalingGroupId20()
	{
		return $this->scalingGroupId20;
	}

	public function setScalingGroupId3($scalingGroupId3)
	{
		$this->scalingGroupId3 = $scalingGroupId3;
		$this->apiParas["ScalingGroupId.3"] = $scalingGroupId3;
	}

	public function getScalingGroupId3()
	{
		return $this->scalingGroupId3;
	}

	public function setScalingGroupId4($scalingGroupId4)
	{
		$this->scalingGroupId4 = $scalingGroupId4;
		$this->apiParas["ScalingGroupId.4"] = $scalingGroupId4;
	}

	public function getScalingGroupId4()
	{
		return $this->scalingGroupId4;
	}

	public function setScalingGroupId5($scalingGroupId5)
	{
		$this->scalingGroupId5 = $scalingGroupId5;
		$this->apiParas["ScalingGroupId.5"] = $scalingGroupId5;
	}

	public function getScalingGroupId5()
	{
		return $this->scalingGroupId5;
	}

	public function setScalingGroupId6($scalingGroupId6)
	{
		$this->scalingGroupId6 = $scalingGroupId6;
		$this->apiParas["ScalingGroupId.6"] = $scalingGroupId6;
	}

	public function getScalingGroupId6()
	{
		return $this->scalingGroupId6;
	}

	public function setScalingGroupId7($scalingGroupId7)
	{
		$this->scalingGroupId7 = $scalingGroupId7;
		$this->apiParas["ScalingGroupId.7"] = $scalingGroupId7;
	}

	public function getScalingGroupId7()
	{
		return $this->scalingGroupId7;
	}

	public function setScalingGroupId8($scalingGroupId8)
	{
		$this->scalingGroupId8 = $scalingGroupId8;
		$this->apiParas["ScalingGroupId.8"] = $scalingGroupId8;
	}

	public function getScalingGroupId8()
	{
		return $this->scalingGroupId8;
	}

	public function setScalingGroupId9($scalingGroupId9)
	{
		$this->scalingGroupId9 = $scalingGroupId9;
		$this->apiParas["ScalingGroupId.9"] = $scalingGroupId9;
	}

	public function getScalingGroupId9()
	{
		return $this->scalingGroupId9;
	}

	public function setScalingGroupName1($scalingGroupName1)
	{
		$this->scalingGroupName1 = $scalingGroupName1;
		$this->apiParas["ScalingGroupName.1"] = $scalingGroupName1;
	}

	public function getScalingGroupName1()
	{
		return $this->scalingGroupName1;
	}

	public function setScalingGroupName10($scalingGroupName10)
	{
		$this->scalingGroupName10 = $scalingGroupName10;
		$this->apiParas["ScalingGroupName.10"] = $scalingGroupName10;
	}

	public function getScalingGroupName10()
	{
		return $this->scalingGroupName10;
	}

	public function setScalingGroupName11($scalingGroupName11)
	{
		$this->scalingGroupName11 = $scalingGroupName11;
		$this->apiParas["ScalingGroupName.11"] = $scalingGroupName11;
	}

	public function getScalingGroupName11()
	{
		return $this->scalingGroupName11;
	}

	public function setScalingGroupName12($scalingGroupName12)
	{
		$this->scalingGroupName12 = $scalingGroupName12;
		$this->apiParas["ScalingGroupName.12"] = $scalingGroupName12;
	}

	public function getScalingGroupName12()
	{
		return $this->scalingGroupName12;
	}

	public function setScalingGroupName13($scalingGroupName13)
	{
		$this->scalingGroupName13 = $scalingGroupName13;
		$this->apiParas["ScalingGroupName.13"] = $scalingGroupName13;
	}

	public function getScalingGroupName13()
	{
		return $this->scalingGroupName13;
	}

	public function setScalingGroupName14($scalingGroupName14)
	{
		$this->scalingGroupName14 = $scalingGroupName14;
		$this->apiParas["ScalingGroupName.14"] = $scalingGroupName14;
	}

	public function getScalingGroupName14()
	{
		return $this->scalingGroupName14;
	}

	public function setScalingGroupName15($scalingGroupName15)
	{
		$this->scalingGroupName15 = $scalingGroupName15;
		$this->apiParas["ScalingGroupName.15"] = $scalingGroupName15;
	}

	public function getScalingGroupName15()
	{
		return $this->scalingGroupName15;
	}

	public function setScalingGroupName16($scalingGroupName16)
	{
		$this->scalingGroupName16 = $scalingGroupName16;
		$this->apiParas["ScalingGroupName.16"] = $scalingGroupName16;
	}

	public function getScalingGroupName16()
	{
		return $this->scalingGroupName16;
	}

	public function setScalingGroupName17($scalingGroupName17)
	{
		$this->scalingGroupName17 = $scalingGroupName17;
		$this->apiParas["ScalingGroupName.17"] = $scalingGroupName17;
	}

	public function getScalingGroupName17()
	{
		return $this->scalingGroupName17;
	}

	public function setScalingGroupName18($scalingGroupName18)
	{
		$this->scalingGroupName18 = $scalingGroupName18;
		$this->apiParas["ScalingGroupName.18"] = $scalingGroupName18;
	}

	public function getScalingGroupName18()
	{
		return $this->scalingGroupName18;
	}

	public function setScalingGroupName19($scalingGroupName19)
	{
		$this->scalingGroupName19 = $scalingGroupName19;
		$this->apiParas["ScalingGroupName.19"] = $scalingGroupName19;
	}

	public function getScalingGroupName19()
	{
		return $this->scalingGroupName19;
	}

	public function setScalingGroupName2($scalingGroupName2)
	{
		$this->scalingGroupName2 = $scalingGroupName2;
		$this->apiParas["ScalingGroupName.2"] = $scalingGroupName2;
	}

	public function getScalingGroupName2()
	{
		return $this->scalingGroupName2;
	}

	public function setScalingGroupName20($scalingGroupName20)
	{
		$this->scalingGroupName20 = $scalingGroupName20;
		$this->apiParas["ScalingGroupName.20"] = $scalingGroupName20;
	}

	public function getScalingGroupName20()
	{
		return $this->scalingGroupName20;
	}

	public function setScalingGroupName3($scalingGroupName3)
	{
		$this->scalingGroupName3 = $scalingGroupName3;
		$this->apiParas["ScalingGroupName.3"] = $scalingGroupName3;
	}

	public function getScalingGroupName3()
	{
		return $this->scalingGroupName3;
	}

	public function setScalingGroupName4($scalingGroupName4)
	{
		$this->scalingGroupName4 = $scalingGroupName4;
		$this->apiParas["ScalingGroupName.4"] = $scalingGroupName4;
	}

	public function getScalingGroupName4()
	{
		return $this->scalingGroupName4;
	}

	public function setScalingGroupName5($scalingGroupName5)
	{
		$this->scalingGroupName5 = $scalingGroupName5;
		$this->apiParas["ScalingGroupName.5"] = $scalingGroupName5;
	}

	public function getScalingGroupName5()
	{
		return $this->scalingGroupName5;
	}

	public function setScalingGroupName6($scalingGroupName6)
	{
		$this->scalingGroupName6 = $scalingGroupName6;
		$this->apiParas["ScalingGroupName.6"] = $scalingGroupName6;
	}

	public function getScalingGroupName6()
	{
		return $this->scalingGroupName6;
	}

	public function setScalingGroupName7($scalingGroupName7)
	{
		$this->scalingGroupName7 = $scalingGroupName7;
		$this->apiParas["ScalingGroupName.7"] = $scalingGroupName7;
	}

	public function getScalingGroupName7()
	{
		return $this->scalingGroupName7;
	}

	public function setScalingGroupName8($scalingGroupName8)
	{
		$this->scalingGroupName8 = $scalingGroupName8;
		$this->apiParas["ScalingGroupName.8"] = $scalingGroupName8;
	}

	public function getScalingGroupName8()
	{
		return $this->scalingGroupName8;
	}

	public function setScalingGroupName9($scalingGroupName9)
	{
		$this->scalingGroupName9 = $scalingGroupName9;
		$this->apiParas["ScalingGroupName.9"] = $scalingGroupName9;
	}

	public function getScalingGroupName9()
	{
		return $this->scalingGroupName9;
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
		return "ess.aliyuncs.com.DescribeScalingGroups.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
