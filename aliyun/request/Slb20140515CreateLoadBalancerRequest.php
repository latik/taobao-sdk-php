<?php
/**
 * TOP API: slb.aliyuncs.com.CreateLoadBalancer.2014-05-15 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Slb20140515CreateLoadBalancerRequest
{
	/** 
	 * Address类型。，
取值：internet | 或者intranet，
默认值：为internet。
	 **/
	private $addressType;
	
	/** 
	 * 按固定带宽计费方式的公网类型实例的带宽峰值。针对按固定带宽计费方式的公网类型实例，需要将当前设定值通过Listener上的Bandwidth参数进行分配后才能生效；针对按使用流量计费方式的公网类型实例的带宽峰值，请直接通过Listener上Bandwidth参数进行设定，此时本参数会被忽略。
取值：1-1000（单位为Mbps）
默认值：1<br /> 支持最大值为：1000<br /> 支持最小值为：-1
	 **/
	private $bandwidth;
	
	/** 
	 * 用于保证请求的幂等性。
	 **/
	private $clientToken;
	
	/** 
	 * 计费类型：paybybandwidth：按带宽，paybytraffic：按流量
	 **/
	private $internetChargeType;
	
	/** 
	 * SLB实例的显示名称。
取值：用户自定义字符串。长度限制为1-80个字符，允许包含字母、数字、‘-’、‘/’、‘.’、‘_’这些字符。
默认值：无
不指定该参数时，默认由系统分配一个实例名称。<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $loadBalancerName;
	
	/** 
	 * RegionId SLB实例所属的Region编号。
	 **/
	private $regionId;
	
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

	public function setBandwidth($bandwidth)
	{
		$this->bandwidth = $bandwidth;
		$this->apiParas["Bandwidth"] = $bandwidth;
	}

	public function getBandwidth()
	{
		return $this->bandwidth;
	}

	public function setClientToken($clientToken)
	{
		$this->clientToken = $clientToken;
		$this->apiParas["ClientToken"] = $clientToken;
	}

	public function getClientToken()
	{
		return $this->clientToken;
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

	public function setLoadBalancerName($loadBalancerName)
	{
		$this->loadBalancerName = $loadBalancerName;
		$this->apiParas["LoadBalancerName"] = $loadBalancerName;
	}

	public function getLoadBalancerName()
	{
		return $this->loadBalancerName;
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
		return "slb.aliyuncs.com.CreateLoadBalancer.2014-05-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->bandwidth,1000,"bandwidth");
		RequestCheckUtil::checkMinValue($this->bandwidth,-1,"bandwidth");
		RequestCheckUtil::checkMaxLength($this->loadBalancerName,80,"loadBalancerName");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
