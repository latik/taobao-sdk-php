<?php
/**
 * TOP API: taobao.tae.delivery.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class TaeDeliveryGetRequest
{
	/** 
	 * 外部记录主键
	 **/
	private $outIds;
	
	private $apiParas = array();
	
	public function setOutIds($outIds)
	{
		$this->outIds = $outIds;
		$this->apiParas["out_ids"] = $outIds;
	}

	public function getOutIds()
	{
		return $this->outIds;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.delivery.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outIds,"outIds");
		RequestCheckUtil::checkMaxListSize($this->outIds,20,"outIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
