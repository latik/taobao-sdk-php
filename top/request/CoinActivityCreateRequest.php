<?php
/**
 * TOP API: taobao.coin.activity.create request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinActivityCreateRequest
{
	/** 
	 * 活动标题
	 **/
	private $activityTitle;
	
	/** 
	 * 活动参与入口URL(需要通过淘宝oauth2.0认证)
	 **/
	private $activityUrl;
	
	/** 
	 * 用于活动消耗的淘金币预算额，1000起步
	 **/
	private $budgetAmount;
	
	/** 
	 * 活动结束时间
	 **/
	private $endTime;
	
	/** 
	 * 外部扩展参数
	 **/
	private $feature;
	
	/** 
	 * 外部活动ID，即App中对应活动ID
	 **/
	private $outActivityId;
	
	/** 
	 * 活动开始时间
	 **/
	private $startTime;
	
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

	public function setActivityUrl($activityUrl)
	{
		$this->activityUrl = $activityUrl;
		$this->apiParas["activity_url"] = $activityUrl;
	}

	public function getActivityUrl()
	{
		return $this->activityUrl;
	}

	public function setBudgetAmount($budgetAmount)
	{
		$this->budgetAmount = $budgetAmount;
		$this->apiParas["budget_amount"] = $budgetAmount;
	}

	public function getBudgetAmount()
	{
		return $this->budgetAmount;
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

	public function setOutActivityId($outActivityId)
	{
		$this->outActivityId = $outActivityId;
		$this->apiParas["out_activity_id"] = $outActivityId;
	}

	public function getOutActivityId()
	{
		return $this->outActivityId;
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

	public function getApiMethodName()
	{
		return "taobao.coin.activity.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityTitle,"activityTitle");
		RequestCheckUtil::checkNotNull($this->budgetAmount,"budgetAmount");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->outActivityId,"outActivityId");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
