<?php
/**
 * TOP API: taobao.dd.item.list request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdItemListRequest
{
	/** 
	 * 门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 分页
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerUsernick;
	
	/** 
	 * 菜品状态查询
1：正常
-1:用户下架
-6:菜品沽清
	 **/
	private $status;
	
	/** 
	 * 菜品分类id
	 **/
	private $tbcateid;
	
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
		return "taobao.dd.item.list";
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
