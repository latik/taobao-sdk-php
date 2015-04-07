<?php
/**
 * TOP API: taobao.dd.data.upload request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdDataUploadRequest
{
	/** 
	 * 上传数据.JAVA CODE:
String data = "CATEGORIES\0012\001id\001name\0015\001白克测试222\00110\001再增一个";
		String table = "TABLES\0012\001code\001name\001003\001桌台3";
		String item = "ITEMS\0015\001id\001name\001price\001currentprice\001itemcateid";
		item += "\00110017\001白克测试菜品17\00113.0\00113.0\0015";
		request.setData(data + "\002" + item + "\002" + table);
	 **/
	private $data;
	
	/** 
	 * 门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 卖家账号
	 **/
	private $sellerUsernick;
	
	/** 
	 * status 状态 保留参数
	 **/
	private $status;
	
	/** 
	 * 1 菜品 2 分类 3 桌台 0 全部
	 **/
	private $type;
	
	/** 
	 * 版本号，当前version=1
	 **/
	private $version;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
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

	public function setSellerUsernick($sellerUsernick)
	{
		$this->sellerUsernick = $sellerUsernick;
		$this->apiParas["seller_usernick"] = $sellerUsernick;
	}

	public function getSellerUsernick()
	{
		return $this->sellerUsernick;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.data.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->data,"data");
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkNotNull($this->version,"version");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
