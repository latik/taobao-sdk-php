<?php
/**
 * TOP API: taobao.ma.qrcode.upload request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class MaQrcodeUploadRequest
{
	/** 
	 * 二维码的图片后辍,目前只支持png,jpg,jpeg,gif四种<br /> 支持最大长度为：5<br /> 支持的最大列表长度为：5
	 **/
	private $ext;
	
	/** 
	 * 图片名
	 **/
	private $imageName;
	
	/** 
	 * 0000
	 **/
	private $imge;
	
	private $apiParas = array();
	
	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function setImageName($imageName)
	{
		$this->imageName = $imageName;
		$this->apiParas["image_name"] = $imageName;
	}

	public function getImageName()
	{
		return $this->imageName;
	}

	public function setImge($imge)
	{
		$this->imge = $imge;
		$this->apiParas["imge"] = $imge;
	}

	public function getImge()
	{
		return $this->imge;
	}

	public function getApiMethodName()
	{
		return "taobao.ma.qrcode.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ext,"ext");
		RequestCheckUtil::checkMaxLength($this->ext,5,"ext");
		RequestCheckUtil::checkNotNull($this->imageName,"imageName");
		RequestCheckUtil::checkNotNull($this->imge,"imge");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
