<?php
/**
 * TOP API: taobao.coin.buyer.sum request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class CoinBuyerSumRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.coin.buyer.sum";
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
