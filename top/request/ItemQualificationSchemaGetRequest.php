<?php
/**
 * TOP API: taobao.item.qualification.schema.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:03
 */
class ItemQualificationSchemaGetRequest
{
	/** 
	 * 传入商品发布时，叶子类目的ID
	 **/
	private $categoryId;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function getApiMethodName()
	{
		return "taobao.item.qualification.schema.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
