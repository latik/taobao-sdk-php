<?php
/**
 * TOP API: taobao.dd.reserved.list.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdReservedListGetRequest
{
	/** 
	 * 买家称呼
	 **/
	private $buyerNick;
	
	/** 
	 * 买家预定手机号
	 **/
	private $buyerPhone;
	
	/** 
	 * 下单结束时间
	 **/
	private $createEnd;
	
	/** 
	 * 下单开始时间
	 **/
	private $createStart;
	
	/** 
	 * 预定结束时间
	 **/
	private $ends;
	
	/** 
	 * 打印状态
	 * 0 : 未打印
	 * 1 : 已打印
	 * 2 : 已处理
	 **/
	private $option;
	
	/** 
	 * 外部店铺ID
	 **/
	private $outStoreid;
	
	/** 
	 * 翻页游码
	 **/
	private $pn;
	
	/** 
	 * 页面大小
	 **/
	private $ps;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerUsernick;
	
	/** 
	 * 预定开始时间
	 **/
	private $starts;
	
	/** 
	 * 店铺哪个字段标明：前支付，基础，高级？
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setBuyerPhone($buyerPhone)
	{
		$this->buyerPhone = $buyerPhone;
		$this->apiParas["buyer_phone"] = $buyerPhone;
	}

	public function getBuyerPhone()
	{
		return $this->buyerPhone;
	}

	public function setCreateEnd($createEnd)
	{
		$this->createEnd = $createEnd;
		$this->apiParas["create_end"] = $createEnd;
	}

	public function getCreateEnd()
	{
		return $this->createEnd;
	}

	public function setCreateStart($createStart)
	{
		$this->createStart = $createStart;
		$this->apiParas["create_start"] = $createStart;
	}

	public function getCreateStart()
	{
		return $this->createStart;
	}

	public function setEnds($ends)
	{
		$this->ends = $ends;
		$this->apiParas["ends"] = $ends;
	}

	public function getEnds()
	{
		return $this->ends;
	}

	public function setOption($option)
	{
		$this->option = $option;
		$this->apiParas["option"] = $option;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function setOutStoreid($outStoreid)
	{
		$this->outStoreid = $outStoreid;
		$this->apiParas["out_storeid"] = $outStoreid;
	}

	public function getOutStoreid()
	{
		return $this->outStoreid;
	}

	public function setPn($pn)
	{
		$this->pn = $pn;
		$this->apiParas["pn"] = $pn;
	}

	public function getPn()
	{
		return $this->pn;
	}

	public function setPs($ps)
	{
		$this->ps = $ps;
		$this->apiParas["ps"] = $ps;
	}

	public function getPs()
	{
		return $this->ps;
	}

	public function setSellerUsernick($sellerUsernick)
	{
		$this->sellerUsernick = $sellerUsernick;
		$this->apiParas["seller_usernick"] = $sellerUsernick;
	}

	public function getSellerUsernick()
	{
		return $this->sellerUsernick;
	}

	public function setStarts($starts)
	{
		$this->starts = $starts;
		$this->apiParas["starts"] = $starts;
	}

	public function getStarts()
	{
		return $this->starts;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.reserved.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
