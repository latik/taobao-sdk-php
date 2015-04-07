<?php
/**
 * TOP API: ess.aliyuncs.com.DescribeScalingActivities.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828DescribeScalingActivitiesRequest
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
	 * 伸缩活动所在的region
	 **/
	private $regionId;
	
	/** 
	 * 伸缩活动的ID，可以输入多个，最多可以支持20个。返回查询结果时略去失效的ScalingRuleId，并且不报错。
	 **/
	private $scalingActivityId1;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId10;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId11;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId12;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId13;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId14;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId15;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId16;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId17;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId18;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId19;
	
	/** 
	 * ScalingActivityId
	 **/
	private $scalingActivityId2;
	
	/** 
	 * ScalingActivityId
	 **/
	private $scalingActivityId20;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId3;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId4;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId5;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId6;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId7;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId8;
	
	/** 
	 * ScalingActivityId.
	 **/
	private $scalingActivityId9;
	
	/** 
	 * 伸缩组的ID
	 **/
	private $scalingGroupId;
	
	/** 
	 * 伸缩活动的状态。 取值：Successful, Failed，InProgress，Warning
	 **/
	private $statusCode;
	
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

	public function setScalingActivityId1($scalingActivityId1)
	{
		$this->scalingActivityId1 = $scalingActivityId1;
		$this->apiParas["ScalingActivityId.1"] = $scalingActivityId1;
	}

	public function getScalingActivityId1()
	{
		return $this->scalingActivityId1;
	}

	public function setScalingActivityId10($scalingActivityId10)
	{
		$this->scalingActivityId10 = $scalingActivityId10;
		$this->apiParas["ScalingActivityId.10"] = $scalingActivityId10;
	}

	public function getScalingActivityId10()
	{
		return $this->scalingActivityId10;
	}

	public function setScalingActivityId11($scalingActivityId11)
	{
		$this->scalingActivityId11 = $scalingActivityId11;
		$this->apiParas["ScalingActivityId.11"] = $scalingActivityId11;
	}

	public function getScalingActivityId11()
	{
		return $this->scalingActivityId11;
	}

	public function setScalingActivityId12($scalingActivityId12)
	{
		$this->scalingActivityId12 = $scalingActivityId12;
		$this->apiParas["ScalingActivityId.12"] = $scalingActivityId12;
	}

	public function getScalingActivityId12()
	{
		return $this->scalingActivityId12;
	}

	public function setScalingActivityId13($scalingActivityId13)
	{
		$this->scalingActivityId13 = $scalingActivityId13;
		$this->apiParas["ScalingActivityId.13"] = $scalingActivityId13;
	}

	public function getScalingActivityId13()
	{
		return $this->scalingActivityId13;
	}

	public function setScalingActivityId14($scalingActivityId14)
	{
		$this->scalingActivityId14 = $scalingActivityId14;
		$this->apiParas["ScalingActivityId.14"] = $scalingActivityId14;
	}

	public function getScalingActivityId14()
	{
		return $this->scalingActivityId14;
	}

	public function setScalingActivityId15($scalingActivityId15)
	{
		$this->scalingActivityId15 = $scalingActivityId15;
		$this->apiParas["ScalingActivityId.15"] = $scalingActivityId15;
	}

	public function getScalingActivityId15()
	{
		return $this->scalingActivityId15;
	}

	public function setScalingActivityId16($scalingActivityId16)
	{
		$this->scalingActivityId16 = $scalingActivityId16;
		$this->apiParas["ScalingActivityId.16"] = $scalingActivityId16;
	}

	public function getScalingActivityId16()
	{
		return $this->scalingActivityId16;
	}

	public function setScalingActivityId17($scalingActivityId17)
	{
		$this->scalingActivityId17 = $scalingActivityId17;
		$this->apiParas["ScalingActivityId.17"] = $scalingActivityId17;
	}

	public function getScalingActivityId17()
	{
		return $this->scalingActivityId17;
	}

	public function setScalingActivityId18($scalingActivityId18)
	{
		$this->scalingActivityId18 = $scalingActivityId18;
		$this->apiParas["ScalingActivityId.18"] = $scalingActivityId18;
	}

	public function getScalingActivityId18()
	{
		return $this->scalingActivityId18;
	}

	public function setScalingActivityId19($scalingActivityId19)
	{
		$this->scalingActivityId19 = $scalingActivityId19;
		$this->apiParas["ScalingActivityId.19"] = $scalingActivityId19;
	}

	public function getScalingActivityId19()
	{
		return $this->scalingActivityId19;
	}

	public function setScalingActivityId2($scalingActivityId2)
	{
		$this->scalingActivityId2 = $scalingActivityId2;
		$this->apiParas["ScalingActivityId.2"] = $scalingActivityId2;
	}

	public function getScalingActivityId2()
	{
		return $this->scalingActivityId2;
	}

	public function setScalingActivityId20($scalingActivityId20)
	{
		$this->scalingActivityId20 = $scalingActivityId20;
		$this->apiParas["ScalingActivityId.20"] = $scalingActivityId20;
	}

	public function getScalingActivityId20()
	{
		return $this->scalingActivityId20;
	}

	public function setScalingActivityId3($scalingActivityId3)
	{
		$this->scalingActivityId3 = $scalingActivityId3;
		$this->apiParas["ScalingActivityId.3"] = $scalingActivityId3;
	}

	public function getScalingActivityId3()
	{
		return $this->scalingActivityId3;
	}

	public function setScalingActivityId4($scalingActivityId4)
	{
		$this->scalingActivityId4 = $scalingActivityId4;
		$this->apiParas["ScalingActivityId.4"] = $scalingActivityId4;
	}

	public function getScalingActivityId4()
	{
		return $this->scalingActivityId4;
	}

	public function setScalingActivityId5($scalingActivityId5)
	{
		$this->scalingActivityId5 = $scalingActivityId5;
		$this->apiParas["ScalingActivityId.5"] = $scalingActivityId5;
	}

	public function getScalingActivityId5()
	{
		return $this->scalingActivityId5;
	}

	public function setScalingActivityId6($scalingActivityId6)
	{
		$this->scalingActivityId6 = $scalingActivityId6;
		$this->apiParas["ScalingActivityId.6"] = $scalingActivityId6;
	}

	public function getScalingActivityId6()
	{
		return $this->scalingActivityId6;
	}

	public function setScalingActivityId7($scalingActivityId7)
	{
		$this->scalingActivityId7 = $scalingActivityId7;
		$this->apiParas["ScalingActivityId.7"] = $scalingActivityId7;
	}

	public function getScalingActivityId7()
	{
		return $this->scalingActivityId7;
	}

	public function setScalingActivityId8($scalingActivityId8)
	{
		$this->scalingActivityId8 = $scalingActivityId8;
		$this->apiParas["ScalingActivityId.8"] = $scalingActivityId8;
	}

	public function getScalingActivityId8()
	{
		return $this->scalingActivityId8;
	}

	public function setScalingActivityId9($scalingActivityId9)
	{
		$this->scalingActivityId9 = $scalingActivityId9;
		$this->apiParas["ScalingActivityId.9"] = $scalingActivityId9;
	}

	public function getScalingActivityId9()
	{
		return $this->scalingActivityId9;
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

	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
		$this->apiParas["StatusCode"] = $statusCode;
	}

	public function getStatusCode()
	{
		return $this->statusCode;
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
		return "ess.aliyuncs.com.DescribeScalingActivities.2014-08-28";
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
