<?php
/**
 * TOP API: ecs.aliyuncs.com.ModifyAutoSnapshotPolicy.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ecs20140526ModifyAutoSnapshotPolicyRequest
{
	/** 
	 * 数据盘自动快照策略开关：
True：该磁盘属性的磁盘打自动快照，
False：不打自动快照，
默认值：无，表示保留当前值
	 **/
	private $dataDiskPolicyEnabled;
	
	/** 
	 * 数据盘自动快照策略的保留天数：
可选值， 1，2，3，
默认值：无，表示保留当前值<br /> 支持最大值为：3<br /> 支持最小值为：1
	 **/
	private $dataDiskPolicyRetentionDays;
	
	/** 
	 * 数据盘自动快照策略的保留上周日选项：
True：代表保留上周日的快照，
False：不保留，
默认值：无，表示保留当前值
	 **/
	private $dataDiskPolicyRetentionLastWeek;
	
	/** 
	 * 数据盘自动快照策略的时间段：
4个时间段，
1：1:00-7:00
2：7:00-13:00
3：13:00-19:00
4：19:00-1:00
默认值：无，表示保留当前值<br /> 支持最大值为：4<br /> 支持最小值为：1
	 **/
	private $dataDiskPolicyTimePeriod;
	
	/** 
	 * 系统盘自动快照策略开关
	 **/
	private $systemDiskPolicyEnabled;
	
	/** 
	 * 系统盘自动快照策略的保留天数：
可选值， 1，2，3，
默认值：无，表示保留当前值<br /> 支持最大值为：3<br /> 支持最小值为：1
	 **/
	private $systemDiskPolicyRetentionDays;
	
	/** 
	 * 系统盘自动快照策略的保留上周日选项：
True：代表保留上周日的快照，
False：不保留，
默认值：无，表示保留当前值
	 **/
	private $systemDiskPolicyRetentionLastWeek;
	
	/** 
	 * 系统盘自动快照策略的时间段：
4个时间段，
1：1:00-7:00
2：7:00-13:00
3：13:00-19:00
4：19:00-1:00
默认值：无，表示保留当前值<br /> 支持最大值为：4<br /> 支持最小值为：1
	 **/
	private $systemDiskPolicyTimePeriod;
	
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
	
	public function setDataDiskPolicyEnabled($dataDiskPolicyEnabled)
	{
		$this->dataDiskPolicyEnabled = $dataDiskPolicyEnabled;
		$this->apiParas["DataDiskPolicyEnabled"] = $dataDiskPolicyEnabled;
	}

	public function getDataDiskPolicyEnabled()
	{
		return $this->dataDiskPolicyEnabled;
	}

	public function setDataDiskPolicyRetentionDays($dataDiskPolicyRetentionDays)
	{
		$this->dataDiskPolicyRetentionDays = $dataDiskPolicyRetentionDays;
		$this->apiParas["DataDiskPolicyRetentionDays"] = $dataDiskPolicyRetentionDays;
	}

	public function getDataDiskPolicyRetentionDays()
	{
		return $this->dataDiskPolicyRetentionDays;
	}

	public function setDataDiskPolicyRetentionLastWeek($dataDiskPolicyRetentionLastWeek)
	{
		$this->dataDiskPolicyRetentionLastWeek = $dataDiskPolicyRetentionLastWeek;
		$this->apiParas["DataDiskPolicyRetentionLastWeek"] = $dataDiskPolicyRetentionLastWeek;
	}

	public function getDataDiskPolicyRetentionLastWeek()
	{
		return $this->dataDiskPolicyRetentionLastWeek;
	}

	public function setDataDiskPolicyTimePeriod($dataDiskPolicyTimePeriod)
	{
		$this->dataDiskPolicyTimePeriod = $dataDiskPolicyTimePeriod;
		$this->apiParas["DataDiskPolicyTimePeriod"] = $dataDiskPolicyTimePeriod;
	}

	public function getDataDiskPolicyTimePeriod()
	{
		return $this->dataDiskPolicyTimePeriod;
	}

	public function setSystemDiskPolicyEnabled($systemDiskPolicyEnabled)
	{
		$this->systemDiskPolicyEnabled = $systemDiskPolicyEnabled;
		$this->apiParas["SystemDiskPolicyEnabled"] = $systemDiskPolicyEnabled;
	}

	public function getSystemDiskPolicyEnabled()
	{
		return $this->systemDiskPolicyEnabled;
	}

	public function setSystemDiskPolicyRetentionDays($systemDiskPolicyRetentionDays)
	{
		$this->systemDiskPolicyRetentionDays = $systemDiskPolicyRetentionDays;
		$this->apiParas["SystemDiskPolicyRetentionDays"] = $systemDiskPolicyRetentionDays;
	}

	public function getSystemDiskPolicyRetentionDays()
	{
		return $this->systemDiskPolicyRetentionDays;
	}

	public function setSystemDiskPolicyRetentionLastWeek($systemDiskPolicyRetentionLastWeek)
	{
		$this->systemDiskPolicyRetentionLastWeek = $systemDiskPolicyRetentionLastWeek;
		$this->apiParas["SystemDiskPolicyRetentionLastWeek"] = $systemDiskPolicyRetentionLastWeek;
	}

	public function getSystemDiskPolicyRetentionLastWeek()
	{
		return $this->systemDiskPolicyRetentionLastWeek;
	}

	public function setSystemDiskPolicyTimePeriod($systemDiskPolicyTimePeriod)
	{
		$this->systemDiskPolicyTimePeriod = $systemDiskPolicyTimePeriod;
		$this->apiParas["SystemDiskPolicyTimePeriod"] = $systemDiskPolicyTimePeriod;
	}

	public function getSystemDiskPolicyTimePeriod()
	{
		return $this->systemDiskPolicyTimePeriod;
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
		return "ecs.aliyuncs.com.ModifyAutoSnapshotPolicy.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->dataDiskPolicyRetentionDays,3,"dataDiskPolicyRetentionDays");
		RequestCheckUtil::checkMinValue($this->dataDiskPolicyRetentionDays,1,"dataDiskPolicyRetentionDays");
		RequestCheckUtil::checkMaxValue($this->dataDiskPolicyTimePeriod,4,"dataDiskPolicyTimePeriod");
		RequestCheckUtil::checkMinValue($this->dataDiskPolicyTimePeriod,1,"dataDiskPolicyTimePeriod");
		RequestCheckUtil::checkMaxValue($this->systemDiskPolicyRetentionDays,3,"systemDiskPolicyRetentionDays");
		RequestCheckUtil::checkMinValue($this->systemDiskPolicyRetentionDays,1,"systemDiskPolicyRetentionDays");
		RequestCheckUtil::checkMaxValue($this->systemDiskPolicyTimePeriod,4,"systemDiskPolicyTimePeriod");
		RequestCheckUtil::checkMinValue($this->systemDiskPolicyTimePeriod,1,"systemDiskPolicyTimePeriod");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
