<?php
/**
 * TOP API: taobao.logistics.info.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class LogisticsInfoGetRequest
{
	/** 
	 * 平台异常码
	 **/
	private $abCnCode;
	
	/** 
	 * 快递公司自有异常码，与物流宝对接的一致
	 **/
	private $abCpCode;
	
	/** 
	 * 快递公司平台码，顺丰(SF)、EMS(标准快递：EMS；经济快件：EYB)、宅急送(ZJS)、圆通(YTO)、中通(ZTO)、百世汇通(HTKY)、申通(STO)、天天快递 (TTKDEX)
	 **/
	private $cpCode;
	
	/** 
	 * 是否为电子面单
	 **/
	private $isWaybill;
	
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	/** 
	 * 订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setAbCnCode($abCnCode)
	{
		$this->abCnCode = $abCnCode;
		$this->apiParas["ab_cn_code"] = $abCnCode;
	}

	public function getAbCnCode()
	{
		return $this->abCnCode;
	}

	public function setAbCpCode($abCpCode)
	{
		$this->abCpCode = $abCpCode;
		$this->apiParas["ab_cp_code"] = $abCpCode;
	}

	public function getAbCpCode()
	{
		return $this->abCpCode;
	}

	public function setCpCode($cpCode)
	{
		$this->cpCode = $cpCode;
		$this->apiParas["cp_code"] = $cpCode;
	}

	public function getCpCode()
	{
		return $this->cpCode;
	}

	public function setIsWaybill($isWaybill)
	{
		$this->isWaybill = $isWaybill;
		$this->apiParas["is_waybill"] = $isWaybill;
	}

	public function getIsWaybill()
	{
		return $this->isWaybill;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

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
		return "taobao.logistics.info.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->abCnCode,"abCnCode");
		RequestCheckUtil::checkNotNull($this->abCpCode,"abCpCode");
		RequestCheckUtil::checkNotNull($this->cpCode,"cpCode");
		RequestCheckUtil::checkNotNull($this->isWaybill,"isWaybill");
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
