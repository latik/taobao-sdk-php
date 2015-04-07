<?php
/**
 * TOP API: ess.aliyuncs.com.DescribeScalingRules.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828DescribeScalingRulesRequest
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
	 * 伸缩规则所在的区域
	 **/
	private $regionId;
	
	/** 
	 * 伸缩组的ID
	 **/
	private $scalingGroupId;
	
	/** 
	 * 伸缩规则的Ari，可以输入多个，最多可以支持10个。返回查询结果时略去失效的ScalingRuleAri，并且不报错。
	 **/
	private $scalingRuleAri1;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri10;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri2;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri3;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri4;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri5;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri6;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri7;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri8;
	
	/** 
	 * ScalingRuleAri.1
	 **/
	private $scalingRuleAri9;
	
	/** 
	 * 伸缩规则的ID，可以输入多个，最多可以支持10个。返回查询结果时略去失效的ScalingRuleId，并且不报错。
	 **/
	private $scalingRuleId1;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId10;
	
	/** 
	 * ScalingRuleId
	 **/
	private $scalingRuleId2;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId3;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId4;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId5;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId6;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId7;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId8;
	
	/** 
	 * ScalingRuleId.
	 **/
	private $scalingRuleId9;
	
	/** 
	 * 伸缩规则的Name，可以输入多个，最多可以支持10个。返回查询结果时略去失效的ScalingRuleName，并且不报错。
	 **/
	private $scalingRuleName1;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName10;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName2;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName3;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName4;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName5;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName6;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName7;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName8;
	
	/** 
	 * ScalingRuleName.1
	 **/
	private $scalingRuleName9;
	
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

	public function setScalingGroupId($scalingGroupId)
	{
		$this->scalingGroupId = $scalingGroupId;
		$this->apiParas["ScalingGroupId"] = $scalingGroupId;
	}

	public function getScalingGroupId()
	{
		return $this->scalingGroupId;
	}

	public function setScalingRuleAri1($scalingRuleAri1)
	{
		$this->scalingRuleAri1 = $scalingRuleAri1;
		$this->apiParas["ScalingRuleAri.1"] = $scalingRuleAri1;
	}

	public function getScalingRuleAri1()
	{
		return $this->scalingRuleAri1;
	}

	public function setScalingRuleAri10($scalingRuleAri10)
	{
		$this->scalingRuleAri10 = $scalingRuleAri10;
		$this->apiParas["ScalingRuleAri.10"] = $scalingRuleAri10;
	}

	public function getScalingRuleAri10()
	{
		return $this->scalingRuleAri10;
	}

	public function setScalingRuleAri2($scalingRuleAri2)
	{
		$this->scalingRuleAri2 = $scalingRuleAri2;
		$this->apiParas["ScalingRuleAri.2"] = $scalingRuleAri2;
	}

	public function getScalingRuleAri2()
	{
		return $this->scalingRuleAri2;
	}

	public function setScalingRuleAri3($scalingRuleAri3)
	{
		$this->scalingRuleAri3 = $scalingRuleAri3;
		$this->apiParas["ScalingRuleAri.3"] = $scalingRuleAri3;
	}

	public function getScalingRuleAri3()
	{
		return $this->scalingRuleAri3;
	}

	public function setScalingRuleAri4($scalingRuleAri4)
	{
		$this->scalingRuleAri4 = $scalingRuleAri4;
		$this->apiParas["ScalingRuleAri.4"] = $scalingRuleAri4;
	}

	public function getScalingRuleAri4()
	{
		return $this->scalingRuleAri4;
	}

	public function setScalingRuleAri5($scalingRuleAri5)
	{
		$this->scalingRuleAri5 = $scalingRuleAri5;
		$this->apiParas["ScalingRuleAri.5"] = $scalingRuleAri5;
	}

	public function getScalingRuleAri5()
	{
		return $this->scalingRuleAri5;
	}

	public function setScalingRuleAri6($scalingRuleAri6)
	{
		$this->scalingRuleAri6 = $scalingRuleAri6;
		$this->apiParas["ScalingRuleAri.6"] = $scalingRuleAri6;
	}

	public function getScalingRuleAri6()
	{
		return $this->scalingRuleAri6;
	}

	public function setScalingRuleAri7($scalingRuleAri7)
	{
		$this->scalingRuleAri7 = $scalingRuleAri7;
		$this->apiParas["ScalingRuleAri.7"] = $scalingRuleAri7;
	}

	public function getScalingRuleAri7()
	{
		return $this->scalingRuleAri7;
	}

	public function setScalingRuleAri8($scalingRuleAri8)
	{
		$this->scalingRuleAri8 = $scalingRuleAri8;
		$this->apiParas["ScalingRuleAri.8"] = $scalingRuleAri8;
	}

	public function getScalingRuleAri8()
	{
		return $this->scalingRuleAri8;
	}

	public function setScalingRuleAri9($scalingRuleAri9)
	{
		$this->scalingRuleAri9 = $scalingRuleAri9;
		$this->apiParas["ScalingRuleAri.9"] = $scalingRuleAri9;
	}

	public function getScalingRuleAri9()
	{
		return $this->scalingRuleAri9;
	}

	public function setScalingRuleId1($scalingRuleId1)
	{
		$this->scalingRuleId1 = $scalingRuleId1;
		$this->apiParas["ScalingRuleId.1"] = $scalingRuleId1;
	}

	public function getScalingRuleId1()
	{
		return $this->scalingRuleId1;
	}

	public function setScalingRuleId10($scalingRuleId10)
	{
		$this->scalingRuleId10 = $scalingRuleId10;
		$this->apiParas["ScalingRuleId.10"] = $scalingRuleId10;
	}

	public function getScalingRuleId10()
	{
		return $this->scalingRuleId10;
	}

	public function setScalingRuleId2($scalingRuleId2)
	{
		$this->scalingRuleId2 = $scalingRuleId2;
		$this->apiParas["ScalingRuleId.2"] = $scalingRuleId2;
	}

	public function getScalingRuleId2()
	{
		return $this->scalingRuleId2;
	}

	public function setScalingRuleId3($scalingRuleId3)
	{
		$this->scalingRuleId3 = $scalingRuleId3;
		$this->apiParas["ScalingRuleId.3"] = $scalingRuleId3;
	}

	public function getScalingRuleId3()
	{
		return $this->scalingRuleId3;
	}

	public function setScalingRuleId4($scalingRuleId4)
	{
		$this->scalingRuleId4 = $scalingRuleId4;
		$this->apiParas["ScalingRuleId.4"] = $scalingRuleId4;
	}

	public function getScalingRuleId4()
	{
		return $this->scalingRuleId4;
	}

	public function setScalingRuleId5($scalingRuleId5)
	{
		$this->scalingRuleId5 = $scalingRuleId5;
		$this->apiParas["ScalingRuleId.5"] = $scalingRuleId5;
	}

	public function getScalingRuleId5()
	{
		return $this->scalingRuleId5;
	}

	public function setScalingRuleId6($scalingRuleId6)
	{
		$this->scalingRuleId6 = $scalingRuleId6;
		$this->apiParas["ScalingRuleId.6"] = $scalingRuleId6;
	}

	public function getScalingRuleId6()
	{
		return $this->scalingRuleId6;
	}

	public function setScalingRuleId7($scalingRuleId7)
	{
		$this->scalingRuleId7 = $scalingRuleId7;
		$this->apiParas["ScalingRuleId.7"] = $scalingRuleId7;
	}

	public function getScalingRuleId7()
	{
		return $this->scalingRuleId7;
	}

	public function setScalingRuleId8($scalingRuleId8)
	{
		$this->scalingRuleId8 = $scalingRuleId8;
		$this->apiParas["ScalingRuleId.8"] = $scalingRuleId8;
	}

	public function getScalingRuleId8()
	{
		return $this->scalingRuleId8;
	}

	public function setScalingRuleId9($scalingRuleId9)
	{
		$this->scalingRuleId9 = $scalingRuleId9;
		$this->apiParas["ScalingRuleId.9"] = $scalingRuleId9;
	}

	public function getScalingRuleId9()
	{
		return $this->scalingRuleId9;
	}

	public function setScalingRuleName1($scalingRuleName1)
	{
		$this->scalingRuleName1 = $scalingRuleName1;
		$this->apiParas["ScalingRuleName.1"] = $scalingRuleName1;
	}

	public function getScalingRuleName1()
	{
		return $this->scalingRuleName1;
	}

	public function setScalingRuleName10($scalingRuleName10)
	{
		$this->scalingRuleName10 = $scalingRuleName10;
		$this->apiParas["ScalingRuleName.10"] = $scalingRuleName10;
	}

	public function getScalingRuleName10()
	{
		return $this->scalingRuleName10;
	}

	public function setScalingRuleName2($scalingRuleName2)
	{
		$this->scalingRuleName2 = $scalingRuleName2;
		$this->apiParas["ScalingRuleName.2"] = $scalingRuleName2;
	}

	public function getScalingRuleName2()
	{
		return $this->scalingRuleName2;
	}

	public function setScalingRuleName3($scalingRuleName3)
	{
		$this->scalingRuleName3 = $scalingRuleName3;
		$this->apiParas["ScalingRuleName.3"] = $scalingRuleName3;
	}

	public function getScalingRuleName3()
	{
		return $this->scalingRuleName3;
	}

	public function setScalingRuleName4($scalingRuleName4)
	{
		$this->scalingRuleName4 = $scalingRuleName4;
		$this->apiParas["ScalingRuleName.4"] = $scalingRuleName4;
	}

	public function getScalingRuleName4()
	{
		return $this->scalingRuleName4;
	}

	public function setScalingRuleName5($scalingRuleName5)
	{
		$this->scalingRuleName5 = $scalingRuleName5;
		$this->apiParas["ScalingRuleName.5"] = $scalingRuleName5;
	}

	public function getScalingRuleName5()
	{
		return $this->scalingRuleName5;
	}

	public function setScalingRuleName6($scalingRuleName6)
	{
		$this->scalingRuleName6 = $scalingRuleName6;
		$this->apiParas["ScalingRuleName.6"] = $scalingRuleName6;
	}

	public function getScalingRuleName6()
	{
		return $this->scalingRuleName6;
	}

	public function setScalingRuleName7($scalingRuleName7)
	{
		$this->scalingRuleName7 = $scalingRuleName7;
		$this->apiParas["ScalingRuleName.7"] = $scalingRuleName7;
	}

	public function getScalingRuleName7()
	{
		return $this->scalingRuleName7;
	}

	public function setScalingRuleName8($scalingRuleName8)
	{
		$this->scalingRuleName8 = $scalingRuleName8;
		$this->apiParas["ScalingRuleName.8"] = $scalingRuleName8;
	}

	public function getScalingRuleName8()
	{
		return $this->scalingRuleName8;
	}

	public function setScalingRuleName9($scalingRuleName9)
	{
		$this->scalingRuleName9 = $scalingRuleName9;
		$this->apiParas["ScalingRuleName.9"] = $scalingRuleName9;
	}

	public function getScalingRuleName9()
	{
		return $this->scalingRuleName9;
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
		return "ess.aliyuncs.com.DescribeScalingRules.2014-08-28";
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
