<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeBackups.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Rds20140815DescribeBackupsRequest
{
	/** 
	 * 备份集ID
	 **/
	private $backupId;
	
	/** 
	 * 备份类型，可选值：
Automated：常规任务
Manual：临时任务
	 **/
	private $backupMode;
	
	/** 
	 * 备份集状态，取值： 
Success：完成备份
Failed：备份失败
	 **/
	private $backupStatus;
	
	/** 
	 * 实例名
	 **/
	private $dBInstanceId;
	
	/** 
	 * 查询结束时间，格式如：2011-06-11T16:00:00Z，且大于查询开始时间
	 **/
	private $endTime;
	
	/** 
	 * "页码，大于0，且不超过Integer的最大值
默认值：1"<br /> 支持最大值为：2147483647<br /> 支持最小值为：1
	 **/
	private $pageNumber;
	
	/** 
	 * 每页记录数，取值：30|50|100
默认值：30<br /> 支持最大值为：100<br /> 支持最小值为：30
	 **/
	private $pageSize;
	
	/** 
	 * 查询开始时间，格式如：2011-06-11T15:00:00Z
按照备份开始时间为维度
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
	
	public function setBackupId($backupId)
	{
		$this->backupId = $backupId;
		$this->apiParas["BackupId"] = $backupId;
	}

	public function getBackupId()
	{
		return $this->backupId;
	}

	public function setBackupMode($backupMode)
	{
		$this->backupMode = $backupMode;
		$this->apiParas["BackupMode"] = $backupMode;
	}

	public function getBackupMode()
	{
		return $this->backupMode;
	}

	public function setBackupStatus($backupStatus)
	{
		$this->backupStatus = $backupStatus;
		$this->apiParas["BackupStatus"] = $backupStatus;
	}

	public function getBackupStatus()
	{
		return $this->backupStatus;
	}

	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["EndTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "rds.aliyuncs.com.DescribeBackups.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dBInstanceId,"dBInstanceId");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkMaxValue($this->pageNumber,2147483647,"pageNumber");
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
