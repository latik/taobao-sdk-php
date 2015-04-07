<?php
/**
 * TOP API: mts.aliyuncs.com.CreateTranscodeJob.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Mts20140618CreateTranscodeJobRequest
{
	/** 
	 * 媒资ID
	 **/
	private $mediaId;
	
	/** 
	 * 转码模板ID
	 **/
	private $templateId;
	
	/** 
	 * 转码时进行打水印功能,至多四个水印，中间以逗号分隔。
1、imageUrl 为水印的url, 值需要urlencode,此水印需存储在oss上
2、referencePos 为参考位置："TopLeft", "TopRight", "BottomLeft", "BottomRight"
3、dx与dy 为水印参考位置的偏移量，是相对于原视频画面大小，单位px或百分比
4、width, height 为水印缩略尺寸，单位px (可选)
5、整串参数需要base64编码
	 **/
	private $watermarks;
	
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
	
	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
		$this->apiParas["MediaId"] = $mediaId;
	}

	public function getMediaId()
	{
		return $this->mediaId;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["TemplateId"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function setWatermarks($watermarks)
	{
		$this->watermarks = $watermarks;
		$this->apiParas["Watermarks"] = $watermarks;
	}

	public function getWatermarks()
	{
		return $this->watermarks;
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
		return "mts.aliyuncs.com.CreateTranscodeJob.2014-06-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mediaId,"mediaId");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
