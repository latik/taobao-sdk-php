<?php
/**
 * TOP API: ess.aliyuncs.com.ModifyScheduledTask.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828ModifyScheduledTaskRequest
{
	/** 
	 * 定时任务的描述信息
长度限制在2~200个英文字符，可以支持中文。（中英文长度一样）
	 **/
	private $description;
	
	/** 
	 * 默认600秒
当之前的伸缩活动的cooldown的时间过长或者伸缩组已被停止时，导致错过了定时任务，在LaunchExpirationTime内，系统会自动重试定时触发，否则放弃本次定时触发
取值范围：[0, 86400]<br /> 支持最大值为：86400<br /> 支持最小值为：0
	 **/
	private $launchExpirationTime;
	
	/** 
	 * 触发的时间点，按照ISO8601标准表示，并需要使用UTC时间。格式为：
YYYY-MM-DDThh:mmZ
如果指定了RecurrenceType，则此时间点默认为重复的起始时间点RecurrenceStartTime
	 **/
	private $launchTime;
	
	/** 
	 * Recurrence时间范围的结束值，按照ISO8601标准表示，并需要使用UTC时间。格式为：
YYYY-MM-DDThh:mmZ

指定了RecurrenceType，则必须指定RecurrenceEndTime
	 **/
	private $recurrenceEndTime;
	
	/** 
	 * Hourly，Daily，Weekly，Monthly
	 **/
	private $recurrenceType;
	
	/** 
	 * 不同循环类型有不同的取值类型
	 **/
	private $recurrenceValue;
	
	/** 
	 * 伸缩规则的Ari
	 **/
	private $scheduledAction;
	
	/** 
	 * 定时任务的ID
	 **/
	private $scheduledTaskId;
	
	/** 
	 * 定时任务的名称，同一region，同一用户账号下唯一。
如果没有指定该参数，默认值为实例的ScheduledScalingTaskId
英文或中文字符为2-40 个字符（中英文长度一样），以大小字母或中文开头，可包含数字，"_"或"-"。
	 **/
	private $scheduledTaskName;
	
	/** 
	 * True为启动任务
	 **/
	private $taskEnabled;
	
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

	public function setLaunchExpirationTime($launchExpirationTime)
	{
		$this->launchExpirationTime = $launchExpirationTime;
		$this->apiParas["LaunchExpirationTime"] = $launchExpirationTime;
	}

	public function getLaunchExpirationTime()
	{
		return $this->launchExpirationTime;
	}

	public function setLaunchTime($launchTime)
	{
		$this->launchTime = $launchTime;
		$this->apiParas["LaunchTime"] = $launchTime;
	}

	public function getLaunchTime()
	{
		return $this->launchTime;
	}

	public function setRecurrenceEndTime($recurrenceEndTime)
	{
		$this->recurrenceEndTime = $recurrenceEndTime;
		$this->apiParas["RecurrenceEndTime"] = $recurrenceEndTime;
	}

	public function getRecurrenceEndTime()
	{
		return $this->recurrenceEndTime;
	}

	public function setRecurrenceType($recurrenceType)
	{
		$this->recurrenceType = $recurrenceType;
		$this->apiParas["RecurrenceType"] = $recurrenceType;
	}

	public function getRecurrenceType()
	{
		return $this->recurrenceType;
	}

	public function setRecurrenceValue($recurrenceValue)
	{
		$this->recurrenceValue = $recurrenceValue;
		$this->apiParas["RecurrenceValue"] = $recurrenceValue;
	}

	public function getRecurrenceValue()
	{
		return $this->recurrenceValue;
	}

	public function setScheduledAction($scheduledAction)
	{
		$this->scheduledAction = $scheduledAction;
		$this->apiParas["ScheduledAction"] = $scheduledAction;
	}

	public function getScheduledAction()
	{
		return $this->scheduledAction;
	}

	public function setScheduledTaskId($scheduledTaskId)
	{
		$this->scheduledTaskId = $scheduledTaskId;
		$this->apiParas["ScheduledTaskId"] = $scheduledTaskId;
	}

	public function getScheduledTaskId()
	{
		return $this->scheduledTaskId;
	}

	public function setScheduledTaskName($scheduledTaskName)
	{
		$this->scheduledTaskName = $scheduledTaskName;
		$this->apiParas["ScheduledTaskName"] = $scheduledTaskName;
	}

	public function getScheduledTaskName()
	{
		return $this->scheduledTaskName;
	}

	public function setTaskEnabled($taskEnabled)
	{
		$this->taskEnabled = $taskEnabled;
		$this->apiParas["TaskEnabled"] = $taskEnabled;
	}

	public function getTaskEnabled()
	{
		return $this->taskEnabled;
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
		return "ess.aliyuncs.com.ModifyScheduledTask.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->launchExpirationTime,86400,"launchExpirationTime");
		RequestCheckUtil::checkMinValue($this->launchExpirationTime,0,"launchExpirationTime");
		RequestCheckUtil::checkNotNull($this->scheduledTaskId,"scheduledTaskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
