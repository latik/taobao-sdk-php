<?php
/**
 * TOP API: taobao.baike.druginfo.query request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class BaikeDruginfoQueryRequest
{
	/** 
	 * 批准文号字段
	 **/
	private $item;
	
	/** 
	 * 用户id，为百科授权的userId
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setItem($item)
	{
		$this->item = $item;
		$this->apiParas["item"] = $item;
	}

	public function getItem()
	{
		return $this->item;
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
		return "taobao.baike.druginfo.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->item,"item");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
