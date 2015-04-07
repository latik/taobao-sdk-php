<?php
/**
 * TOP API: taobao.dd.order.confirm request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdOrderConfirmRequest
{
	/** 
	 * 淘宝订单id对应的门店收银订单id
	 **/
	private $cashierOrderid;
	
	/** 
	 * 一些异常信息
1：桌台未关
同一个用户在同一个桌台多次下单要求可以加单
2：订单总价不一样
3：商品单价不一样
	 **/
	private $code;
	
	/** 
	 * json格式，反馈菜品沽清，价格变化等信息<BR/>

[
  {
    "itemid": "455",
    "soldout":1,
    "price": 58.00,
    "skucode": "455_1-2_2-3"
  }
]
	 **/
	private $items;
	
	/** 
	 * 用来记录订单反馈的信息
	 **/
	private $message;
	
	/** 
	 * 淘宝点点订单id（非淘宝订单）
	 **/
	private $orderid;
	
	/** 
	 * 卖家账号
	 **/
	private $sellerUsernick;
	
	/** 
	 * 确认订单状态
0：失败,
10：成功到达商家,
1：商家确认成功收到订单,
2：订单成功入门店收银,
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setCashierOrderid($cashierOrderid)
	{
		$this->cashierOrderid = $cashierOrderid;
		$this->apiParas["cashier_orderid"] = $cashierOrderid;
	}

	public function getCashierOrderid()
	{
		return $this->cashierOrderid;
	}

	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setOrderid($orderid)
	{
		$this->orderid = $orderid;
		$this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid()
	{
		return $this->orderid;
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

	public function getApiMethodName()
	{
		return "taobao.dd.order.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderid,"orderid");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
