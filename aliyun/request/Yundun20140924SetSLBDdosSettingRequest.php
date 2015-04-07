<?php
/**
 * TOP API: yundun.aliyuncs.com.setSLBDdosSetting.2014-09-24 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Yundun20140924SetSLBDdosSettingRequest
{
	/** 
	 * bps
	 **/
	private $bps;
	
	/** 
	 * instanceId
	 **/
	private $instanceId;
	
	/** 
	 * isLayer7
	 **/
	private $isLayer7;
	
	/** 
	 * pps
	 **/
	private $pps;
	
	/** 
	 * qps
	 **/
	private $qps;
	
	/** 
	 * sipConn
	 **/
	private $sipConn;
	
	/** 
	 * sipNew
	 **/
	private $sipNew;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setBps($bps)
	{
		$this->bps = $bps;
		$this->apiParas["bps"] = $bps;
	}

	public function getBps()
	{
		return $this->bps;
	}

	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["instanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function setIsLayer7($isLayer7)
	{
		$this->isLayer7 = $isLayer7;
		$this->apiParas["isLayer7"] = $isLayer7;
	}

	public function getIsLayer7()
	{
		return $this->isLayer7;
	}

	public function setPps($pps)
	{
		$this->pps = $pps;
		$this->apiParas["pps"] = $pps;
	}

	public function getPps()
	{
		return $this->pps;
	}

	public function setQps($qps)
	{
		$this->qps = $qps;
		$this->apiParas["qps"] = $qps;
	}

	public function getQps()
	{
		return $this->qps;
	}

	public function setSipConn($sipConn)
	{
		$this->sipConn = $sipConn;
		$this->apiParas["sipConn"] = $sipConn;
	}

	public function getSipConn()
	{
		return $this->sipConn;
	}

	public function setSipNew($sipNew)
	{
		$this->sipNew = $sipNew;
		$this->apiParas["sipNew"] = $sipNew;
	}

	public function getSipNew()
	{
		return $this->sipNew;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "yundun.aliyuncs.com.setSLBDdosSetting.2014-09-24";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bps,"bps");
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
		RequestCheckUtil::checkNotNull($this->isLayer7,"isLayer7");
		RequestCheckUtil::checkNotNull($this->pps,"pps");
		RequestCheckUtil::checkNotNull($this->qps,"qps");
		RequestCheckUtil::checkNotNull($this->sipConn,"sipConn");
		RequestCheckUtil::checkNotNull($this->sipNew,"sipNew");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
