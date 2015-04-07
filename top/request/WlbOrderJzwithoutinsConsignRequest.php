<?php
/**
 * TOP API: taobao.wlb.order.jzwithoutins.consign request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class WlbOrderJzwithoutinsConsignRequest
{
	/** 
	 * 包括package的信息和自有物流的信息
	 **/
	private $jzConsignArgs;
	
	/** 
	 * 淘宝交易订单号
	 **/
	private $tid;
	
	/** 
	 * 物流配送服务服务商。若针对灯具安装和卫浴小件安装，请将快递公司的tpName，tpCode(对应companyCode)，还有对应的serviceType封装成Partner对象作为P1
	 **/
	private $tmsPartner;
	
	private $apiParas = array();
	
	public function setJzConsignArgs($jzConsignArgs)
	{
		$this->jzConsignArgs = $jzConsignArgs;
		$this->apiParas["jz_consign_args"] = $jzConsignArgs;
	}

	public function getJzConsignArgs()
	{
		return $this->jzConsignArgs;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function setTmsPartner($tmsPartner)
	{
		$this->tmsPartner = $tmsPartner;
		$this->apiParas["tms_partner"] = $tmsPartner;
	}

	public function getTmsPartner()
	{
		return $this->tmsPartner;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.order.jzwithoutins.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->jzConsignArgs,"jzConsignArgs");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkNotNull($this->tmsPartner,"tmsPartner");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
