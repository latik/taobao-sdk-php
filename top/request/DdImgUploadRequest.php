<?php
/**
 * TOP API: taobao.dd.img.upload request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdImgUploadRequest
{
	/** 
	 * 商品图片内容类型:JPG,GIF;最大:4M 。支持的文件类型：gif,jpg,jpeg,png<br /> 支持的文件类型为：gif,jpg,jpeg,png,bmp<br /> 支持的最大列表长度为：1048576
	 **/
	private $image;
	
	/** 
	 * 菜品id
	 **/
	private $itemId;
	
	/** 
	 * 菜品所在的门店或者门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 远程图片URL，与图片内容选一项使用
	 **/
	private $remoteUrl;
	
	/** 
	 * 卖家账号
	 **/
	private $sellerUsernick;
	
	/** 
	 * 标识图片类型，1，门店图片；2，菜品图片
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOutStoreid($outStoreid)
	{
		$this->outStoreid = $outStoreid;
		$this->apiParas["out_storeid"] = $outStoreid;
	}

	public function getOutStoreid()
	{
		return $this->outStoreid;
	}

	public function setRemoteUrl($remoteUrl)
	{
		$this->remoteUrl = $remoteUrl;
		$this->apiParas["remote_url"] = $remoteUrl;
	}

	public function getRemoteUrl()
	{
		return $this->remoteUrl;
	}

	public function setSellerUsernick($sellerUsernick)
	{
		$this->sellerUsernick = $sellerUsernick;
		$this->apiParas["seller_usernick"] = $sellerUsernick;
	}

	public function getSellerUsernick()
	{
		return $this->sellerUsernick;
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
		return "taobao.dd.img.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
