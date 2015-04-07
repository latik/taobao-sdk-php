<?php
/**
 * TOP API: taobao.coin.activity.budget.add request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinActivityBudgetAddRequest
{
	/** 
	 * 变更的预算金币数
	 **/
	private $amount;
	
	/** 
	 * 淘金币活动ID
	 **/
	private $tbActivityId;
	
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
		return "taobao.coin.activity.budget.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->tbActivityId,"tbActivityId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
