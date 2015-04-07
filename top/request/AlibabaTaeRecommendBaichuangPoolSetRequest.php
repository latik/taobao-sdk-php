<?php
/**
 * TOP API: alibaba.tae.recommend.baichuang.pool.set request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class AlibabaTaeRecommendBaichuangPoolSetRequest
{
	/** 
	 * 商品池id
	 **/
	private $pool;
	
	private $apiParas = array();
	
	public function setPool($pool)
	{
		$this->pool = $pool;
		$this->apiParas["pool"] = $pool;
	}

	public function getPool()
	{
		return $this->pool;
	}

	public function getApiMethodName()
	{
		return "alibaba.tae.recommend.baichuang.pool.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pool,"pool");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
