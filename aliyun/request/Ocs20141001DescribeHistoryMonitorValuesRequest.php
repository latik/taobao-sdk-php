<?php
/**
 * TOP API: ocs.aliyuncs.com.DescribeHistoryMonitorValues.2014-10-01 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Ocs20141001DescribeHistoryMonitorValuesRequest
{
	/** 
	 * 历史监控结束时间点；
ISO8601 表示法，并使用UTC时间。格式为： YYYY-MM-DDThh:mm:ssZ
	 **/
	private $endTime;
	
	/** 
	 * 实例ID
	 **/
	private $instanceId;
	
	/** 
	 * 取值必须是01m, 05m, 15m, 60m
监控信息采样间隔，即每隔N分钟取一个监控采样点。
	 **/
	private $intervalForHistory;
	
	/** 
	 * 历史监控开始时间点；
ISO8601 表示法，并使用UTC时间。格式为： YYYY-MM-DDThh:mm:ssZ
	 **/
	private $startTime;
	
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
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["EndTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function setIntervalForHistory($intervalForHistory)
	{
		$this->intervalForHistory = $intervalForHistory;
		$this->apiParas["IntervalForHistory"] = $intervalForHistory;
	}

	public function getIntervalForHistory()
	{
		return $this->intervalForHistory;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["StartTime"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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
		return "ocs.aliyuncs.com.DescribeHistoryMonitorValues.2014-10-01";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
		RequestCheckUtil::checkNotNull($this->intervalForHistory,"intervalForHistory");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
