<?php
/**
 * TOP API: taobao.vmarket.eticket.tasks.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class VmarketEticketTasksGetRequest
{
	/** 
	 * 码商ID，如果是码商，必须传，如果是信任卖家，不需要传
	 **/
	private $codemerchantId;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页获取条数。默认值40，最小值1，最大值100。
	 **/
	private $pageSize;
	
	/** 
	 * 卖家家ID(信任卖家不必传，码商可选)
	 **/
	private $sellerId;
	
	/** 
	 * 返回结果类型:
1:返回通知失败的订单
2.返回通知成功回调失败的订单
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCodemerchantId($codemerchantId)
	{
		$this->codemerchantId = $codemerchantId;
		$this->apiParas["codemerchant_id"] = $codemerchantId;
	}

	public function getCodemerchantId()
	{
		return $this->codemerchantId;
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

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.tasks.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
