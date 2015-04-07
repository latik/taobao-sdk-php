<?php
/**
 * TOP API: taobao.weitao.feed.remained request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class WeitaoFeedRemainedRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.weitao.feed.remained";
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
