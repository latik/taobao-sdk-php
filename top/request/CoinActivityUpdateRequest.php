<?php
/**
 * TOP API: taobao.coin.activity.update request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinActivityUpdateRequest
{
	/** 
	 * 活动标题
	 **/
	private $activityTitle;
	
	/** 
	 * 活动结束时间
	 **/
	private $endTime;
	
	/** 
	 * 外部扩展属性
	 **/
	private $feature;
	
	/** 
	 * 活动开始时间
	 **/
	private $startTime;
	
	/** 
	 * 淘金币平台活动ID
	 **/
	private $tbActivityId;
	
	private $apiParas = array();
	
	public function setActivityTitle($activityTitle)
	{
		$this->activityTitle = $activityTitle;
		$this->apiParas["activity_title"] = $activityTitle;
	}

	public function getActivityTitle()
	{
		return $this->activityTitle;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFeature($feature)
	{
		$this->feature = $feature;
		$this->apiParas["feature"] = $feature;
	}

	public function getFeature()
	{
		return $this->feature;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTbActivityId($tbActivityId)
	{
		$this->tbActivityId = $tbActivityId;
		$this->apiParas["tb_activity_id"] = $tbActivityId;
	}

	public function getTbActivityId()
	{
		return $this->tbActivityId;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.activity.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tbActivityId,"tbActivityId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
