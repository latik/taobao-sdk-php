<?php
/**
 * TOP API: cdn.aliyuncs.com.OpenCdnService.2014-11-11 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Cdn20141111OpenCdnServiceRequest
{
	/** 
	 * 开通服务的计费类型：按流量、按带宽峰值、免费版。如果用户不指定，默认PayByTraffic
按流量“PayByTraffic”
按带宽峰值“PayByBandwidth”
	 **/
	private $internetChargeType;
	
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
	
	public function setInternetChargeType($internetChargeType)
	{
		$this->internetChargeType = $internetChargeType;
		$this->apiParas["InternetChargeType"] = $internetChargeType;
	}

	public function getInternetChargeType()
	{
		return $this->internetChargeType;
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
		return "cdn.aliyuncs.com.OpenCdnService.2014-11-11";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->internetChargeType,"internetChargeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
