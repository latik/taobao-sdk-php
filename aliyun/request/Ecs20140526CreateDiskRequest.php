<?php
/**
 * TOP API: ecs.aliyuncs.com.CreateDisk.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Ecs20140526CreateDiskRequest
{
	/** 
	 * 用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不值过64个ASCII字符。
	 **/
	private $clientToken;
	
	/** 
	 * 磁盘描述，不填则为空，默认值为空
	 **/
	private $description;
	
	/** 
	 * 磁盘名称，不填则为空，默认值为空，[0,128]英文或中文字符，磁盘名称会展示在控制台。不能以http://和https://开头。
	 **/
	private $diskName;
	
	/** 
	 * 实例所属的Region ID
	 **/
	private $regionId;
	
	/** 
	 * 数据盘的磁盘大小
以GB为单位，取值范围为5~2000
如果指定了SnapshotId，则忽略，会使用实际快照大小。<br /> 支持最大值为：2000<br /> 支持最小值为：5
	 **/
	private $size;
	
	/** 
	 * 创建数据盘使用的快照
指定该参数后Size会被忽略，实际创建的磁盘大小为指定快照的大小
2013年7月15日（含）前的快照不能用来创建磁盘
	 **/
	private $snapshotId;
	
	/** 
	 * 可用区ID。
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

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["Description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDiskName($diskName)
	{
		$this->diskName = $diskName;
		$this->apiParas["DiskName"] = $diskName;
	}

	public function getDiskName()
	{
		return $this->diskName;
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

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["Size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setSnapshotId($snapshotId)
	{
		$this->snapshotId = $snapshotId;
		$this->apiParas["SnapshotId"] = $snapshotId;
	}

	public function getSnapshotId()
	{
		return $this->snapshotId;
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
		return "ecs.aliyuncs.com.CreateDisk.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
		RequestCheckUtil::checkMaxValue($this->size,2000,"size");
		RequestCheckUtil::checkMinValue($this->size,5,"size");
		RequestCheckUtil::checkNotNull($this->zoneId,"zoneId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
