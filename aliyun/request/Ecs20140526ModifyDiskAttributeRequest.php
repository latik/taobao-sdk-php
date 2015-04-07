<?php
/**
 * TOP API: ecs.aliyuncs.com.ModifyDiskAttribute.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ecs20140526ModifyDiskAttributeRequest
{
	/** 
	 * 删除实例的时候是否删除此磁盘
	 **/
	private $deleteWithInstance;
	
	/** 
	 * 磁盘描述，不填则保持原值，默认值为空，[0,256]英文或中文字符，磁盘描述会展示在控制台。不能以http://和https://开头。
	 **/
	private $description;
	
	/** 
	 * 磁盘ID
	 **/
	private $diskId;
	
	/** 
	 * 磁盘名称，不填则原值，默认值为空，[0,128]英文或中文字符，磁盘名称会展示在控制台。不能以http://和https://开头。
	 **/
	private $diskName;
	
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

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["Description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
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

	public function setDiskName($diskName)
	{
		$this->diskName = $diskName;
		$this->apiParas["DiskName"] = $diskName;
	}

	public function getDiskName()
	{
		return $this->diskName;
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
		return "ecs.aliyuncs.com.ModifyDiskAttribute.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->diskId,"diskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
