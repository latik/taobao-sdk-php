<?php
/**
 * TOP API: taobao.baichuan.app.online.apply request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class BaichuanAppOnlineApplyRequest
{
	/** 
	 * apk安装包
	 **/
	private $apkPackage;
	
	/** 
	 * 审核信息
	 **/
	private $applyParams;
	
	/** 
	 * mrd文件
	 **/
	private $mrdFile;
	
	/** 
	 * 审核人ip
	 **/
	private $operatorIp;
	
	/** 
	 * 申请审核的应用key
	 **/
	private $userAppkey;
	
	private $apiParas = array();
	
	public function setApkPackage($apkPackage)
	{
		$this->apkPackage = $apkPackage;
		$this->apiParas["apk_package"] = $apkPackage;
	}

	public function getApkPackage()
	{
		return $this->apkPackage;
	}

	public function setApplyParams($applyParams)
	{
		$this->applyParams = $applyParams;
		$this->apiParas["apply_params"] = $applyParams;
	}

	public function getApplyParams()
	{
		return $this->applyParams;
	}

	public function setMrdFile($mrdFile)
	{
		$this->mrdFile = $mrdFile;
		$this->apiParas["mrd_file"] = $mrdFile;
	}

	public function getMrdFile()
	{
		return $this->mrdFile;
	}

	public function setOperatorIp($operatorIp)
	{
		$this->operatorIp = $operatorIp;
		$this->apiParas["operator_ip"] = $operatorIp;
	}

	public function getOperatorIp()
	{
		return $this->operatorIp;
	}

	public function setUserAppkey($userAppkey)
	{
		$this->userAppkey = $userAppkey;
		$this->apiParas["user_appkey"] = $userAppkey;
	}

	public function getUserAppkey()
	{
		return $this->userAppkey;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.app.online.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mrdFile,"mrdFile");
		RequestCheckUtil::checkNotNull($this->userAppkey,"userAppkey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
