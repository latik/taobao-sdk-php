<?php
/**
 * TOP API: taobao.athena.item.knowledge.type.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class AthenaItemKnowledgeTypeGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.athena.item.knowledge.type.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
