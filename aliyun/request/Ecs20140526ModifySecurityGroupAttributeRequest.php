<?php
/**
 * TOP API: ecs.aliyuncs.com.ModifySecurityGroupAttribute.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ecs20140526ModifySecurityGroupAttributeRequest
{
	/** 
	 * 修改后的安全组描述，不填则为空，默认值为空，[2,256]英文或中文字符，不能以http://和https://开头。
	 **/
	private $description;
	
	/** 
	 * 安全组所在的地域
	 **/
	private $regionId;
	
	/** 
	 * 需要修改的安全组ID
	 **/
	private $securityGroupId;
	
	/** 
	 * 修改后的安全组名称，不填则为空，默认值为空，[2,128]英文或中文字符，必须以大小字母或中文开头，可包含数字，”_”或”-”，这个值会展示在控制台。不能以http://和https://开头。
	 **/
	private $securityGroupName;
	
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
	
	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["Description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
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

	public function setSecurityGroupName($securityGroupName)
	{
		$this->securityGroupName = $securityGroupName;
		$this->apiParas["SecurityGroupName"] = $securityGroupName;
	}

	public function getSecurityGroupName()
	{
		return $this->securityGroupName;
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
		return "ecs.aliyuncs.com.ModifySecurityGroupAttribute.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
		RequestCheckUtil::checkNotNull($this->securityGroupId,"securityGroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
