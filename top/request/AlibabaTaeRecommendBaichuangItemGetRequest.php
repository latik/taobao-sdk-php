<?php
/**
 * TOP API: alibaba.tae.recommend.baichuang.item.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class AlibabaTaeRecommendBaichuangItemGetRequest
{
	/** 
	 * 用户混淆id
	 **/
	private $openUid;
	
	private $apiParas = array();
	
	public function setOpenUid($openUid)
	{
		$this->openUid = $openUid;
		$this->apiParas["open_uid"] = $openUid;
	}

	public function getOpenUid()
	{
		return $this->openUid;
	}

	public function getApiMethodName()
	{
		return "alibaba.tae.recommend.baichuang.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openUid,"openUid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
