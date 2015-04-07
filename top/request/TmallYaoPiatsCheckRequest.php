<?php
/**
 * TOP API: tmall.yao.piats.check request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class TmallYaoPiatsCheckRequest
{
	/** 
	 * 子订单号
	 **/
	private $bizOrderId;
	
	/** 
	 * 药监码(多个用逗号分隔)
	 **/
	private $piatsCodes;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setPiatsCodes($piatsCodes)
	{
		$this->piatsCodes = $piatsCodes;
		$this->apiParas["piats_codes"] = $piatsCodes;
	}

	public function getPiatsCodes()
	{
		return $this->piatsCodes;
	}

	public function getApiMethodName()
	{
		return "tmall.yao.piats.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->piatsCodes,"piatsCodes");
		RequestCheckUtil::checkMaxListSize($this->piatsCodes,10,"piatsCodes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
