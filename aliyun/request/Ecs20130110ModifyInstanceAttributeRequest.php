<?php
/**
 * TOP API: ecs.aliyuncs.com.ModifyInstanceAttribute.2013-01-10 request
 * 
 * @author auto create
 * @since 1.0, 2014-11-11 16:54:04
 */
class Ecs20130110ModifyInstanceAttributeRequest
{
	/** 
	 * 表示实例的主机名。必须以字母开始，并只可以含有字母、“-”字符。Windows系统最长为15字节，Linux系统最长为30字节
	 **/
	private $hostName;
	
	/** 
	 * 指定的实例ID
	 **/
	private $instanceId;
	
	/** 
	 * 实例名称
	 **/
	private $instanceName;
	
	/** 
	 * 重置为用户指定的密码，密码只能是数字或者英文
字母。长度必须在6~30个英文字符
	 **/
	private $password;
	
	/** 
	 * 安全组代码。修改实例所属的安全组
	 **/
	private $securityGroupId;
	
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
	
	public function setHostName($hostName)
	{
		$this->hostName = $hostName;
		$this->apiParas["HostName"] = $hostName;
	}

	public function getHostName()
	{
		return $this->hostName;
	}

	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["InstanceName"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		$this->apiParas["Password"] = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setSecurityGroupId($securityGroupId)
	{
		$this->securityGroupId = $securityGroupId;
		$this->apiParas["SecurityGroupId"] = $securityGroupId;
	}

	public function getSecurityGroupId()
	{
		return $this->securityGroupId;
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
		return "ecs.aliyuncs.com.ModifyInstanceAttribute.2013-01-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
