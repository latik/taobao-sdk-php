<?php
/**
 * TOP API: alibaba.xiami.api.search.songs.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class AlibabaXiamiApiSearchSongsGetRequest
{
	/** 
	 * 艺人类别：1:华语男艺人；2：华语女艺人；3：华语乐队；4：日本男艺人；5：日本女艺人；6：日本乐队；
7：韩国男艺人；8：韩国女艺人；9：韩国乐队；10：欧美男艺人；11：欧美女艺人；12：欧美乐队；-1：所有类别
	 **/
	private $category;
	
	/** 
	 * 是否发布状态，y：发布；n：未发布；all：发布+未发布，默认发布+未发布
	 **/
	private $isPub;
	
	/** 
	 * 搜索关键字<br /> 支持最大长度为：128<br /> 支持的最大列表长度为：128
	 **/
	private $key;
	
	/** 
	 * 每一页的请求结果数
	 **/
	private $limit;
	
	/** 
	 * 当前搜索 请求的页数
	 **/
	private $page;
	
	private $apiParas = array();
	
	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setIsPub($isPub)
	{
		$this->isPub = $isPub;
		$this->apiParas["is_pub"] = $isPub;
	}

	public function getIsPub()
	{
		return $this->isPub;
	}

	public function setKey($key)
	{
		$this->key = $key;
		$this->apiParas["key"] = $key;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
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

	public function getApiMethodName()
	{
		return "alibaba.xiami.api.search.songs.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->key,"key");
		RequestCheckUtil::checkMaxLength($this->key,128,"key");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
