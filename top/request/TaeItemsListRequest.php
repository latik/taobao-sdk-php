<?php
/**
 * TOP API: taobao.tae.items.list request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class TaeItemsListRequest
{
	/** 
	 * 返回值中需要的字段. 可选值 title,nick,pic_url,location,cid,price,post_fee,promoted_service.字段间用 (,) 逗号分隔
	 **/
	private $fields;
	
	/** 
	 * 商品的ID列表, 使用 (,)逗号分隔. 最多支持50个商品ID
	 **/
	private $numIids;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNumIids($numIids)
	{
		$this->numIids = $numIids;
		$this->apiParas["num_iids"] = $numIids;
	}

	public function getNumIids()
	{
		return $this->numIids;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.items.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->numIids,"numIids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
