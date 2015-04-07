<?php
/**
 * TOP API: alibaba.interact.activity.register request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class AlibabaInteractActivityRegisterRequest
{
	/** 
	 * 活动ID
	 **/
	private $bizId;
	
	/** 
	 * 活动描述文字
	 **/
	private $description;
	
	/** 
	 * 活动结束时间
	 **/
	private $endTime;
	
	/** 
	 * 是否有有效时间，若为真开始时间和结束时间必填，默认为真
	 **/
	private $hasValidTime;
	
	/** 
	 * 活动名称
	 **/
	private $name;
	
	/** 
	 * 活动封面图片（非必填）
	 **/
	private $picture;
	
	/** 
	 * 活动开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
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

	public function setHasValidTime($hasValidTime)
	{
		$this->hasValidTime = $hasValidTime;
		$this->apiParas["has_valid_time"] = $hasValidTime;
	}

	public function getHasValidTime()
	{
		return $this->hasValidTime;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPicture($picture)
	{
		$this->picture = $picture;
		$this->apiParas["picture"] = $picture;
	}

	public function getPicture()
	{
		return $this->picture;
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
		return "alibaba.interact.activity.register";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->hasValidTime,"hasValidTime");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
