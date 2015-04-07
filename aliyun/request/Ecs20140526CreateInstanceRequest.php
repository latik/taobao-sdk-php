<?php
/**
 * TOP API: ecs.aliyuncs.com.CreateInstance.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ecs20140526CreateInstanceRequest
{
	/** 
	 * 用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不值过64个ASCII字符。
具体参见附录：如何保证幂等性。
	 **/
	private $clientToken;
	
	/** 
	 * 数据盘1类型。
	 **/
	private $dataDisk1Category;
	
	/** 
	 * 数据盘名称，不填则为空，默认值为空，[0,128]英文或中文字符，磁盘名称会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk1Description;
	
	/** 
	 * 空表示由系统默认分配，/dev/xvdb/开始到/dev/xvdz/
	 **/
	private $dataDisk1Device;
	
	/** 
	 * 数据盘名称，不填则为空，默认值为空，[0,128]英文或中文字符，磁盘名称会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk1DiskName;
	
	/** 
	 * 数据盘1大小
	 **/
	private $dataDisk1Size;
	
	/** 
	 * 数据盘1快照
	 **/
	private $dataDisk1SnapshotId;
	
	/** 
	 * 数据盘2类型
	 **/
	private $dataDisk2Category;
	
	/** 
	 * 数据盘描述，不填则为空，默认值为空，[0,256]英文或中文字符，磁盘描述会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk2Description;
	
	/** 
	 * 空表示由系统默认分配，/dev/xvdb/开始到/dev/xvdz/
	 **/
	private $dataDisk2Device;
	
	/** 
	 * 数据盘名称，不填则为空，默认值为空，[0,128]英文或中文字符，磁盘名称会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk2DiskName;
	
	/** 
	 * 数据盘2大小
	 **/
	private $dataDisk2Size;
	
	/** 
	 * 数据盘2快照
	 **/
	private $dataDisk2SnapshotId;
	
	/** 
	 * 数据盘3类型
	 **/
	private $dataDisk3Category;
	
	/** 
	 * 数据盘描述，不填则为空，默认值为空，[0,256]英文或中文字符，磁盘描述会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk3Description;
	
	/** 
	 * 空表示由系统默认分配，/dev/xvdb/开始到/dev/xvdz/
	 **/
	private $dataDisk3Device;
	
	/** 
	 * 数据盘名称，不填则为空，默认值为空，[0,128]英文或中文字符，磁盘名称会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk3DiskName;
	
	/** 
	 * 数据盘3大小
	 **/
	private $dataDisk3Size;
	
	/** 
	 * 数据盘3快照
	 **/
	private $dataDisk3SnapshotId;
	
	/** 
	 * 数据盘4类型
	 **/
	private $dataDisk4Category;
	
	/** 
	 * 数据盘描述，不填则为空，默认值为空，[0,256]英文或中文字符，磁盘描述会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk4Description;
	
	/** 
	 * 空表示由系统默认分配，/dev/xvdb/开始到/dev/xvdz/
	 **/
	private $dataDisk4Device;
	
	/** 
	 * 数据盘名称，不填则为空，默认值为空，[0,128]英文或中文字符，磁盘名称会展示在控制台。不能以http://和https://开头。
	 **/
	private $dataDisk4DiskName;
	
	/** 
	 * 数据盘4大小
	 **/
	private $dataDisk4Size;
	
	/** 
	 * 数据盘4快照
	 **/
	private $dataDisk4SnapshotId;
	
	/** 
	 * 实例的描述，[0,256]英文或中文字符，实例描述会显示在控制台。不填则为空，默认为空。不能以http://和https://开头。
	 **/
	private $description;
	
	/** 
	 * 表示云服务器的主机名，最少2字符，“.”和“-”是不能作为hostname的首尾字符，不能连续使用。
Windows平台最长为15字符，允许字母（不限制大小写）、数字和“-”组成，不支持点号（"."），不能全是数字。
其他（Linux等）平台最长为30字符，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和“-”组成。
	 **/
	private $hostName;
	
	/** 
	 * 镜像文件ID，表示启动实例时选择的镜像资源
	 **/
	private $imageId;
	
	/** 
	 * 实例的显示名称，由字母、数字、"-"组成，最长64个字符
实例的显示名称在同一个用户账号下必须唯一，不能重名
如果没有指定该参数，默认值为实例的InstanceId
	 **/
	private $instanceName;
	
	/** 
	 * 实例的资源规则。取值参见附表实例资源规格对照表，也可以调用查询实例资源规格列表接口获得最新的规格表。
	 **/
	private $instanceType;
	
	/** 
	 * 带宽计费类型.
	 **/
	private $internetChargeType;
	
	/** 
	 * 公网入带宽最大值，单位为Mbps(Mega bit per second)，取值范围为1~200，即最大值为200Mbps<br /> 支持最大值为：200<br /> 支持最小值为：1
	 **/
	private $internetMaxBandwidthIn;
	
	/** 
	 * 公网出带宽最大值，单位为Mbps(Mega bit per second)，取值范围为1~200，即最大值为200Mbps
默认值为200Mbps
	 **/
	private $internetMaxBandwidthOut;
	
	/** 
	 * 实例的密码，8-30个字符，必须由大小写字母和数字组成
	 **/
	private $password;
	
	/** 
	 * 实例私网IP地址，不能单独指定。
	 **/
	private $privateIpAddress;
	
	/** 
	 * 实例所属的Region ID
	 **/
	private $regionId;
	
	/** 
	 * 指定新创建实例所属于的安全组代码，同一个安全组内的实例之间可以互相访问。注意：同一安全组内的实例不能超过1000个
	 **/
	private $securityGroupId;
	
	/** 
	 * 系统盘类型
	 **/
	private $systemDiskCategory;
	
	/** 
	 * 系统盘描述，不填则为空，默认值为空，[0,256]英文或中文字符，磁盘描述会展示在控制台。不能以http://和https://开头。
	 **/
	private $systemDiskDescription;
	
	/** 
	 * 系统盘名称
	 **/
	private $systemDiskDiskName;
	
	/** 
	 * 如果是创建VPC类型的实例，需要指定虚拟交换机的ID
	 **/
	private $vSwitchId;
	
	/** 
	 * 实例所属可用区
	 **/
	private $zoneId;
	
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

	public function setDataDisk1Category($dataDisk1Category)
	{
		$this->dataDisk1Category = $dataDisk1Category;
		$this->apiParas["DataDisk.1.Category"] = $dataDisk1Category;
	}

	public function getDataDisk1Category()
	{
		return $this->dataDisk1Category;
	}

	public function setDataDisk1Description($dataDisk1Description)
	{
		$this->dataDisk1Description = $dataDisk1Description;
		$this->apiParas["DataDisk.1.Description"] = $dataDisk1Description;
	}

	public function getDataDisk1Description()
	{
		return $this->dataDisk1Description;
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

	public function setDataDisk1DiskName($dataDisk1DiskName)
	{
		$this->dataDisk1DiskName = $dataDisk1DiskName;
		$this->apiParas["DataDisk.1.DiskName"] = $dataDisk1DiskName;
	}

	public function getDataDisk1DiskName()
	{
		return $this->dataDisk1DiskName;
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

	public function setDataDisk2Description($dataDisk2Description)
	{
		$this->dataDisk2Description = $dataDisk2Description;
		$this->apiParas["DataDisk.2.Description"] = $dataDisk2Description;
	}

	public function getDataDisk2Description()
	{
		return $this->dataDisk2Description;
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

	public function setDataDisk2DiskName($dataDisk2DiskName)
	{
		$this->dataDisk2DiskName = $dataDisk2DiskName;
		$this->apiParas["DataDisk.2.DiskName"] = $dataDisk2DiskName;
	}

	public function getDataDisk2DiskName()
	{
		return $this->dataDisk2DiskName;
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

	public function setDataDisk3Description($dataDisk3Description)
	{
		$this->dataDisk3Description = $dataDisk3Description;
		$this->apiParas["DataDisk.3.Description"] = $dataDisk3Description;
	}

	public function getDataDisk3Description()
	{
		return $this->dataDisk3Description;
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

	public function setDataDisk3DiskName($dataDisk3DiskName)
	{
		$this->dataDisk3DiskName = $dataDisk3DiskName;
		$this->apiParas["DataDisk.3.DiskName"] = $dataDisk3DiskName;
	}

	public function getDataDisk3DiskName()
	{
		return $this->dataDisk3DiskName;
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

	public function setDataDisk4Description($dataDisk4Description)
	{
		$this->dataDisk4Description = $dataDisk4Description;
		$this->apiParas["DataDisk.4.Description"] = $dataDisk4Description;
	}

	public function getDataDisk4Description()
	{
		return $this->dataDisk4Description;
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

	public function setDataDisk4DiskName($dataDisk4DiskName)
	{
		$this->dataDisk4DiskName = $dataDisk4DiskName;
		$this->apiParas["DataDisk.4.DiskName"] = $dataDisk4DiskName;
	}

	public function getDataDisk4DiskName()
	{
		return $this->dataDisk4DiskName;
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

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["Description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setHostName($hostName)
	{
		$this->hostName = $hostName;
		$this->apiParas["HostName"] = $hostName;
	}

	public function getHostName()
	{
		return $this->hostName;
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

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["InstanceName"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
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

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["Password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPrivateIpAddress($privateIpAddress)
	{
		$this->privateIpAddress = $privateIpAddress;
		$this->apiParas["PrivateIpAddress"] = $privateIpAddress;
	}

	public function getPrivateIpAddress()
	{
		return $this->privateIpAddress;
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

	public function setSystemDiskDescription($systemDiskDescription)
	{
		$this->systemDiskDescription = $systemDiskDescription;
		$this->apiParas["SystemDisk.Description"] = $systemDiskDescription;
	}

	public function getSystemDiskDescription()
	{
		return $this->systemDiskDescription;
	}

	public function setSystemDiskDiskName($systemDiskDiskName)
	{
		$this->systemDiskDiskName = $systemDiskDiskName;
		$this->apiParas["SystemDisk.DiskName"] = $systemDiskDiskName;
	}

	public function getSystemDiskDiskName()
	{
		return $this->systemDiskDiskName;
	}

	public function setvSwitchId($vSwitchId)
	{
		$this->vSwitchId = $vSwitchId;
		$this->apiParas["VSwitchId"] = $vSwitchId;
	}

	public function getvSwitchId()
	{
		return $this->vSwitchId;
	}

	public function setZoneId($zoneId)
	{
		$this->zoneId = $zoneId;
		$this->apiParas["ZoneId"] = $zoneId;
	}

	public function getZoneId()
	{
		return $this->zoneId;
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
		return "ecs.aliyuncs.com.CreateInstance.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imageId,"imageId");
		RequestCheckUtil::checkNotNull($this->instanceType,"instanceType");
		RequestCheckUtil::checkMaxValue($this->internetMaxBandwidthIn,200,"internetMaxBandwidthIn");
		RequestCheckUtil::checkMinValue($this->internetMaxBandwidthIn,1,"internetMaxBandwidthIn");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
		RequestCheckUtil::checkNotNull($this->securityGroupId,"securityGroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
