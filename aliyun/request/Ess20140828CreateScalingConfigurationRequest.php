<?php
/**
 * TOP API: ess.aliyuncs.com.CreateScalingConfiguration.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828CreateScalingConfigurationRequest
{
	/** 
	 * 数据盘N的磁盘种类 
可选值： 
- cloud 
- ephemeral 
默认值：cloud
	 **/
	private $dataDisk1Category;
	
	/** 
	 * 数据盘挂载点
空表示由系统默认分配，/dev/xvdb开始到/dev/xvdz 
默认值：空
	 **/
	private $dataDisk1Device;
	
	/** 
	 * 数据盘N的磁盘大小（N从1开始编号）。 
以GB为单位，取值范围为 
Cloud：5~2000 
Ephemeral：5~1024<br /> 支持最大值为：2000<br /> 支持最小值为：5
	 **/
	private $dataDisk1Size;
	
	/** 
	 * 创建数据盘使用的快照
指定该参数后DataDisk.N.Size会被忽略，实际创建的磁盘大小为指定快照的大小。
若该快照创建于2013年7月15日（含）之前，该次调用会被拒绝，Response中返回InvalidSnapshot.TooOld
	 **/
	private $dataDisk1SnapshotId;
	
	/** 
	 * DataDisk.2.Category
	 **/
	private $dataDisk2Category;
	
	/** 
	 * 参考DataDisk.1.Device
	 **/
	private $dataDisk2Device;
	
	/** 
	 * 数据盘N的磁盘大小（N从1开始编号）。 
以GB为单位，取值范围为 
Cloud：5~2000 
Ephemeral：5~1024<br /> 支持最大值为：2000<br /> 支持最小值为：5
	 **/
	private $dataDisk2Size;
	
	/** 
	 * 参考DataDisk.1.SnapshotId
	 **/
	private $dataDisk2SnapshotId;
	
	/** 
	 * DataDisk.3.Category
	 **/
	private $dataDisk3Category;
	
	/** 
	 * 参考DataDisk.1.Device
	 **/
	private $dataDisk3Device;
	
	/** 
	 * 数据盘N的磁盘大小（N从1开始编号）。 
以GB为单位，取值范围为 
Cloud：5~2000 
Ephemeral：5~1024
	 **/
	private $dataDisk3Size;
	
	/** 
	 * 参考DataDisk.1.SnapshotId
	 **/
	private $dataDisk3SnapshotId;
	
	/** 
	 * DataDisk.4.Category
	 **/
	private $dataDisk4Category;
	
	/** 
	 * 参考DataDisk.1.Device
	 **/
	private $dataDisk4Device;
	
	/** 
	 * 数据盘N的磁盘大小（N从1开始编号）。 
以GB为单位，取值范围为 
Cloud：5~2000 
Ephemeral：5~1024
	 **/
	private $dataDisk4Size;
	
	/** 
	 * 参考DataDisk.1.SnapshotId
	 **/
	private $dataDisk4SnapshotId;
	
	/** 
	 * 镜像文件ID，表示启动实例时选择的镜像资源
	 **/
	private $imageId;
	
	/** 
	 * 实例的资源规则。
	 **/
	private $instanceType;
	
	/** 
	 * 公网出带宽最大值，单位为Mbps(Mega bit per second)，取值范围：
按带宽计费：[1,5]
按流量计费：[1,100]
如果客户不指定，API将自动将出带宽设置成0Mbps。
当InternetMaxBandwidthOut的值为0时，该ECS仅会被分配内网ip，不会被分配外网ip。
当InternetMaxBandwidthOut的值大于0时，该ECS将会被分配内网ip和外网ip。
如果需要可以通过阿里云工单系统申请将带宽范围设置成1~200Mbps。
	 **/
	private $internetChargeType;
	
	/** 
	 * 公网出带宽最大值，单位为Mbps(Mega bit per second)，取值范围：
按带宽计费：[1,5]
按流量计费：[1,100]
如果客户不指定，API将自动将出带宽设置成0Mbps。
当InternetMaxBandwidthOut的值为0时，该ECS仅会被分配内网ip，不会被分配外网ip。
当InternetMaxBandwidthOut的值大于0时，该ECS将会被分配内网ip和外网ip。
如果需要可以通过阿里云工单系统申请将带宽范围设置成1~200Mbps。
	 **/
	private $internetMaxBandwidthIn;
	
	/** 
	 * 公网出带宽最大值，单位为Mbps(Mega bit per second)，取值范围：
按带宽计费：[1,5]
按流量计费：[1,100]
如果客户不指定，API将自动将出带宽设置成0Mbps。
当InternetMaxBandwidthOut的值为0时，该ECS仅会被分配内网ip，不会被分配外网ip。
当InternetMaxBandwidthOut的值大于0时，该ECS将会被分配内网ip和外网ip。
如果需要可以通过阿里云工单系统申请将带宽范围设置成1~200Mbps。
	 **/
	private $internetMaxBandwidthOut;
	
	/** 
	 * Scaling Group关联的Scaling Configuration名称。同一用户账号，同一region，同一伸缩组下唯一。
如果没有指定该参数，默认值为实例的ScalingConfigurationId
英文或中文字符为2-40 个字符（中英文长度一样），以大小字母或中文开头，可包含数字，"_"或"-"。
	 **/
	private $scalingConfigurationName;
	
	/** 
	 * ScalingGroupId
	 **/
	private $scalingGroupId;
	
	/** 
	 * 指定新创建实例所属于的安全组代码，同一个安全组内的实例之间可以互相访问。
	 **/
	private $securityGroupId;
	
	/** 
	 * 镜像文件ID，表示启动实例时选择的镜像资源
	 **/
	private $systemDiskCategory;
	
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
	
	public function setDataDisk1Category($dataDisk1Category)
	{
		$this->dataDisk1Category = $dataDisk1Category;
		$this->apiParas["DataDisk.1.Category"] = $dataDisk1Category;
	}

	public function getDataDisk1Category()
	{
		return $this->dataDisk1Category;
	}

	public function setDataDisk1Device($dataDisk1Device)
	{
		$this->dataDisk1Device = $dataDisk1Device;
		$this->apiParas["DataDisk.1.Device"] = $dataDisk1Device;
	}

	public function getDataDisk1Device()
	{
		return $this->dataDisk1Device;
	}

	public function setDataDisk1Size($dataDisk1Size)
	{
		$this->dataDisk1Size = $dataDisk1Size;
		$this->apiParas["DataDisk.1.Size"] = $dataDisk1Size;
	}

	public function getDataDisk1Size()
	{
		return $this->dataDisk1Size;
	}

	public function setDataDisk1SnapshotId($dataDisk1SnapshotId)
	{
		$this->dataDisk1SnapshotId = $dataDisk1SnapshotId;
		$this->apiParas["DataDisk.1.SnapshotId"] = $dataDisk1SnapshotId;
	}

	public function getDataDisk1SnapshotId()
	{
		return $this->dataDisk1SnapshotId;
	}

	public function setDataDisk2Category($dataDisk2Category)
	{
		$this->dataDisk2Category = $dataDisk2Category;
		$this->apiParas["DataDisk.2.Category"] = $dataDisk2Category;
	}

	public function getDataDisk2Category()
	{
		return $this->dataDisk2Category;
	}

	public function setDataDisk2Device($dataDisk2Device)
	{
		$this->dataDisk2Device = $dataDisk2Device;
		$this->apiParas["DataDisk.2.Device"] = $dataDisk2Device;
	}

	public function getDataDisk2Device()
	{
		return $this->dataDisk2Device;
	}

	public function setDataDisk2Size($dataDisk2Size)
	{
		$this->dataDisk2Size = $dataDisk2Size;
		$this->apiParas["DataDisk.2.Size"] = $dataDisk2Size;
	}

	public function getDataDisk2Size()
	{
		return $this->dataDisk2Size;
	}

	public function setDataDisk2SnapshotId($dataDisk2SnapshotId)
	{
		$this->dataDisk2SnapshotId = $dataDisk2SnapshotId;
		$this->apiParas["DataDisk.2.SnapshotId"] = $dataDisk2SnapshotId;
	}

	public function getDataDisk2SnapshotId()
	{
		return $this->dataDisk2SnapshotId;
	}

	public function setDataDisk3Category($dataDisk3Category)
	{
		$this->dataDisk3Category = $dataDisk3Category;
		$this->apiParas["DataDisk.3.Category"] = $dataDisk3Category;
	}

	public function getDataDisk3Category()
	{
		return $this->dataDisk3Category;
	}

	public function setDataDisk3Device($dataDisk3Device)
	{
		$this->dataDisk3Device = $dataDisk3Device;
		$this->apiParas["DataDisk.3.Device"] = $dataDisk3Device;
	}

	public function getDataDisk3Device()
	{
		return $this->dataDisk3Device;
	}

	public function setDataDisk3Size($dataDisk3Size)
	{
		$this->dataDisk3Size = $dataDisk3Size;
		$this->apiParas["DataDisk.3.Size"] = $dataDisk3Size;
	}

	public function getDataDisk3Size()
	{
		return $this->dataDisk3Size;
	}

	public function setDataDisk3SnapshotId($dataDisk3SnapshotId)
	{
		$this->dataDisk3SnapshotId = $dataDisk3SnapshotId;
		$this->apiParas["DataDisk.3.SnapshotId"] = $dataDisk3SnapshotId;
	}

	public function getDataDisk3SnapshotId()
	{
		return $this->dataDisk3SnapshotId;
	}

	public function setDataDisk4Category($dataDisk4Category)
	{
		$this->dataDisk4Category = $dataDisk4Category;
		$this->apiParas["DataDisk.4.Category"] = $dataDisk4Category;
	}

	public function getDataDisk4Category()
	{
		return $this->dataDisk4Category;
	}

	public function setDataDisk4Device($dataDisk4Device)
	{
		$this->dataDisk4Device = $dataDisk4Device;
		$this->apiParas["DataDisk.4.Device"] = $dataDisk4Device;
	}

	public function getDataDisk4Device()
	{
		return $this->dataDisk4Device;
	}

	public function setDataDisk4Size($dataDisk4Size)
	{
		$this->dataDisk4Size = $dataDisk4Size;
		$this->apiParas["DataDisk.4.Size"] = $dataDisk4Size;
	}

	public function getDataDisk4Size()
	{
		return $this->dataDisk4Size;
	}

	public function setDataDisk4SnapshotId($dataDisk4SnapshotId)
	{
		$this->dataDisk4SnapshotId = $dataDisk4SnapshotId;
		$this->apiParas["DataDisk.4.SnapshotId"] = $dataDisk4SnapshotId;
	}

	public function getDataDisk4SnapshotId()
	{
		return $this->dataDisk4SnapshotId;
	}

	public function setImageId($imageId)
	{
		$this->imageId = $imageId;
		$this->apiParas["ImageId"] = $imageId;
	}

	public function getImageId()
	{
		return $this->imageId;
	}

	public function setInstanceType($instanceType)
	{
		$this->instanceType = $instanceType;
		$this->apiParas["InstanceType"] = $instanceType;
	}

	public function getInstanceType()
	{
		return $this->instanceType;
	}

	public function setInternetChargeType($internetChargeType)
	{
		$this->internetChargeType = $internetChargeType;
		$this->apiParas["InternetChargeType"] = $internetChargeType;
	}

	public function getInternetChargeType()
	{
		return $this->internetChargeType;
	}

	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
	{
		$this->internetMaxBandwidthIn = $internetMaxBandwidthIn;
		$this->apiParas["InternetMaxBandwidthIn"] = $internetMaxBandwidthIn;
	}

	public function getInternetMaxBandwidthIn()
	{
		return $this->internetMaxBandwidthIn;
	}

	public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
	{
		$this->internetMaxBandwidthOut = $internetMaxBandwidthOut;
		$this->apiParas["InternetMaxBandwidthOut"] = $internetMaxBandwidthOut;
	}

	public function getInternetMaxBandwidthOut()
	{
		return $this->internetMaxBandwidthOut;
	}

	public function setScalingConfigurationName($scalingConfigurationName)
	{
		$this->scalingConfigurationName = $scalingConfigurationName;
		$this->apiParas["ScalingConfigurationName"] = $scalingConfigurationName;
	}

	public function getScalingConfigurationName()
	{
		return $this->scalingConfigurationName;
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

	public function setSecurityGroupId($securityGroupId)
	{
		$this->securityGroupId = $securityGroupId;
		$this->apiParas["SecurityGroupId"] = $securityGroupId;
	}

	public function getSecurityGroupId()
	{
		return $this->securityGroupId;
	}

	public function setSystemDiskCategory($systemDiskCategory)
	{
		$this->systemDiskCategory = $systemDiskCategory;
		$this->apiParas["SystemDisk.Category"] = $systemDiskCategory;
	}

	public function getSystemDiskCategory()
	{
		return $this->systemDiskCategory;
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
		return "ess.aliyuncs.com.CreateScalingConfiguration.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->dataDisk1Size,2000,"dataDisk1Size");
		RequestCheckUtil::checkMinValue($this->dataDisk1Size,5,"dataDisk1Size");
		RequestCheckUtil::checkMaxValue($this->dataDisk2Size,2000,"dataDisk2Size");
		RequestCheckUtil::checkMinValue($this->dataDisk2Size,5,"dataDisk2Size");
		RequestCheckUtil::checkNotNull($this->imageId,"imageId");
		RequestCheckUtil::checkNotNull($this->instanceType,"instanceType");
		RequestCheckUtil::checkNotNull($this->scalingGroupId,"scalingGroupId");
		RequestCheckUtil::checkNotNull($this->securityGroupId,"securityGroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
