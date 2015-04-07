<?php
/**
 * TOP API: taobao.dd.payorder.list.get request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:19
 */
class DdPayorderListGetRequest
{
	/** 
	 * 结束时间
	 **/
	private $ends;
	
	/** 
	 * 淘点点订单号
	 **/
	private $orderNo;
	
	/** 
	 * 订单类型，多值用,隔开
1：到店支付
2：现金券
3：满就送
4：预定
5：买红包
6：外卖
7：兑换券
	 **/
	private $orderType;
	
	/** 
	 * 支付状态，多值用,隔开
0:未付款
1:已完成
2:已失败
3:已付款
	 **/
	private $payStatus;
	
	/** 
	 * 页值，第几页
	 **/
	private $pn;
	
	/** 
	 * 页数，每页的值
	 **/
	private $ps;
	
	/** 
	 * 数据返回方式：
show=1 , 如果有券，合并核销的相同券并计数器加1；否则，不合并以列表方式返回
	 **/
	private $show;
	
	/** 
	 * 开始时间
	 **/
	private $starts;
	
	/** 
	 * 本地商户id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setEnds($ends)
	{
		$this->ends = $ends;
		$this->apiParas["ends"] = $ends;
	}

	public function getEnds()
	{
		return $this->ends;
	}

	public function setOrderNo($orderNo)
	{
		$this->orderNo = $orderNo;
		$this->apiParas["order_no"] = $orderNo;
	}

	public function getOrderNo()
	{
		return $this->orderNo;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setPayStatus($payStatus)
	{
		$this->payStatus = $payStatus;
		$this->apiParas["pay_status"] = $payStatus;
	}

	public function getPayStatus()
	{
		return $this->payStatus;
	}

	public function setPn($pn)
	{
		$this->pn = $pn;
		$this->apiParas["pn"] = $pn;
	}

	public function getPn()
	{
		return $this->pn;
	}

	public function setPs($ps)
	{
		$this->ps = $ps;
		$this->apiParas["ps"] = $ps;
	}

	public function getPs()
	{
		return $this->ps;
	}

	public function setShow($show)
	{
		$this->show = $show;
		$this->apiParas["show"] = $show;
	}

	public function getShow()
	{
		return $this->show;
	}

	public function setStarts($starts)
	{
		$this->starts = $starts;
		$this->apiParas["starts"] = $starts;
	}

	public function getStarts()
	{
		return $this->starts;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.payorder.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pn,"pn");
		RequestCheckUtil::checkNotNull($this->ps,"ps");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
