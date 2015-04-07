<?php
/**
 * TOP API: slb.aliyuncs.com.UploadServerCertificate.2014-05-15 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Slb20140515UploadServerCertificateRequest
{
	/** 
	 * 需要上传的私钥
	 **/
	private $privateKey;
	
	/** 
	 * SLB实例所属的Region编号<br /> 支持最大长度为：100<br /> 支持的最大列表长度为：100
	 **/
	private $regionId;
	
	/** 
	 * 需要上传的安全证书
	 **/
	private $serverCertificate;
	
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
	
	public function setPrivateKey($privateKey)
	{
		$this->privateKey = $privateKey;
		$this->apiParas["PrivateKey"] = $privateKey;
	}

	public function getPrivateKey()
	{
		return $this->privateKey;
	}

	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		$this->apiParas["RegionId"] = $regionId;
	}

	public function getRegionId()
	{
		return $this->regionId;
	}

	public function setServerCertificate($serverCertificate)
	{
		$this->serverCertificate = $serverCertificate;
		$this->apiParas["ServerCertificate"] = $serverCertificate;
	}

	public function getServerCertificate()
	{
		return $this->serverCertificate;
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
		return "slb.aliyuncs.com.UploadServerCertificate.2014-05-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->privateKey,"privateKey");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
		RequestCheckUtil::checkMaxLength($this->regionId,100,"regionId");
		RequestCheckUtil::checkNotNull($this->serverCertificate,"serverCertificate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
