<?php
/**
 * TOP API: taobao.jds.hluser.update request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class JdsHluserUpdateRequest
{
	/** 
	 * 回流信息是否开通买家端展示
	 **/
	private $openForBuyer;
	
	private $apiParas = array();
	
	public function setOpenForBuyer($openForBuyer)
	{
		$this->openForBuyer = $openForBuyer;
		$this->apiParas["open_for_buyer"] = $openForBuyer;
	}

	public function getOpenForBuyer()
	{
		return $this->openForBuyer;
	}

	public function getApiMethodName()
	{
		return "taobao.jds.hluser.update";
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
