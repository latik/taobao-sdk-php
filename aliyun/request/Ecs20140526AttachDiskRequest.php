<?php
/**
 * TOP API: ecs.aliyuncs.com.AttachDisk.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Ecs20140526AttachDiskRequest
{
	/** 
	 * 磁盘是否随实例释放：
True表示Instance释放时，这块磁盘随Instance一起释放；
False表示Instance释放时，这块磁盘保留不释放。
默认值：无，表示保留当前值
	 **/
	private $deleteWithInstance;
	
	/** 
	 * 空表示由系统默认分配，/dev/xvdb/开始到/dev/xvdz/
	 **/
	private $device;
	
	/** 
	 * 磁盘ID，磁盘和Instance必须在同一个Zone
	 **/
	private $diskId;
	
	/** 
	 * 目标云服务器ID
	 **/
	private $instanceId;
	
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
	
	public function setDeleteWithInstance($deleteWithInstance)
	{
		$this->deleteWithInstance = $deleteWithInstance;
		$this->apiParas["DeleteWithInstance"] = $deleteWithInstance;
	}

	public function getDeleteWithInstance()
	{
		return $this->deleteWithInstance;
	}

	public function setDevice($device)
	{
		$this->device = $device;
		$this->apiParas["Device"] = $device;
	}

	public function getDevice()
	{
		return $this->device;
	}

	public function setDiskId($diskId)
	{
		$this->diskId = $diskId;
		$this->apiParas["DiskId"] = $diskId;
	}

	public function getDiskId()
	{
		return $this->diskId;
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
		return "ecs.aliyuncs.com.AttachDisk.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->diskId,"diskId");
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
