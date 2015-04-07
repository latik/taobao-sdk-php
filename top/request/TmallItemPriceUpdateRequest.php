<?php
/**
 * TOP API: tmall.item.price.update request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class TmallItemPriceUpdateRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.item.price.update";
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
