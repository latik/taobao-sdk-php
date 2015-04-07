<?php
/**
 * TOP API: taobao.dd.order.checkout request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdOrderCheckoutRequest
{
	/** 
	 * 门店收银结账单id，代表唯一一笔订单
	 **/
	private $cashierOrderid;
	
	/** 
	 * 就餐人
	 **/
	private $contact;
	
	/** 
	 * 菜品信息 string类型 json结构,
itemid 菜品id
itemname 菜品名称
itemcount 菜品份数
price 菜品价格
skucode sku唯一编码
skuinfo sku信息
<BR/>
[{"itemcount":1,"itemid":"bc433f66414969de01415388d8cb1091","itemname":"鹌鹑蛋","price":10.00},
{"itemcount":1,"itemid":"bc433f66414969de01415388d8ce1092","itemname":"水晶包","price":10.00,"skucode":"1_3","skuinfo":"sdf"}]
	 **/
	private $items;
	
	/** 
	 * 门店id
	 **/
	private $outStoreid;
	
	/** 
	 * 几人桌
	 **/
	private $people;
	
	/** 
	 * 优惠信息描述：
优惠信息，string类型 打折 店庆 会员价、折扣、服务费、最低消费等
	 **/
	private $promotioninfo;
	
	/** 
	 * 应付价格
	 **/
	private $realprice;
	
	/** 
	 * 卖家账号，用来收款
	 **/
	private $sellerUsernick;
	
	/** 
	 * 就餐的桌号信息
	 **/
	private $tablenumber;
	
	/** 
	 * 通过淘宝点点下行的订单记录id
	 **/
	private $tbOrderid;
	
	/** 
	 * 总价多少
	 **/
	private $totalprice;
	
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

	public function setContact($contact)
	{
		$this->contact = $contact;
		$this->apiParas["contact"] = $contact;
	}

	public function getContact()
	{
		return $this->contact;
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

	public function setOutStoreid($outStoreid)
	{
		$this->outStoreid = $outStoreid;
		$this->apiParas["out_storeid"] = $outStoreid;
	}

	public function getOutStoreid()
	{
		return $this->outStoreid;
	}

	public function setPeople($people)
	{
		$this->people = $people;
		$this->apiParas["people"] = $people;
	}

	public function getPeople()
	{
		return $this->people;
	}

	public function setPromotioninfo($promotioninfo)
	{
		$this->promotioninfo = $promotioninfo;
		$this->apiParas["promotioninfo"] = $promotioninfo;
	}

	public function getPromotioninfo()
	{
		return $this->promotioninfo;
	}

	public function setRealprice($realprice)
	{
		$this->realprice = $realprice;
		$this->apiParas["realprice"] = $realprice;
	}

	public function getRealprice()
	{
		return $this->realprice;
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

	public function setTablenumber($tablenumber)
	{
		$this->tablenumber = $tablenumber;
		$this->apiParas["tablenumber"] = $tablenumber;
	}

	public function getTablenumber()
	{
		return $this->tablenumber;
	}

	public function setTbOrderid($tbOrderid)
	{
		$this->tbOrderid = $tbOrderid;
		$this->apiParas["tb_orderid"] = $tbOrderid;
	}

	public function getTbOrderid()
	{
		return $this->tbOrderid;
	}

	public function setTotalprice($totalprice)
	{
		$this->totalprice = $totalprice;
		$this->apiParas["totalprice"] = $totalprice;
	}

	public function getTotalprice()
	{
		return $this->totalprice;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.order.checkout";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cashierOrderid,"cashierOrderid");
		RequestCheckUtil::checkNotNull($this->items,"items");
		RequestCheckUtil::checkNotNull($this->outStoreid,"outStoreid");
		RequestCheckUtil::checkNotNull($this->realprice,"realprice");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->totalprice,"totalprice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
