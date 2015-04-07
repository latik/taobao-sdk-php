<?php
/**
 * TOP API: taobao.tae.item.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class TaeItemDetailGetRequest
{
	/** 
	 * 用户所在位置ip
	 **/
	private $buyerIp;
	
	/** 
	 * 区块信息
	 **/
	private $fields;
	
	/** 
	 * 商品open_iid
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setBuyerIp($buyerIp)
	{
		$this->buyerIp = $buyerIp;
		$this->apiParas["buyer_ip"] = $buyerIp;
	}

	public function getBuyerIp()
	{
		return $this->buyerIp;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.item.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
