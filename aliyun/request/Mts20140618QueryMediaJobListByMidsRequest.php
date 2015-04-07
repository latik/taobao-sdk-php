<?php
/**
 * TOP API: mts.aliyuncs.com.QueryMediaJobListByMids.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class Mts20140618QueryMediaJobListByMidsRequest
{
	/** 
	 * 视频ID列表
	 **/
	private $mediaIds;
	
	/** 
	 * 转码作业状态：All表示所有状态，Submitted表示作业已经提交，Transcoding表示转码中，TranscodeSuccess表示转码成功，TranscodeFail表示转码失败，TranscodeCancelled表示转码取消
	 **/
	private $state;
	
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
	
	public function setMediaIds($mediaIds)
	{
		$this->mediaIds = $mediaIds;
		$this->apiParas["MediaIds"] = $mediaIds;
	}

	public function getMediaIds()
	{
		return $this->mediaIds;
	}

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["State"] = $state;
	}

	public function getState()
	{
		return $this->state;
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
		return "mts.aliyuncs.com.QueryMediaJobListByMids.2014-06-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mediaIds,"mediaIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
