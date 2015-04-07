<?php
/**
 * TOP API: taobao.dd.item.cate.list request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdItemCateListRequest
{
	/** 
	 * 门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 数据归属淘宝账号id
	 **/
	private $sellerUsernick;
	
	/** 
	 * 类目状态；－1 已删除；1 正常，未删除；其他，全部
	 **/
	private $status;
	
	private $apiParas = array();
	
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
		return "taobao.dd.item.cate.list";
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
