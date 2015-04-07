<?php
/**
 * TOP API: tmall.latour.pepsi.awards.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class TmallLatourPepsiAwardsGetRequest
{
	/** 
	 * 活动ID 由互动平台生成
	 **/
	private $lotteryId;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setLotteryId($lotteryId)
	{
		$this->lotteryId = $lotteryId;
		$this->apiParas["lottery_id"] = $lotteryId;
	}

	public function getLotteryId()
	{
		return $this->lotteryId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "tmall.latour.pepsi.awards.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lotteryId,"lotteryId");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
