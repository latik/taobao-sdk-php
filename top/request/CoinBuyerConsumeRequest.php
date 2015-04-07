<?php
/**
 * TOP API: taobao.coin.buyer.consume request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinBuyerConsumeRequest
{
	/** 
	 * 本次变更金币数
	 **/
	private $amount;
	
	/** 
	 * 备注
	 **/
	private $comments;
	
	/** 
	 * 应用扩展属性
	 **/
	private $feature;
	
	/** 
	 * 外键ID
	 **/
	private $outId;
	
	/** 
	 * 外键父ID
	 **/
	private $outParentId;
	
	/** 
	 * 令牌
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setComments($comments)
	{
		$this->comments = $comments;
		$this->apiParas["comments"] = $comments;
	}

	public function getComments()
	{
		return $this->comments;
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

	public function setOutId($outId)
	{
		$this->outId = $outId;
		$this->apiParas["out_id"] = $outId;
	}

	public function getOutId()
	{
		return $this->outId;
	}

	public function setOutParentId($outParentId)
	{
		$this->outParentId = $outParentId;
		$this->apiParas["out_parent_id"] = $outParentId;
	}

	public function getOutParentId()
	{
		return $this->outParentId;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.coin.buyer.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
