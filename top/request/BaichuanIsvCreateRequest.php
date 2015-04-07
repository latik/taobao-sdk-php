<?php
/**
 * TOP API: taobao.baichuan.isv.create request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class BaichuanIsvCreateRequest
{
	/** 
	 * 商家联系人邮箱
	 **/
	private $email;
	
	/** 
	 * 联系人姓名
	 **/
	private $name;
	
	/** 
	 * 联系人手机
	 **/
	private $phone;
	
	private $apiParas = array();
	
	public function setEmail($email)
	{
		$this->email = $email;
		$this->apiParas["email"] = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.isv.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->email,"email");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->phone,"phone");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
