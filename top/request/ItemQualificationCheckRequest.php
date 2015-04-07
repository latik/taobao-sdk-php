<?php
/**
 * TOP API: taobao.item.qualification.check request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:03
 */
class ItemQualificationCheckRequest
{
	/** 
	 * 类目ID
	 **/
	private $categoryId;
	
	/** 
	 * 需要校验的项
	 **/
	private $name;
	
	/** 
	 * 校验的内容
	 **/
	private $value;
	
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

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setValue($value)
	{
		$this->value = $value;
		$this->apiParas["value"] = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function getApiMethodName()
	{
		return "taobao.item.qualification.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->value,"value");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
