<?php
/**
 * TOP API: taobao.jds.trade.traces.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class JdsTradeTracesGetRequest
{
	/** 
	 * 淘宝的订单tid
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.jds.trade.traces.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
