<?php
/**
 * TOP API: taobao.vmarket.eticket.oplogs.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketOplogsGetRequest
{
	/** 
	 * 核销码
	 **/
	private $code;
	
	/** 
	 * 码商ID
	 **/
	private $codemerchantId;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 手机号后四位
	 **/
	private $mobile;
	
	/** 
	 * 当前页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页显示的记录数，最大为40，默认为40
	 **/
	private $pageSize;
	
	/** 
	 * 核销身份
	 **/
	private $posid;
	
	/** 
	 * 排序方式
	 **/
	private $sort;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 0:全部 1:核销 2:冲正
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setCodemerchantId($codemerchantId)
	{
		$this->codemerchantId = $codemerchantId;
		$this->apiParas["codemerchant_id"] = $codemerchantId;
	}

	public function getCodemerchantId()
	{
		return $this->codemerchantId;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPosid($posid)
	{
		$this->posid = $posid;
		$this->apiParas["posid"] = $posid;
	}

	public function getPosid()
	{
		return $this->posid;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.oplogs.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
