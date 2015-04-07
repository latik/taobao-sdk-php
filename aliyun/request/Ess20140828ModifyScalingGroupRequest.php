<?php
/**
 * TOP API: ess.aliyuncs.com.ModifyScalingGroup.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Ess20140828ModifyScalingGroupRequest
{
	/** 
	 * Scaling Group关联的Scaling Configuration Id。
	 **/
	private $activeScalingConfigurationId;
	
	/** 
	 * 默认的冷却时间，单位：秒。
可选，默认值：300秒（默认值系统可配置）。
Cooldown是指，当有一个伸缩活动被成功执行后的一段时间内，该Scaling Group不执行其他的伸缩活动。
取值范围：[0, 86400]<br /> 支持最大值为：86400<br /> 支持最小值为：0
	 **/
	private $defaultCooldown;
	
	/** 
	 * caling Group下实例个数的最大值。用于控制成本。
弹性伸缩服务在扩展规模，即在需要创建实例时，会保证Scaling Group内的实例个数不大于该值。
MaxSize的值必须大于或等于MinSize的值。
取值范围：[0, 100]
这个最大值需要做到用户级别可配置。
注：包含伸缩组自动创建和用户手工加入的既有ECS实例。
	 **/
	private $maxSize;
	
	/** 
	 * Scaling Group下实例个数的最小值。用于确保服务的可用性。
弹性伸缩服务在缩小规模，即在需要释放实例时，会保证Scaling Group内的实例个数不小于该值。
取值范围：[0, 100]
注：包含伸缩组自动创建和用户手工加入的既有ECS实例。
	 **/
	private $minSize;
	
	/** 
	 * 当需要释放实例时，按照指定的策略选择要释放的实例。
取值：
OldestInstance：取实例中最早创建的实例
NewestInstance：取实例中最新创建的实例
OldestScalingConfiguration：取采用最早伸缩配置创建的实例
可以输入多个，最多可以输入2个。
	 **/
	private $removalPolicy1;
	
	/** 
	 * 当需要释放实例时，按照指定的策略选择要释放的实例。
取值：
OldestInstance：取实例中最早创建的实例
NewestInstance：取实例中最新创建的实例
OldestScalingConfiguration：取采用最早伸缩配置创建的实例
可以输入多个，最多可以输入2个。
	 **/
	private $removalPolicy2;
	
	/** 
	 * 伸缩组的ID
	 **/
	private $scalingGroupId;
	
	/** 
	 * 伸缩组的名称。英文或中文字符为2-40 个字符（中英文长度一样），以大小字母或中文开头，可包含数字，"_"或"-"。。
	 **/
	private $scalingGroupName;
	
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

	public function setDefaultCooldown($defaultCooldown)
	{
		$this->defaultCooldown = $defaultCooldown;
		$this->apiParas["DefaultCooldown"] = $defaultCooldown;
	}

	public function getDefaultCooldown()
	{
		return $this->defaultCooldown;
	}

	public function setMaxSize($maxSize)
	{
		$this->maxSize = $maxSize;
		$this->apiParas["MaxSize"] = $maxSize;
	}

	public function getMaxSize()
	{
		return $this->maxSize;
	}

	public function setMinSize($minSize)
	{
		$this->minSize = $minSize;
		$this->apiParas["MinSize"] = $minSize;
	}

	public function getMinSize()
	{
		return $this->minSize;
	}

	public function setRemovalPolicy1($removalPolicy1)
	{
		$this->removalPolicy1 = $removalPolicy1;
		$this->apiParas["RemovalPolicy.1"] = $removalPolicy1;
	}

	public function getRemovalPolicy1()
	{
		return $this->removalPolicy1;
	}

	public function setRemovalPolicy2($removalPolicy2)
	{
		$this->removalPolicy2 = $removalPolicy2;
		$this->apiParas["RemovalPolicy.2"] = $removalPolicy2;
	}

	public function getRemovalPolicy2()
	{
		return $this->removalPolicy2;
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

	public function setScalingGroupName($scalingGroupName)
	{
		$this->scalingGroupName = $scalingGroupName;
		$this->apiParas["ScalingGroupName"] = $scalingGroupName;
	}

	public function getScalingGroupName()
	{
		return $this->scalingGroupName;
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
		return "ess.aliyuncs.com.ModifyScalingGroup.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->defaultCooldown,86400,"defaultCooldown");
		RequestCheckUtil::checkMinValue($this->defaultCooldown,0,"defaultCooldown");
		RequestCheckUtil::checkNotNull($this->scalingGroupId,"scalingGroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
