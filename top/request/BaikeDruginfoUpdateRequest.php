<?php
/**
 * TOP API: taobao.baike.druginfo.update request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class BaikeDruginfoUpdateRequest
{
	/** 
	 * map的json格式用户传入更新数据
	 **/
	private $jsondata;
	
	/** 
	 * 用户id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setJsondata($jsondata)
	{
		$this->jsondata = $jsondata;
		$this->apiParas["jsondata"] = $jsondata;
	}

	public function getJsondata()
	{
		return $this->jsondata;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.baike.druginfo.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->jsondata,"jsondata");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
