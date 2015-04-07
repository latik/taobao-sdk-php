<?php
/**
 * TOP API: ess.aliyuncs.com.DescribeScheduledTasks.2014-08-28 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ess20140828DescribeScheduledTasksRequest
{
	/** 
	 * PageNumber
	 **/
	private $pageNumber;
	
	/** 
	 * PageSize<br /> 支持最大值为：50
	 **/
	private $pageSize;
	
	/** 
	 * 定时任务所属的region
	 **/
	private $regionId;
	
	/** 
	 * 伸缩规则的Ari, 可以输入多个，最多可以支持20个。返回查询结果时略去失效的ScheduledAction，并且不报错。
	 **/
	private $scheduledAction1;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction10;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction11;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction12;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction13;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction14;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction15;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction16;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction17;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction18;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction19;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction2;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction20;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction3;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction4;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction5;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction6;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction7;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction8;
	
	/** 
	 * ScheduledAction.1
	 **/
	private $scheduledAction9;
	
	/** 
	 * 定时任务ID，可以输入多个，最多可以支持20个。返回查询结果时略去失效的ScheduledTaskId，并且不报错。
	 **/
	private $scheduledTaskId1;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId10;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId11;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId12;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId13;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId14;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId15;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId16;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId17;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId18;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId19;
	
	/** 
	 * 定时任务ID，可以输入多个，最多可以支持20个。返回查询结果时略去失效的ScheduledTaskId，并且不报错。
	 **/
	private $scheduledTaskId2;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId20;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId3;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId4;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId5;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId6;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId7;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId8;
	
	/** 
	 * ScheduledTaskId.
	 **/
	private $scheduledTaskId9;
	
	/** 
	 * 定时任务的name，可以输入多个，最多可以支持20个。返回查询结果时略去失效的ScheduledTaskName，并且不报错。
	 **/
	private $scheduledTaskName1;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName10;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName11;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName12;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName13;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName14;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName15;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName16;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName17;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName18;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName19;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName2;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName20;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName3;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName4;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName5;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName6;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName7;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName8;
	
	/** 
	 * ScheduledTaskName.1
	 **/
	private $scheduledTaskName9;
	
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

	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		$this->apiParas["RegionId"] = $regionId;
	}

	public function getRegionId()
	{
		return $this->regionId;
	}

	public function setScheduledAction1($scheduledAction1)
	{
		$this->scheduledAction1 = $scheduledAction1;
		$this->apiParas["ScheduledAction.1"] = $scheduledAction1;
	}

	public function getScheduledAction1()
	{
		return $this->scheduledAction1;
	}

	public function setScheduledAction10($scheduledAction10)
	{
		$this->scheduledAction10 = $scheduledAction10;
		$this->apiParas["ScheduledAction.10"] = $scheduledAction10;
	}

	public function getScheduledAction10()
	{
		return $this->scheduledAction10;
	}

	public function setScheduledAction11($scheduledAction11)
	{
		$this->scheduledAction11 = $scheduledAction11;
		$this->apiParas["ScheduledAction.11"] = $scheduledAction11;
	}

	public function getScheduledAction11()
	{
		return $this->scheduledAction11;
	}

	public function setScheduledAction12($scheduledAction12)
	{
		$this->scheduledAction12 = $scheduledAction12;
		$this->apiParas["ScheduledAction.12"] = $scheduledAction12;
	}

	public function getScheduledAction12()
	{
		return $this->scheduledAction12;
	}

	public function setScheduledAction13($scheduledAction13)
	{
		$this->scheduledAction13 = $scheduledAction13;
		$this->apiParas["ScheduledAction.13"] = $scheduledAction13;
	}

	public function getScheduledAction13()
	{
		return $this->scheduledAction13;
	}

	public function setScheduledAction14($scheduledAction14)
	{
		$this->scheduledAction14 = $scheduledAction14;
		$this->apiParas["ScheduledAction.14"] = $scheduledAction14;
	}

	public function getScheduledAction14()
	{
		return $this->scheduledAction14;
	}

	public function setScheduledAction15($scheduledAction15)
	{
		$this->scheduledAction15 = $scheduledAction15;
		$this->apiParas["ScheduledAction.15"] = $scheduledAction15;
	}

	public function getScheduledAction15()
	{
		return $this->scheduledAction15;
	}

	public function setScheduledAction16($scheduledAction16)
	{
		$this->scheduledAction16 = $scheduledAction16;
		$this->apiParas["ScheduledAction.16"] = $scheduledAction16;
	}

	public function getScheduledAction16()
	{
		return $this->scheduledAction16;
	}

	public function setScheduledAction17($scheduledAction17)
	{
		$this->scheduledAction17 = $scheduledAction17;
		$this->apiParas["ScheduledAction.17"] = $scheduledAction17;
	}

	public function getScheduledAction17()
	{
		return $this->scheduledAction17;
	}

	public function setScheduledAction18($scheduledAction18)
	{
		$this->scheduledAction18 = $scheduledAction18;
		$this->apiParas["ScheduledAction.18"] = $scheduledAction18;
	}

	public function getScheduledAction18()
	{
		return $this->scheduledAction18;
	}

	public function setScheduledAction19($scheduledAction19)
	{
		$this->scheduledAction19 = $scheduledAction19;
		$this->apiParas["ScheduledAction.19"] = $scheduledAction19;
	}

	public function getScheduledAction19()
	{
		return $this->scheduledAction19;
	}

	public function setScheduledAction2($scheduledAction2)
	{
		$this->scheduledAction2 = $scheduledAction2;
		$this->apiParas["ScheduledAction.2"] = $scheduledAction2;
	}

	public function getScheduledAction2()
	{
		return $this->scheduledAction2;
	}

	public function setScheduledAction20($scheduledAction20)
	{
		$this->scheduledAction20 = $scheduledAction20;
		$this->apiParas["ScheduledAction.20"] = $scheduledAction20;
	}

	public function getScheduledAction20()
	{
		return $this->scheduledAction20;
	}

	public function setScheduledAction3($scheduledAction3)
	{
		$this->scheduledAction3 = $scheduledAction3;
		$this->apiParas["ScheduledAction.3"] = $scheduledAction3;
	}

	public function getScheduledAction3()
	{
		return $this->scheduledAction3;
	}

	public function setScheduledAction4($scheduledAction4)
	{
		$this->scheduledAction4 = $scheduledAction4;
		$this->apiParas["ScheduledAction.4"] = $scheduledAction4;
	}

	public function getScheduledAction4()
	{
		return $this->scheduledAction4;
	}

	public function setScheduledAction5($scheduledAction5)
	{
		$this->scheduledAction5 = $scheduledAction5;
		$this->apiParas["ScheduledAction.5"] = $scheduledAction5;
	}

	public function getScheduledAction5()
	{
		return $this->scheduledAction5;
	}

	public function setScheduledAction6($scheduledAction6)
	{
		$this->scheduledAction6 = $scheduledAction6;
		$this->apiParas["ScheduledAction.6"] = $scheduledAction6;
	}

	public function getScheduledAction6()
	{
		return $this->scheduledAction6;
	}

	public function setScheduledAction7($scheduledAction7)
	{
		$this->scheduledAction7 = $scheduledAction7;
		$this->apiParas["ScheduledAction.7"] = $scheduledAction7;
	}

	public function getScheduledAction7()
	{
		return $this->scheduledAction7;
	}

	public function setScheduledAction8($scheduledAction8)
	{
		$this->scheduledAction8 = $scheduledAction8;
		$this->apiParas["ScheduledAction.8"] = $scheduledAction8;
	}

	public function getScheduledAction8()
	{
		return $this->scheduledAction8;
	}

	public function setScheduledAction9($scheduledAction9)
	{
		$this->scheduledAction9 = $scheduledAction9;
		$this->apiParas["ScheduledAction.9"] = $scheduledAction9;
	}

	public function getScheduledAction9()
	{
		return $this->scheduledAction9;
	}

	public function setScheduledTaskId1($scheduledTaskId1)
	{
		$this->scheduledTaskId1 = $scheduledTaskId1;
		$this->apiParas["ScheduledTaskId.1"] = $scheduledTaskId1;
	}

	public function getScheduledTaskId1()
	{
		return $this->scheduledTaskId1;
	}

	public function setScheduledTaskId10($scheduledTaskId10)
	{
		$this->scheduledTaskId10 = $scheduledTaskId10;
		$this->apiParas["ScheduledTaskId.10"] = $scheduledTaskId10;
	}

	public function getScheduledTaskId10()
	{
		return $this->scheduledTaskId10;
	}

	public function setScheduledTaskId11($scheduledTaskId11)
	{
		$this->scheduledTaskId11 = $scheduledTaskId11;
		$this->apiParas["ScheduledTaskId.11"] = $scheduledTaskId11;
	}

	public function getScheduledTaskId11()
	{
		return $this->scheduledTaskId11;
	}

	public function setScheduledTaskId12($scheduledTaskId12)
	{
		$this->scheduledTaskId12 = $scheduledTaskId12;
		$this->apiParas["ScheduledTaskId.12"] = $scheduledTaskId12;
	}

	public function getScheduledTaskId12()
	{
		return $this->scheduledTaskId12;
	}

	public function setScheduledTaskId13($scheduledTaskId13)
	{
		$this->scheduledTaskId13 = $scheduledTaskId13;
		$this->apiParas["ScheduledTaskId.13"] = $scheduledTaskId13;
	}

	public function getScheduledTaskId13()
	{
		return $this->scheduledTaskId13;
	}

	public function setScheduledTaskId14($scheduledTaskId14)
	{
		$this->scheduledTaskId14 = $scheduledTaskId14;
		$this->apiParas["ScheduledTaskId.14"] = $scheduledTaskId14;
	}

	public function getScheduledTaskId14()
	{
		return $this->scheduledTaskId14;
	}

	public function setScheduledTaskId15($scheduledTaskId15)
	{
		$this->scheduledTaskId15 = $scheduledTaskId15;
		$this->apiParas["ScheduledTaskId.15"] = $scheduledTaskId15;
	}

	public function getScheduledTaskId15()
	{
		return $this->scheduledTaskId15;
	}

	public function setScheduledTaskId16($scheduledTaskId16)
	{
		$this->scheduledTaskId16 = $scheduledTaskId16;
		$this->apiParas["ScheduledTaskId.16"] = $scheduledTaskId16;
	}

	public function getScheduledTaskId16()
	{
		return $this->scheduledTaskId16;
	}

	public function setScheduledTaskId17($scheduledTaskId17)
	{
		$this->scheduledTaskId17 = $scheduledTaskId17;
		$this->apiParas["ScheduledTaskId.17"] = $scheduledTaskId17;
	}

	public function getScheduledTaskId17()
	{
		return $this->scheduledTaskId17;
	}

	public function setScheduledTaskId18($scheduledTaskId18)
	{
		$this->scheduledTaskId18 = $scheduledTaskId18;
		$this->apiParas["ScheduledTaskId.18"] = $scheduledTaskId18;
	}

	public function getScheduledTaskId18()
	{
		return $this->scheduledTaskId18;
	}

	public function setScheduledTaskId19($scheduledTaskId19)
	{
		$this->scheduledTaskId19 = $scheduledTaskId19;
		$this->apiParas["ScheduledTaskId.19"] = $scheduledTaskId19;
	}

	public function getScheduledTaskId19()
	{
		return $this->scheduledTaskId19;
	}

	public function setScheduledTaskId2($scheduledTaskId2)
	{
		$this->scheduledTaskId2 = $scheduledTaskId2;
		$this->apiParas["ScheduledTaskId.2"] = $scheduledTaskId2;
	}

	public function getScheduledTaskId2()
	{
		return $this->scheduledTaskId2;
	}

	public function setScheduledTaskId20($scheduledTaskId20)
	{
		$this->scheduledTaskId20 = $scheduledTaskId20;
		$this->apiParas["ScheduledTaskId.20"] = $scheduledTaskId20;
	}

	public function getScheduledTaskId20()
	{
		return $this->scheduledTaskId20;
	}

	public function setScheduledTaskId3($scheduledTaskId3)
	{
		$this->scheduledTaskId3 = $scheduledTaskId3;
		$this->apiParas["ScheduledTaskId.3"] = $scheduledTaskId3;
	}

	public function getScheduledTaskId3()
	{
		return $this->scheduledTaskId3;
	}

	public function setScheduledTaskId4($scheduledTaskId4)
	{
		$this->scheduledTaskId4 = $scheduledTaskId4;
		$this->apiParas["ScheduledTaskId.4"] = $scheduledTaskId4;
	}

	public function getScheduledTaskId4()
	{
		return $this->scheduledTaskId4;
	}

	public function setScheduledTaskId5($scheduledTaskId5)
	{
		$this->scheduledTaskId5 = $scheduledTaskId5;
		$this->apiParas["ScheduledTaskId.5"] = $scheduledTaskId5;
	}

	public function getScheduledTaskId5()
	{
		return $this->scheduledTaskId5;
	}

	public function setScheduledTaskId6($scheduledTaskId6)
	{
		$this->scheduledTaskId6 = $scheduledTaskId6;
		$this->apiParas["ScheduledTaskId.6"] = $scheduledTaskId6;
	}

	public function getScheduledTaskId6()
	{
		return $this->scheduledTaskId6;
	}

	public function setScheduledTaskId7($scheduledTaskId7)
	{
		$this->scheduledTaskId7 = $scheduledTaskId7;
		$this->apiParas["ScheduledTaskId.7"] = $scheduledTaskId7;
	}

	public function getScheduledTaskId7()
	{
		return $this->scheduledTaskId7;
	}

	public function setScheduledTaskId8($scheduledTaskId8)
	{
		$this->scheduledTaskId8 = $scheduledTaskId8;
		$this->apiParas["ScheduledTaskId.8"] = $scheduledTaskId8;
	}

	public function getScheduledTaskId8()
	{
		return $this->scheduledTaskId8;
	}

	public function setScheduledTaskId9($scheduledTaskId9)
	{
		$this->scheduledTaskId9 = $scheduledTaskId9;
		$this->apiParas["ScheduledTaskId.9"] = $scheduledTaskId9;
	}

	public function getScheduledTaskId9()
	{
		return $this->scheduledTaskId9;
	}

	public function setScheduledTaskName1($scheduledTaskName1)
	{
		$this->scheduledTaskName1 = $scheduledTaskName1;
		$this->apiParas["ScheduledTaskName.1"] = $scheduledTaskName1;
	}

	public function getScheduledTaskName1()
	{
		return $this->scheduledTaskName1;
	}

	public function setScheduledTaskName10($scheduledTaskName10)
	{
		$this->scheduledTaskName10 = $scheduledTaskName10;
		$this->apiParas["ScheduledTaskName.10"] = $scheduledTaskName10;
	}

	public function getScheduledTaskName10()
	{
		return $this->scheduledTaskName10;
	}

	public function setScheduledTaskName11($scheduledTaskName11)
	{
		$this->scheduledTaskName11 = $scheduledTaskName11;
		$this->apiParas["ScheduledTaskName.11"] = $scheduledTaskName11;
	}

	public function getScheduledTaskName11()
	{
		return $this->scheduledTaskName11;
	}

	public function setScheduledTaskName12($scheduledTaskName12)
	{
		$this->scheduledTaskName12 = $scheduledTaskName12;
		$this->apiParas["ScheduledTaskName.12"] = $scheduledTaskName12;
	}

	public function getScheduledTaskName12()
	{
		return $this->scheduledTaskName12;
	}

	public function setScheduledTaskName13($scheduledTaskName13)
	{
		$this->scheduledTaskName13 = $scheduledTaskName13;
		$this->apiParas["ScheduledTaskName.13"] = $scheduledTaskName13;
	}

	public function getScheduledTaskName13()
	{
		return $this->scheduledTaskName13;
	}

	public function setScheduledTaskName14($scheduledTaskName14)
	{
		$this->scheduledTaskName14 = $scheduledTaskName14;
		$this->apiParas["ScheduledTaskName.14"] = $scheduledTaskName14;
	}

	public function getScheduledTaskName14()
	{
		return $this->scheduledTaskName14;
	}

	public function setScheduledTaskName15($scheduledTaskName15)
	{
		$this->scheduledTaskName15 = $scheduledTaskName15;
		$this->apiParas["ScheduledTaskName.15"] = $scheduledTaskName15;
	}

	public function getScheduledTaskName15()
	{
		return $this->scheduledTaskName15;
	}

	public function setScheduledTaskName16($scheduledTaskName16)
	{
		$this->scheduledTaskName16 = $scheduledTaskName16;
		$this->apiParas["ScheduledTaskName.16"] = $scheduledTaskName16;
	}

	public function getScheduledTaskName16()
	{
		return $this->scheduledTaskName16;
	}

	public function setScheduledTaskName17($scheduledTaskName17)
	{
		$this->scheduledTaskName17 = $scheduledTaskName17;
		$this->apiParas["ScheduledTaskName.17"] = $scheduledTaskName17;
	}

	public function getScheduledTaskName17()
	{
		return $this->scheduledTaskName17;
	}

	public function setScheduledTaskName18($scheduledTaskName18)
	{
		$this->scheduledTaskName18 = $scheduledTaskName18;
		$this->apiParas["ScheduledTaskName.18"] = $scheduledTaskName18;
	}

	public function getScheduledTaskName18()
	{
		return $this->scheduledTaskName18;
	}

	public function setScheduledTaskName19($scheduledTaskName19)
	{
		$this->scheduledTaskName19 = $scheduledTaskName19;
		$this->apiParas["ScheduledTaskName.19"] = $scheduledTaskName19;
	}

	public function getScheduledTaskName19()
	{
		return $this->scheduledTaskName19;
	}

	public function setScheduledTaskName2($scheduledTaskName2)
	{
		$this->scheduledTaskName2 = $scheduledTaskName2;
		$this->apiParas["ScheduledTaskName.2"] = $scheduledTaskName2;
	}

	public function getScheduledTaskName2()
	{
		return $this->scheduledTaskName2;
	}

	public function setScheduledTaskName20($scheduledTaskName20)
	{
		$this->scheduledTaskName20 = $scheduledTaskName20;
		$this->apiParas["ScheduledTaskName.20"] = $scheduledTaskName20;
	}

	public function getScheduledTaskName20()
	{
		return $this->scheduledTaskName20;
	}

	public function setScheduledTaskName3($scheduledTaskName3)
	{
		$this->scheduledTaskName3 = $scheduledTaskName3;
		$this->apiParas["ScheduledTaskName.3"] = $scheduledTaskName3;
	}

	public function getScheduledTaskName3()
	{
		return $this->scheduledTaskName3;
	}

	public function setScheduledTaskName4($scheduledTaskName4)
	{
		$this->scheduledTaskName4 = $scheduledTaskName4;
		$this->apiParas["ScheduledTaskName.4"] = $scheduledTaskName4;
	}

	public function getScheduledTaskName4()
	{
		return $this->scheduledTaskName4;
	}

	public function setScheduledTaskName5($scheduledTaskName5)
	{
		$this->scheduledTaskName5 = $scheduledTaskName5;
		$this->apiParas["ScheduledTaskName.5"] = $scheduledTaskName5;
	}

	public function getScheduledTaskName5()
	{
		return $this->scheduledTaskName5;
	}

	public function setScheduledTaskName6($scheduledTaskName6)
	{
		$this->scheduledTaskName6 = $scheduledTaskName6;
		$this->apiParas["ScheduledTaskName.6"] = $scheduledTaskName6;
	}

	public function getScheduledTaskName6()
	{
		return $this->scheduledTaskName6;
	}

	public function setScheduledTaskName7($scheduledTaskName7)
	{
		$this->scheduledTaskName7 = $scheduledTaskName7;
		$this->apiParas["ScheduledTaskName.7"] = $scheduledTaskName7;
	}

	public function getScheduledTaskName7()
	{
		return $this->scheduledTaskName7;
	}

	public function setScheduledTaskName8($scheduledTaskName8)
	{
		$this->scheduledTaskName8 = $scheduledTaskName8;
		$this->apiParas["ScheduledTaskName.8"] = $scheduledTaskName8;
	}

	public function getScheduledTaskName8()
	{
		return $this->scheduledTaskName8;
	}

	public function setScheduledTaskName9($scheduledTaskName9)
	{
		$this->scheduledTaskName9 = $scheduledTaskName9;
		$this->apiParas["ScheduledTaskName.9"] = $scheduledTaskName9;
	}

	public function getScheduledTaskName9()
	{
		return $this->scheduledTaskName9;
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
		return "ess.aliyuncs.com.DescribeScheduledTasks.2014-08-28";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
