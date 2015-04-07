<?php
/**
 * TOP API: taobao.dd.item.cate.update request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdItemCateUpdateRequest
{
	/** 
	 * 类目名称
	 **/
	private $name;
	
	/** 
	 * 门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 父类目id
	 **/
	private $parentid;
	
	/** 
	 * 卖家账号
	 **/
	private $sellerUsernick;
	
	/** 
	 * 类目排序字段，会直接影响类目在前台的展现数序。值小的会在前面展现。
	 **/
	private $sort;
	
	/** 
	 * 菜品分类状态
	 **/
	private $status;
	
	/** 
	 * 同步版本号
	 **/
	private $syncVersion;
	
	/** 
	 * 类目id
	 **/
	private $tbcateid;
	
	private $apiParas = array();
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setParentid($parentid)
	{
		$this->parentid = $parentid;
		$this->apiParas["parentid"] = $parentid;
	}

	public function getParentid()
	{
		return $this->parentid;
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

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
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

	public function setSyncVersion($syncVersion)
	{
		$this->syncVersion = $syncVersion;
		$this->apiParas["sync_version"] = $syncVersion;
	}

	public function getSyncVersion()
	{
		return $this->syncVersion;
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
		return "taobao.dd.item.cate.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->sort,"sort");
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->syncVersion,"syncVersion");
		RequestCheckUtil::checkNotNull($this->tbcateid,"tbcateid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
