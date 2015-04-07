<?php
/**
 * TOP API: ess.aliyuncs.com.ModifyScalingRule.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828ModifyScalingRuleRequest
{
	/** 
	 * 调整方式，取值：
QuantityChangeInCapacity – 按指定个数调整实例（取值范围(0, 100] U (-100, 0]）
PercentChangeInCapacity – 按指定百分比调整实例
TotalCapacity – 调整实例个数到指定值（取值范围[0, 100]）
	 **/
	private $adjustmentType;
	
	/** 
	 * 指定调整值，整数
	 **/
	private $adjustmentValue;
	
	/** 
	 * 冷却时间。
如果设置了Rule的Cooldown，将重载Scaling Group的DefaultCooldown。
如果没设置Rule的Cooldown，则按DefaultCooldown来执行，但不是用DefaultCooldown来覆盖此属性
默认值为：空
	 **/
	private $cooldown;
	
	/** 
	 * 伸缩规则id
	 **/
	private $scalingRuleId;
	
	/** 
	 * ScalingRuleName
	 **/
	private $scalingRuleName;
	
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
	
	public function setAdjustmentType($adjustmentType)
	{
		$this->adjustmentType = $adjustmentType;
		$this->apiParas["AdjustmentType"] = $adjustmentType;
	}

	public function getAdjustmentType()
	{
		return $this->adjustmentType;
	}

	public function setAdjustmentValue($adjustmentValue)
	{
		$this->adjustmentValue = $adjustmentValue;
		$this->apiParas["AdjustmentValue"] = $adjustmentValue;
	}

	public function getAdjustmentValue()
	{
		return $this->adjustmentValue;
	}

	public function setCooldown($cooldown)
	{
		$this->cooldown = $cooldown;
		$this->apiParas["Cooldown"] = $cooldown;
	}

	public function getCooldown()
	{
		return $this->cooldown;
	}

	public function setScalingRuleId($scalingRuleId)
	{
		$this->scalingRuleId = $scalingRuleId;
		$this->apiParas["ScalingRuleId"] = $scalingRuleId;
	}

	public function getScalingRuleId()
	{
		return $this->scalingRuleId;
	}

	public function setScalingRuleName($scalingRuleName)
	{
		$this->scalingRuleName = $scalingRuleName;
		$this->apiParas["ScalingRuleName"] = $scalingRuleName;
	}

	public function getScalingRuleName()
	{
		return $this->scalingRuleName;
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
		return "ess.aliyuncs.com.ModifyScalingRule.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scalingRuleId,"scalingRuleId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
