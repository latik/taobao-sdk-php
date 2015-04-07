<?php
/**
 * TOP API: taobao.dd.store.load request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdStoreLoadRequest
{
	/** 
	 * 日期,获取该天更新的点菜商户
	 **/
	private $date;
	
	/** 
	 * 是否获取当天的所有点菜店铺信息
	 **/
	private $needall;
	
	/** 
	 * 页码，结合pz(每页返回的结果数)一起用，如page=2, pz=10, 则返回总结果中的第21～30条数据
	 **/
	private $page;
	
	/** 
	 * 每页返回的最大结果数
	 **/
	private $pz;
	
	/** 
	 * 淘宝店铺id, 用于查询单个店的信息
	 **/
	private $storeid;
	
	private $apiParas = array();
	
	public function setDate($date)
	{
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setNeedall($needall)
	{
		$this->needall = $needall;
		$this->apiParas["needall"] = $needall;
	}

	public function getNeedall()
	{
		return $this->needall;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setPz($pz)
	{
		$this->pz = $pz;
		$this->apiParas["pz"] = $pz;
	}

	public function getPz()
	{
		return $this->pz;
	}

	public function setStoreid($storeid)
	{
		$this->storeid = $storeid;
		$this->apiParas["storeid"] = $storeid;
	}

	public function getStoreid()
	{
		return $this->storeid;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.store.load";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->needall,"needall");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
