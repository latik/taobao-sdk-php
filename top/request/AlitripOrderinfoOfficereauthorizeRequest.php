<?php
/**
 * TOP API: taobao.alitrip.orderinfo.officereauthorize request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class AlitripOrderinfoOfficereauthorizeRequest
{
	/** 
	 * 新的授权office号
	 **/
	private $newOfficeId;
	
	/** 
	 * 旧的office号
	 **/
	private $officeId;
	
	/** 
	 * 订单中的pnr
	 **/
	private $pnr;
	
	/** 
	 * 淘宝订单id
	 **/
	private $tcOrderId;
	
	private $apiParas = array();
	
	public function setNewOfficeId($newOfficeId)
	{
		$this->newOfficeId = $newOfficeId;
		$this->apiParas["new_office_id"] = $newOfficeId;
	}

	public function getNewOfficeId()
	{
		return $this->newOfficeId;
	}

	public function setOfficeId($officeId)
	{
		$this->officeId = $officeId;
		$this->apiParas["office_id"] = $officeId;
	}

	public function getOfficeId()
	{
		return $this->officeId;
	}

	public function setPnr($pnr)
	{
		$this->pnr = $pnr;
		$this->apiParas["pnr"] = $pnr;
	}

	public function getPnr()
	{
		return $this->pnr;
	}

	public function setTcOrderId($tcOrderId)
	{
		$this->tcOrderId = $tcOrderId;
		$this->apiParas["tc_order_id"] = $tcOrderId;
	}

	public function getTcOrderId()
	{
		return $this->tcOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.orderinfo.officereauthorize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->newOfficeId,"newOfficeId");
		RequestCheckUtil::checkNotNull($this->officeId,"officeId");
		RequestCheckUtil::checkNotNull($this->pnr,"pnr");
		RequestCheckUtil::checkNotNull($this->tcOrderId,"tcOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
