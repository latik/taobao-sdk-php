<?php
/**
 * TOP API: slb.aliyuncs.com.SetLoadBalancerTCPListenerAttribute.2014-05-15 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Slb20140515SetLoadBalancerTCPListenerAttributeRequest
{
	/** 
	 * 监听的带宽峰值，范围-1-1000Mbps。针对按固定带宽计费方式的公网类型实例，不同Listener上的Bandwidth分配的带宽峰值总和不能超出在创建SLB实例时设定的Bandwidth值，且不能将Listener上的Bandwidth设置为-1；针对按使用流量计费方式的公网类型实例，可以选择将Listener上的Bandwidth设置为-1，表示不限制带宽峰值。<br /> 支持最大值为：1000<br /> 支持最小值为：-1
	 **/
	private $bandwidth;
	
	/** 
	 * 进行健康检查时使用的端口。
取值：1-65535
默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。健康检查的端口，范围为1-65535。默认使用后端服务端口。<br /> 支持最大值为：65535<br /> 支持最小值为：1
	 **/
	private $healthCheckConnectPort;
	
	/** 
	 * 每次健康检查响应的最大超时时间。
取值：1-50
默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。
注意：如果HCTimeout < Interval，则HCTimeout无效，超时时间为HealthCheckInterval。健康检查的连接超时时间，单位为秒，范围为1-50，默认5。<br /> 支持最大值为：50<br /> 支持最小值为：1
	 **/
	private $healthCheckConnectTimeout;
	
	/** 
	 * 进行健康检查的时间间隔。
取值：1-5（单位为秒）
默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。健康检查的间隔，单位为秒，取值区间为1-5。默认2。<br /> 支持最大值为：5<br /> 支持最小值为：1
	 **/
	private $healthCheckInterval;
	
	/** 
	 * 判定健康检查结果为success的阈值。即，健康检查连续成功多少次后，将后端服务器的健康检查结果由fail改为success。
取值：1-10
默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。后端服务器从fail到success的连续健康检查成功次数，取值区间为1-10，默认值3。<br /> 支持最大值为：10<br /> 支持最小值为：1
	 **/
	private $healthyThreshold;
	
	/** 
	 * SLB实例前端使用的端口，范围为1-65535。<br /> 支持最大值为：65535<br /> 支持最小值为：1
	 **/
	private $listenerPort;
	
	/** 
	 * SLB实例的唯一标识。
	 **/
	private $loadBalancerId;
	
	/** 
	 * 连接持久化的超时时间。
取值：范围为0-1000（，单位为秒）
默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。，0表示关闭，默认为0。
其中，0表示关闭。<br /> 支持最大值为：1000<br /> 支持最小值为：0
	 **/
	private $persistenceTimeout;
	
	/** 
	 * 调度算法。
取值：wrr | 或者wlc
，默认值：无
	 **/
	private $scheduler;
	
	/** 
	 * 判定健康检查结果为fail的阈值。即，健康检查连续失败多少次后，将后端服务器的健康检查状态由success改为fail。
取值：1-10
默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。后端服务器从success到fail的连续健康检查失败次数，取值区间为1-10，默认值3。<br /> 支持最大值为：10<br /> 支持最小值为：1
	 **/
	private $unhealthyThreshold;
	
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
	
	public function setBandwidth($bandwidth)
	{
		$this->bandwidth = $bandwidth;
		$this->apiParas["Bandwidth"] = $bandwidth;
	}

	public function getBandwidth()
	{
		return $this->bandwidth;
	}

	public function setHealthCheckConnectPort($healthCheckConnectPort)
	{
		$this->healthCheckConnectPort = $healthCheckConnectPort;
		$this->apiParas["HealthCheckConnectPort"] = $healthCheckConnectPort;
	}

	public function getHealthCheckConnectPort()
	{
		return $this->healthCheckConnectPort;
	}

	public function setHealthCheckConnectTimeout($healthCheckConnectTimeout)
	{
		$this->healthCheckConnectTimeout = $healthCheckConnectTimeout;
		$this->apiParas["HealthCheckConnectTimeout"] = $healthCheckConnectTimeout;
	}

	public function getHealthCheckConnectTimeout()
	{
		return $this->healthCheckConnectTimeout;
	}

	public function setHealthCheckInterval($healthCheckInterval)
	{
		$this->healthCheckInterval = $healthCheckInterval;
		$this->apiParas["HealthCheckInterval"] = $healthCheckInterval;
	}

	public function getHealthCheckInterval()
	{
		return $this->healthCheckInterval;
	}

	public function setHealthyThreshold($healthyThreshold)
	{
		$this->healthyThreshold = $healthyThreshold;
		$this->apiParas["HealthyThreshold"] = $healthyThreshold;
	}

	public function getHealthyThreshold()
	{
		return $this->healthyThreshold;
	}

	public function setListenerPort($listenerPort)
	{
		$this->listenerPort = $listenerPort;
		$this->apiParas["ListenerPort"] = $listenerPort;
	}

	public function getListenerPort()
	{
		return $this->listenerPort;
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

	public function setPersistenceTimeout($persistenceTimeout)
	{
		$this->persistenceTimeout = $persistenceTimeout;
		$this->apiParas["PersistenceTimeout"] = $persistenceTimeout;
	}

	public function getPersistenceTimeout()
	{
		return $this->persistenceTimeout;
	}

	public function setScheduler($scheduler)
	{
		$this->scheduler = $scheduler;
		$this->apiParas["Scheduler"] = $scheduler;
	}

	public function getScheduler()
	{
		return $this->scheduler;
	}

	public function setUnhealthyThreshold($unhealthyThreshold)
	{
		$this->unhealthyThreshold = $unhealthyThreshold;
		$this->apiParas["UnhealthyThreshold"] = $unhealthyThreshold;
	}

	public function getUnhealthyThreshold()
	{
		return $this->unhealthyThreshold;
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
		return "slb.aliyuncs.com.SetLoadBalancerTCPListenerAttribute.2014-05-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bandwidth,"bandwidth");
		RequestCheckUtil::checkMaxValue($this->bandwidth,1000,"bandwidth");
		RequestCheckUtil::checkMinValue($this->bandwidth,-1,"bandwidth");
		RequestCheckUtil::checkMaxValue($this->healthCheckConnectPort,65535,"healthCheckConnectPort");
		RequestCheckUtil::checkMinValue($this->healthCheckConnectPort,1,"healthCheckConnectPort");
		RequestCheckUtil::checkMaxValue($this->healthCheckConnectTimeout,50,"healthCheckConnectTimeout");
		RequestCheckUtil::checkMinValue($this->healthCheckConnectTimeout,1,"healthCheckConnectTimeout");
		RequestCheckUtil::checkMaxValue($this->healthCheckInterval,5,"healthCheckInterval");
		RequestCheckUtil::checkMinValue($this->healthCheckInterval,1,"healthCheckInterval");
		RequestCheckUtil::checkMaxValue($this->healthyThreshold,10,"healthyThreshold");
		RequestCheckUtil::checkMinValue($this->healthyThreshold,1,"healthyThreshold");
		RequestCheckUtil::checkNotNull($this->listenerPort,"listenerPort");
		RequestCheckUtil::checkMaxValue($this->listenerPort,65535,"listenerPort");
		RequestCheckUtil::checkMinValue($this->listenerPort,1,"listenerPort");
		RequestCheckUtil::checkNotNull($this->loadBalancerId,"loadBalancerId");
		RequestCheckUtil::checkMaxValue($this->persistenceTimeout,1000,"persistenceTimeout");
		RequestCheckUtil::checkMinValue($this->persistenceTimeout,0,"persistenceTimeout");
		RequestCheckUtil::checkMaxValue($this->unhealthyThreshold,10,"unhealthyThreshold");
		RequestCheckUtil::checkMinValue($this->unhealthyThreshold,1,"unhealthyThreshold");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
