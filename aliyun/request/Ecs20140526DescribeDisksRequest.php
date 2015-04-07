<?php
/**
 * TOP API: ecs.aliyuncs.com.DescribeDisks.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Ecs20140526DescribeDisksRequest
{
	/** 
	 * 磁盘种类，all|cloud|ephemaral。默认值为all
	 **/
	private $category;
	
	/** 
	 * 删除磁盘时，是否同时删除自动快照。
True表示同时删除自动快照
False表示保留自动快照
	 **/
	private $deleteAutoSnapshot;
	
	/** 
	 * 磁盘是否随实例释放：
True表示Instance释放时，这块磁盘随Instance一起释放；
False表示Instance释放时，这块磁盘保留不释放。
默认值为
	 **/
	private $deleteWithInstance;
	
	/** 
	 * 磁盘ID
	 **/
	private $diskIds;
	
	/** 
	 * all|system|data，默认值为all。
	 **/
	private $diskType;
	
	/** 
	 * 目标云服务器ID
	 **/
	private $instanceId;
	
	/** 
	 * 实例状态列表的页码，起始值为1，默认值为1<br /> 支持最小值为：1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值50行，默认为10<br /> 支持最大值为：50<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * True代表是独立云磁盘，可以独立存在且可以自由在独立区内挂载和下载，false代表非独立云磁盘，只能和实例同生同灭。用户如果需要做attach和detach操作，必须先查询一下这个属性为true的磁盘才能操作。临时磁盘，云磁盘的系统盘和包月的云磁盘，该属性都为false。这个属性用户不能更改
	 **/
	private $portable;
	
	/** 
	 * 实例所属于的Region ID
	 **/
	private $regionId;
	
	/** 
	 * 创建数据盘使用的快照
指定该参数后Size会被忽略，实际创建的磁盘大小为指定快照的大小
2013年7月15日（含）前的快照不能用来创建磁盘
	 **/
	private $snapshotId;
	
	/** 
	 * 磁盘状态
In-use|Availalble|Attaching|
Detaching|Creating|Deleting|All，默认值为All
	 **/
	private $status;
	
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
	
	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["Category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setDeleteAutoSnapshot($deleteAutoSnapshot)
	{
		$this->deleteAutoSnapshot = $deleteAutoSnapshot;
		$this->apiParas["DeleteAutoSnapshot"] = $deleteAutoSnapshot;
	}

	public function getDeleteAutoSnapshot()
	{
		return $this->deleteAutoSnapshot;
	}

	public function setDeleteWithInstance($deleteWithInstance)
	{
		$this->deleteWithInstance = $deleteWithInstance;
		$this->apiParas["DeleteWithInstance"] = $deleteWithInstance;
	}

	public function getDeleteWithInstance()
	{
		return $this->deleteWithInstance;
	}

	public function setDiskIds($diskIds)
	{
		$this->diskIds = $diskIds;
		$this->apiParas["DiskIds"] = $diskIds;
	}

	public function getDiskIds()
	{
		return $this->diskIds;
	}

	public function setDiskType($diskType)
	{
		$this->diskType = $diskType;
		$this->apiParas["DiskType"] = $diskType;
	}

	public function getDiskType()
	{
		return $this->diskType;
	}

	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

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

	public function setPortable($portable)
	{
		$this->portable = $portable;
		$this->apiParas["Portable"] = $portable;
	}

	public function getPortable()
	{
		return $this->portable;
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

	public function setSnapshotId($snapshotId)
	{
		$this->snapshotId = $snapshotId;
		$this->apiParas["SnapshotId"] = $snapshotId;
	}

	public function getSnapshotId()
	{
		return $this->snapshotId;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["Status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "ecs.aliyuncs.com.DescribeDisks.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
