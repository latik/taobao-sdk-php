<?php
/**
 * TOP API: ecs.aliyuncs.com.CreateRouteEntry.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ecs20140526CreateRouteEntryRequest
{
	/** 
	 * 用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不值过64个ASCII字符。
	 **/
	private $clientToken;
	
	/** 
	 * 新增路由条目的目的网段
	 **/
	private $destinationCidrBlock;
	
	/** 
	 * 新增路由条目的下一跳实例ID
	 **/
	private $nextHopId;
	
	/** 
	 * 默认值为Instance。可选值为Instance
	 **/
	private $nextHopType;
	
	/** 
	 * 虚拟路由表Id
	 **/
	private $routeTableId;
	
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

	public function setDestinationCidrBlock($destinationCidrBlock)
	{
		$this->destinationCidrBlock = $destinationCidrBlock;
		$this->apiParas["DestinationCidrBlock"] = $destinationCidrBlock;
	}

	public function getDestinationCidrBlock()
	{
		return $this->destinationCidrBlock;
	}

	public function setNextHopId($nextHopId)
	{
		$this->nextHopId = $nextHopId;
		$this->apiParas["NextHopId"] = $nextHopId;
	}

	public function getNextHopId()
	{
		return $this->nextHopId;
	}

	public function setNextHopType($nextHopType)
	{
		$this->nextHopType = $nextHopType;
		$this->apiParas["NextHopType"] = $nextHopType;
	}

	public function getNextHopType()
	{
		return $this->nextHopType;
	}

	public function setRouteTableId($routeTableId)
	{
		$this->routeTableId = $routeTableId;
		$this->apiParas["RouteTableId"] = $routeTableId;
	}

	public function getRouteTableId()
	{
		return $this->routeTableId;
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
		return "ecs.aliyuncs.com.CreateRouteEntry.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->destinationCidrBlock,"destinationCidrBlock");
		RequestCheckUtil::checkNotNull($this->nextHopId,"nextHopId");
		RequestCheckUtil::checkNotNull($this->routeTableId,"routeTableId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
