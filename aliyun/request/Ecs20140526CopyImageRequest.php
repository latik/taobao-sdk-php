<?php
/**
 * TOP API: ecs.aliyuncs.com.CopyImage.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Ecs20140526CopyImageRequest
{
	/** 
	 * 目标镜像的描述信息
	 **/
	private $destinationDescription;
	
	/** 
	 * 目标镜像名称
	 **/
	private $destinationImageName;
	
	/** 
	 * 目标镜像所在Region的NO
	 **/
	private $destinationRegionId;
	
	/** 
	 * 源镜像NO
	 **/
	private $sourceImageId;
	
	/** 
	 * 源镜像所在RegionNO
	 **/
	private $sourceRegionId;
	
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
	
	public function setDestinationDescription($destinationDescription)
	{
		$this->destinationDescription = $destinationDescription;
		$this->apiParas["DestinationDescription"] = $destinationDescription;
	}

	public function getDestinationDescription()
	{
		return $this->destinationDescription;
	}

	public function setDestinationImageName($destinationImageName)
	{
		$this->destinationImageName = $destinationImageName;
		$this->apiParas["DestinationImageName"] = $destinationImageName;
	}

	public function getDestinationImageName()
	{
		return $this->destinationImageName;
	}

	public function setDestinationRegionId($destinationRegionId)
	{
		$this->destinationRegionId = $destinationRegionId;
		$this->apiParas["DestinationRegionId"] = $destinationRegionId;
	}

	public function getDestinationRegionId()
	{
		return $this->destinationRegionId;
	}

	public function setSourceImageId($sourceImageId)
	{
		$this->sourceImageId = $sourceImageId;
		$this->apiParas["SourceImageId"] = $sourceImageId;
	}

	public function getSourceImageId()
	{
		return $this->sourceImageId;
	}

	public function setSourceRegionId($sourceRegionId)
	{
		$this->sourceRegionId = $sourceRegionId;
		$this->apiParas["SourceRegionId"] = $sourceRegionId;
	}

	public function getSourceRegionId()
	{
		return $this->sourceRegionId;
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
		return "ecs.aliyuncs.com.CopyImage.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->destinationDescription,"destinationDescription");
		RequestCheckUtil::checkNotNull($this->destinationImageName,"destinationImageName");
		RequestCheckUtil::checkNotNull($this->destinationRegionId,"destinationRegionId");
		RequestCheckUtil::checkNotNull($this->sourceImageId,"sourceImageId");
		RequestCheckUtil::checkNotNull($this->sourceRegionId,"sourceRegionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
