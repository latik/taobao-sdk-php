<?php
/**
 * TOP API: taobao.dd.store.promotion.add request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdStorePromotionAddRequest
{
	/** 
	 * 几点到几点搞优惠
	 **/
	private $descinfo;
	
	/** 
	 * 门店全场折扣（折扣值*100）
	 **/
	private $discount;
	
	/** 
	 * 优惠结束时间
	 **/
	private $endTime;
	
	/** 
	 * 本地商户id
	 **/
	private $outStoreid;
	
	/** 
	 * 卖家账号
	 **/
	private $sellerUsernick;
	
	/** 
	 * 优惠开始时间
	 **/
	private $startTime;
	
	/** 
	 * 优惠类型，0：描述性优惠，2：全场折扣
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setDescinfo($descinfo)
	{
		$this->descinfo = $descinfo;
		$this->apiParas["descinfo"] = $descinfo;
	}

	public function getDescinfo()
	{
		return $this->descinfo;
	}

	public function setDiscount($discount)
	{
		$this->discount = $discount;
		$this->apiParas["discount"] = $discount;
	}

	public function getDiscount()
	{
		return $this->discount;
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

	public function setOutStoreid($outStoreid)
	{
		$this->outStoreid = $outStoreid;
		$this->apiParas["out_storeid"] = $outStoreid;
	}

	public function getOutStoreid()
	{
		return $this->outStoreid;
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
		return "taobao.dd.store.promotion.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
