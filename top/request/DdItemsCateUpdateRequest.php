<?php
/**
 * TOP API: taobao.dd.items.cate.update request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdItemsCateUpdateRequest
{
	/** 
	 * 系统商菜品id列表
	 **/
	private $itemids;
	
	/** 
	 * 菜品所在的门店
	 **/
	private $outStoreid;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerUsernick;
	
	/** 
	 * 菜品分类id
	 **/
	private $tbcateid;
	
	private $apiParas = array();
	
	public function setItemids($itemids)
	{
		$this->itemids = $itemids;
		$this->apiParas["itemids"] = $itemids;
	}

	public function getItemids()
	{
		return $this->itemids;
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

	public function setTbcateid($tbcateid)
	{
		$this->tbcateid = $tbcateid;
		$this->apiParas["tbcateid"] = $tbcateid;
	}

	public function getTbcateid()
	{
		return $this->tbcateid;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.items.cate.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemids,"itemids");
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->tbcateid,"tbcateid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
