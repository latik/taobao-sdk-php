<?php
/**
 * TOP API: ecs.aliyuncs.com.ModifyInstanceNetworkSpec.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ecs20140526ModifyInstanceNetworkSpecRequest
{
	/** 
	 * 指定的需要实例规格的实例ID
	 **/
	private $instanceId;
	
	/** 
	 * 公网入网带宽最大值，单位为Mbps。可取值范围为[1,200]
	 **/
	private $internetMaxBandwidthIn;
	
	/** 
	 * 公网出网带宽最大值，单位为Mbps。可取值范围为[1,200]
	 **/
	private $internetMaxBandwidthOut;
	
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
	
	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
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
		return "ecs.aliyuncs.com.ModifyInstanceNetworkSpec.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
