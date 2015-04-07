<?php
/**
 * TOP API: taobao.weitao.cloudtags.group.getbyid request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class WeitaoCloudtagsGroupGetbyidRequest
{
	/** 
	 * 分组id
	 **/
	private $groupId;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.cloudtags.group.getbyid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
