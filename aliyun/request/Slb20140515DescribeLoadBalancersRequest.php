<?php
/**
 * TOP API: slb.aliyuncs.com.DescribeLoadBalancers.2014-05-15 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Slb20140515DescribeLoadBalancersRequest
{
	/** 
	 * Address类型，internet或者intranet。
	 **/
	private $addressType;
	
	/** 
	 * 以公网类型实例付费方式作为过滤器。
取值：，paybybandwidth | 或者paybytraffic
，默认值：无
不设置该参数表示不适用该参数作为过滤条件。
	 **/
	private $internetChargeType;
	
	/** 
	 * SLB实例的唯一标识，可以输入多个，以”,”分割。
	 **/
	private $loadBalancerId;
	
	/** 
	 * SLB实例所属的Region编号。
	 **/
	private $regionId;
	
	/** 
	 * 后端服务器名称Id，为ECS实例Id。
	 **/
	private $serverId;
	
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
	
	public function setAddressType($addressType)
	{
		$this->addressType = $addressType;
		$this->apiParas["AddressType"] = $addressType;
	}

	public function getAddressType()
	{
		return $this->addressType;
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

	public function setLoadBalancerId($loadBalancerId)
	{
		$this->loadBalancerId = $loadBalancerId;
		$this->apiParas["LoadBalancerId"] = $loadBalancerId;
	}

	public function getLoadBalancerId()
	{
		return $this->loadBalancerId;
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

	public function setServerId($serverId)
	{
		$this->serverId = $serverId;
		$this->apiParas["ServerId"] = $serverId;
	}

	public function getServerId()
	{
		return $this->serverId;
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
		return "slb.aliyuncs.com.DescribeLoadBalancers.2014-05-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
