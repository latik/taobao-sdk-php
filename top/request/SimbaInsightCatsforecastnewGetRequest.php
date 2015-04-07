<?php
/**
 * TOP API: taobao.simba.insight.catsforecastnew.get request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:03
 */
class SimbaInsightCatsforecastnewGetRequest
{
	/** 
	 * 需要查询的词列表
	 **/
	private $bidwordList;
	
	private $apiParas = array();
	
	public function setBidwordList($bidwordList)
	{
		$this->bidwordList = $bidwordList;
		$this->apiParas["bidword_list"] = $bidwordList;
	}

	public function getBidwordList()
	{
		return $this->bidwordList;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.catsforecastnew.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bidwordList,"bidwordList");
		RequestCheckUtil::checkMaxListSize($this->bidwordList,10,"bidwordList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
