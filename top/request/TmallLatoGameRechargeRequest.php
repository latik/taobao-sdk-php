<?php
/**
 * TOP API: tmall.lato.game.recharge request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class TmallLatoGameRechargeRequest
{
	/** 
	 * 交易号
	 **/
	private $bizNo;
	
	/** 
	 * 充值积分数值
	 **/
	private $point;
	
	/** 
	 * 购买内容
	 **/
	private $target;
	
	/** 
	 * 用户id
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setBizNo($bizNo)
	{
		$this->bizNo = $bizNo;
		$this->apiParas["biz_no"] = $bizNo;
	}

	public function getBizNo()
	{
		return $this->bizNo;
	}

	public function setPoint($point)
	{
		$this->point = $point;
		$this->apiParas["point"] = $point;
	}

	public function getPoint()
	{
		return $this->point;
	}

	public function setTarget($target)
	{
		$this->target = $target;
		$this->apiParas["target"] = $target;
	}

	public function getTarget()
	{
		return $this->target;
	}

	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "tmall.lato.game.recharge";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizNo,"bizNo");
		RequestCheckUtil::checkNotNull($this->point,"point");
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
