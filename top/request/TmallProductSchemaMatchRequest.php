<?php
/**
 * TOP API: tmall.product.schema.match request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class TmallProductSchemaMatchRequest
{
	/** 
	 * 商品发布的目标类目，必须是叶子类目
	 **/
	private $categoryId;
	
	/** 
	 * 入参字段信息<?xml version="1.0" encoding="utf-8"?>
<itemParam>
    <field id="title" name="商品标题" type="input">
		<value>Samsung/三星 N7102 测试商品不要拍</value>
    </field>
    <field id="sell_point" name="商品卖点" type="input">
    	<value>测试专用</value>
    </field>
</itemParam>
	 **/
	private $propvalues;
	
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

	public function setPropvalues($propvalues)
	{
		$this->propvalues = $propvalues;
		$this->apiParas["propvalues"] = $propvalues;
	}

	public function getPropvalues()
	{
		return $this->propvalues;
	}

	public function getApiMethodName()
	{
		return "tmall.product.schema.match";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->propvalues,"propvalues");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
