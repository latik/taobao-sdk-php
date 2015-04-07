<?php
/**
 * TOP API: bss.aliyuncs.com.SetResourceBusinessStatus.2014-07-14 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Bss20140714SetResourceBusinessStatusRequest
{
	/** 
	 * 操作类型
expired:过期状态
normal:正常状态
	 **/
	private $businessStatus;
	
	/** 
	 * 要操作的实例Id可创建多实例的服务，需要填写此参数。
	 **/
	private $resourceId;
	
	/** 
	 * 要操作的资源的类型。
	 **/
	private $resourceType;
	
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
	
	public function setBusinessStatus($businessStatus)
	{
		$this->businessStatus = $businessStatus;
		$this->apiParas["BusinessStatus"] = $businessStatus;
	}

	public function getBusinessStatus()
	{
		return $this->businessStatus;
	}

	public function setResourceId($resourceId)
	{
		$this->resourceId = $resourceId;
		$this->apiParas["ResourceId"] = $resourceId;
	}

	public function getResourceId()
	{
		return $this->resourceId;
	}

	public function setResourceType($resourceType)
	{
		$this->resourceType = $resourceType;
		$this->apiParas["ResourceType"] = $resourceType;
	}

	public function getResourceType()
	{
		return $this->resourceType;
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
		return "bss.aliyuncs.com.SetResourceBusinessStatus.2014-07-14";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->businessStatus,"businessStatus");
		RequestCheckUtil::checkNotNull($this->resourceId,"resourceId");
		RequestCheckUtil::checkNotNull($this->resourceType,"resourceType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
