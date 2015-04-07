<?php
/**
 * TOP API: taobao.tbk.creative.audit request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class TbkCreativeAuditRequest
{
	/** 
	 * 审核时间
	 **/
	private $auditTime;
	
	/** 
	 * 审核说明
	 **/
	private $comment;
	
	/** 
	 * 创意Id
	 **/
	private $creativeId;
	
	/** 
	 * 结果类型，1：审核成功，2：审核未通过，3.视频未成功下载
	 **/
	private $result;
	
	/** 
	 * 展示页面
	 **/
	private $successUrl;
	
	private $apiParas = array();
	
	public function setAuditTime($auditTime)
	{
		$this->auditTime = $auditTime;
		$this->apiParas["audit_time"] = $auditTime;
	}

	public function getAuditTime()
	{
		return $this->auditTime;
	}

	public function setComment($comment)
	{
		$this->comment = $comment;
		$this->apiParas["comment"] = $comment;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function setCreativeId($creativeId)
	{
		$this->creativeId = $creativeId;
		$this->apiParas["creative_id"] = $creativeId;
	}

	public function getCreativeId()
	{
		return $this->creativeId;
	}

	public function setResult($result)
	{
		$this->result = $result;
		$this->apiParas["result"] = $result;
	}

	public function getResult()
	{
		return $this->result;
	}

	public function setSuccessUrl($successUrl)
	{
		$this->successUrl = $successUrl;
		$this->apiParas["success_url"] = $successUrl;
	}

	public function getSuccessUrl()
	{
		return $this->successUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.creative.audit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->creativeId,"creativeId");
		RequestCheckUtil::checkNotNull($this->result,"result");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
