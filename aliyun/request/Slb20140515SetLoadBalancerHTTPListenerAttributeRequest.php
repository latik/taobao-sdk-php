<?php
/**
 * TOP API: slb.aliyuncs.com.SetLoadBalancerHTTPListenerAttribute.2014-05-15 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Slb20140515SetLoadBalancerHTTPListenerAttributeRequest
{
	/** 
	 * 监听的带宽峰值，范围-1-1000Mbps。针对按固定带宽计费方式的公网类型实例，不同Listener上的Bandwidth分配的带宽峰值总和不能超出在创建SLB实例时设定的Bandwidth值，且不能将Listener上的Bandwidth设置为-1；针对按使用流量计费方式的公网类型实例，可以选择将Listener上的Bandwidth设置为-1，表示不限制带宽峰值。<br /> 支持最大值为：1000<br /> 支持最小值为：-1
	 **/
	private $bandwidth;
	
	/** 
	 * 服务器上配置的cookie。
仅在StickySession为on且StickySessionType为server时为必选；其余情况下该参数会被忽略。
取值：遵守RFC 2965且长度为1-200的字符串。只能包含 ASCII 英文字母数字字符，不能包含逗号、分号或空格，也不能以 $ 字符开头。<br /> 支持最大长度为：200<br /> 支持的最大列表长度为：200
	 **/
	private $cookie;
	
	/** 
	 * cookie超时时间。
该参数在StickySession为on且StickySessionType为insert时为必选，其余情况下该参数会被忽略。
取值： 1-86400（单位为秒）<br /> 支持最大值为：86400<br /> 支持最小值为：1
	 **/
	private $cookieTimeout;
	
	/** 
	 * 是否开启健康检查。
取值：on为开启健康检查， | off为关闭健康检查
	 **/
	private $healthCheck;
	
	/** 
	 * 进行健康检查时使用的端口。
当HealthCheck为on时，此参数为必选；当HealthCheck为off时，此参数设置将被忽略。
取值：1-65535，或者’-520’ 。
用户设置此参数为’-520’时，表示使用后端服务端口（BackendServerPort）。<br /> 支持最大值为：65535<br /> 支持最小值为：-520
	 **/
	private $healthCheckConnectPort;
	
	/** 
	 * 用于健康检查的域名。
当HealthCheck为on时，此参数为必选；当HealthCheck为 off时，此参数设置将被忽略。
取值：$_ip | 用户自定义字符串
自定义字符串规则：长度限制为1-80，只能使用字母、数字、‘-’、‘.’这些字符。
用户设置此参数为’$_ip’时，SLB会使用各后端服务器的私网IP当做健康检查使用的Domain。<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $healthCheckDomain;
	
	/** 
	 * 进行健康检查的时间间隔。
当HealthCheck为on时，此参数为必选；当HealthCheck为off时，此参数设置将被忽略。
取值：1-5（单位为秒）<br /> 支持最大值为：5<br /> 支持最小值为：1
	 **/
	private $healthCheckInterval;
	
	/** 
	 * 每次健康检查响应的最大超时时间。
当HealthCheck为on时，此参数为必选；当HealthCheck为off时，此参数设置将被忽略。
取值：1-50（单位为秒）
注意：如果HealthCHeckTimeout < HealthCheckInterval，则HCTimeout无效，超时时间为HealthCheckInterval。<br /> 支持最大值为：50<br /> 支持最小值为：1
	 **/
	private $healthCheckTimeout;
	
	/** 
	 * 用于健康检查的URI。
当HealthCheck为on时，此参数为必选；当HealthCheck为off时，此参数设置将被忽略。
取值：长度限制为1-80，必须以’/’开头。只能使用字母、数字、‘-’、‘/’、‘.’、‘%’、‘?’、‘#’、‘&’这些字符。<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $healthCheckURI;
	
	/** 
	 * 判定健康检查结果为success的阈值。即，健康检查连续成功多少次后，将后端服务器的健康检查结果由fail改为success。
当HealthCheck为on时，此参数为必选；当HealthCheck为off时，此参数设置将被忽略。
取值：1-10<br /> 支持最大值为：10<br /> 支持最小值为：1
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
	 * 调度算法。
取值：wrr或者 | wlc
，默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。默认wrr。
	 **/
	private $scheduler;
	
	/** 
	 * 是否开启会话保持。
取值：on | off为开启会话保持，off为关闭会话保持，
	 **/
	private $stickySession;
	
	/** 
	 * cookie的处理方式。
该参数在StickySession为on时为必选；当StickySession为off时，此参数设置将被忽略。
取值：insert | server
设置为insert表示由SLB插入，设置为server表示SLB从后端服务器学习。
	 **/
	private $stickySessionType;
	
	/** 
	 * 判定健康检查结果为fail的阈值。即，健康检查连续失败多少次后，将后端服务器的健康检查状态由success改为fail。
当HealthCheck为on时，此参数为必选；当HealthCheck为off时，此参数设置将被忽略。
取值：1-10<br /> 支持最大值为：10<br /> 支持最小值为：1
	 **/
	private $unhealthyThreshold;
	
	/** 
	 * 是否开启通过X-Forwarded-For的方式获取来访者真实IP功能。
取值：on | off
为开启XForwardedFor，off为关闭XForwardedFor，默认值：无
用户不指定此参数时，表示此次调用不修改此配置项，保持之前的配置。默认off。
	 **/
	private $xForwardedFor;
	
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

	public function setCookie($cookie)
	{
		$this->cookie = $cookie;
		$this->apiParas["Cookie"] = $cookie;
	}

	public function getCookie()
	{
		return $this->cookie;
	}

	public function setCookieTimeout($cookieTimeout)
	{
		$this->cookieTimeout = $cookieTimeout;
		$this->apiParas["CookieTimeout"] = $cookieTimeout;
	}

	public function getCookieTimeout()
	{
		return $this->cookieTimeout;
	}

	public function setHealthCheck($healthCheck)
	{
		$this->healthCheck = $healthCheck;
		$this->apiParas["HealthCheck"] = $healthCheck;
	}

	public function getHealthCheck()
	{
		return $this->healthCheck;
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

	public function setHealthCheckDomain($healthCheckDomain)
	{
		$this->healthCheckDomain = $healthCheckDomain;
		$this->apiParas["HealthCheckDomain"] = $healthCheckDomain;
	}

	public function getHealthCheckDomain()
	{
		return $this->healthCheckDomain;
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

	public function setHealthCheckTimeout($healthCheckTimeout)
	{
		$this->healthCheckTimeout = $healthCheckTimeout;
		$this->apiParas["HealthCheckTimeout"] = $healthCheckTimeout;
	}

	public function getHealthCheckTimeout()
	{
		return $this->healthCheckTimeout;
	}

	public function setHealthCheckURI($healthCheckURI)
	{
		$this->healthCheckURI = $healthCheckURI;
		$this->apiParas["HealthCheckURI"] = $healthCheckURI;
	}

	public function getHealthCheckURI()
	{
		return $this->healthCheckURI;
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

	public function setScheduler($scheduler)
	{
		$this->scheduler = $scheduler;
		$this->apiParas["Scheduler"] = $scheduler;
	}

	public function getScheduler()
	{
		return $this->scheduler;
	}

	public function setStickySession($stickySession)
	{
		$this->stickySession = $stickySession;
		$this->apiParas["StickySession"] = $stickySession;
	}

	public function getStickySession()
	{
		return $this->stickySession;
	}

	public function setStickySessionType($stickySessionType)
	{
		$this->stickySessionType = $stickySessionType;
		$this->apiParas["StickySessionType"] = $stickySessionType;
	}

	public function getStickySessionType()
	{
		return $this->stickySessionType;
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

	public function setxForwardedFor($xForwardedFor)
	{
		$this->xForwardedFor = $xForwardedFor;
		$this->apiParas["XForwardedFor"] = $xForwardedFor;
	}

	public function getxForwardedFor()
	{
		return $this->xForwardedFor;
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
		return "slb.aliyuncs.com.SetLoadBalancerHTTPListenerAttribute.2014-05-15";
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
		RequestCheckUtil::checkMaxLength($this->cookie,200,"cookie");
		RequestCheckUtil::checkMaxValue($this->cookieTimeout,86400,"cookieTimeout");
		RequestCheckUtil::checkMinValue($this->cookieTimeout,1,"cookieTimeout");
		RequestCheckUtil::checkNotNull($this->healthCheck,"healthCheck");
		RequestCheckUtil::checkMaxValue($this->healthCheckConnectPort,65535,"healthCheckConnectPort");
		RequestCheckUtil::checkMinValue($this->healthCheckConnectPort,-520,"healthCheckConnectPort");
		RequestCheckUtil::checkMaxLength($this->healthCheckDomain,80,"healthCheckDomain");
		RequestCheckUtil::checkMaxValue($this->healthCheckInterval,5,"healthCheckInterval");
		RequestCheckUtil::checkMinValue($this->healthCheckInterval,1,"healthCheckInterval");
		RequestCheckUtil::checkMaxValue($this->healthCheckTimeout,50,"healthCheckTimeout");
		RequestCheckUtil::checkMinValue($this->healthCheckTimeout,1,"healthCheckTimeout");
		RequestCheckUtil::checkMaxLength($this->healthCheckURI,80,"healthCheckURI");
		RequestCheckUtil::checkMaxValue($this->healthyThreshold,10,"healthyThreshold");
		RequestCheckUtil::checkMinValue($this->healthyThreshold,1,"healthyThreshold");
		RequestCheckUtil::checkNotNull($this->listenerPort,"listenerPort");
		RequestCheckUtil::checkMaxValue($this->listenerPort,65535,"listenerPort");
		RequestCheckUtil::checkMinValue($this->listenerPort,1,"listenerPort");
		RequestCheckUtil::checkNotNull($this->loadBalancerId,"loadBalancerId");
		RequestCheckUtil::checkNotNull($this->stickySession,"stickySession");
		RequestCheckUtil::checkMaxValue($this->unhealthyThreshold,10,"unhealthyThreshold");
		RequestCheckUtil::checkMinValue($this->unhealthyThreshold,1,"unhealthyThreshold");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
