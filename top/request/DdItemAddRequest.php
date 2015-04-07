<?php
/**
 * TOP API: taobao.dd.item.add request
 * 
 * @author auto create
 * @since 1.0, 2015-01-20 12:44:20
 */
class DdItemAddRequest
{
	/** 
	 * 业务字段，用来标示菜品的特定属性， 
isMust:必点菜品,
lessNum:起售份数的份数,
lessNumInfo：起售份数的完整描述,
isSale:特价菜
canSell:是否在点点上下单，比如海鲜类时价的菜品，需要店里称算的，只能看不能下单，默认是0（可以下单
	 **/
	private $bizTag;
	
	/** 
	 * 当前价格，优惠价格
	 **/
	private $currentprice;
	
	/** 
	 * 菜品描述，比如材料，配菜，食材等等.字数要大于5个字符，小于25000个字符，受违禁词控制
	 **/
	private $desc;
	
	/** 
	 * 辣度
	 **/
	private $hot;
	
	/** 
	 * 菜品编号
	 **/
	private $id;
	
	/** 
	 * 商品图片内容类型:JPG,GIF;最大:500KB 。支持的文件类型：gif,jpg,jpeg,png<br /> 支持的文件类型为：gif,jpg,jpeg,png,bmp<br /> 支持的最大列表长度为：1048576
	 **/
	private $image;
	
	/** 
	 * 是否参加全店打折,具体值 是：1 ，否：0；默认给0
	 **/
	private $isdiscount;
	
	/** 
	 * 是否是新菜；是：1 ，否：0
	 **/
	private $isnew;
	
	/** 
	 * 是否是推荐菜；是：1 ，否：0
	 **/
	private $isrecommend;
	
	/** 
	 * 是否是套餐；是：1 ，否：0<br /> 支持的最大列表长度为：1
	 **/
	private $issetfood;
	
	/** 
	 * 是否支持外卖；是：1 ，否：0
	 **/
	private $istakeout;
	
	/** 
	 * 淘宝菜品分类id
	 **/
	private $itemCategoryId;
	
	/** 
	 * 淘宝菜品分类名称
	 **/
	private $itemCategoryName;
	
	/** 
	 * 淘宝菜品分类父类，没有则不传
	 **/
	private $itemCategoryParentid;
	
	/** 
	 * 淘宝菜品分类排序，会影响前台展现
	 **/
	private $itemCategorySort;
	
	/** 
	 * 菜品名称
	 **/
	private $name;
	
	/** 
	 * 完整图片路径，原图不加水印.这个url所对应的图片必须要属于当前用户。pic和image只需要传入一个,如果两个都传，默认选择pic
	 **/
	private $pic;
	
	/** 
	 * 原价
	 **/
	private $price;
	
	/** 
	 * 1，系统商对有属性的菜品，比如：菜品规格分为一斤，两斤，会影响价格的属性，需要把属性通过propeties传过来，gid是属性id，gname是属性名称，pid是属性值id，name是属性值名称。下面是用菜品的属性 ：规格（一斤，两斤），做法（清蒸）返回的数据样例。
	 **/
	private $properties;
	
	/** 
	 * 返回过来的是菜品属性枚举所有的情况以及对应的价格，id是由gid,pid;gid,pid组成的，skucode是属性唯一Id。
	 **/
	private $propertiesvalue;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerUsernick;
	
	/** 
	 * 套餐详情
	 **/
	private $setfood;
	
	/** 
	 * 套餐关联菜品用逗号分开，列出关联的菜品id
	 **/
	private $setfoodlist;
	
	/** 
	 * 菜品排序，默认为0
	 **/
	private $sort;
	
	/** 
	 * 库存
	 **/
	private $stock;
	
	/** 
	 * 菜品所在的门店
	 **/
	private $storeid;
	
	/** 
	 * 用来同步数据的版本号
	 **/
	private $syncVersion;
	
	/** 
	 * 口味.传统一的值：不辣，轻辣，微辣，中辣，特辣
	 **/
	private $taste;
	
	/** 
	 * 菜品的单位，斤/只/
	 **/
	private $unit;
	
	private $apiParas = array();
	
	public function setBizTag($bizTag)
	{
		$this->bizTag = $bizTag;
		$this->apiParas["biz_tag"] = $bizTag;
	}

	public function getBizTag()
	{
		return $this->bizTag;
	}

	public function setCurrentprice($currentprice)
	{
		$this->currentprice = $currentprice;
		$this->apiParas["currentprice"] = $currentprice;
	}

	public function getCurrentprice()
	{
		return $this->currentprice;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setHot($hot)
	{
		$this->hot = $hot;
		$this->apiParas["hot"] = $hot;
	}

	public function getHot()
	{
		return $this->hot;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIsdiscount($isdiscount)
	{
		$this->isdiscount = $isdiscount;
		$this->apiParas["isdiscount"] = $isdiscount;
	}

	public function getIsdiscount()
	{
		return $this->isdiscount;
	}

	public function setIsnew($isnew)
	{
		$this->isnew = $isnew;
		$this->apiParas["isnew"] = $isnew;
	}

	public function getIsnew()
	{
		return $this->isnew;
	}

	public function setIsrecommend($isrecommend)
	{
		$this->isrecommend = $isrecommend;
		$this->apiParas["isrecommend"] = $isrecommend;
	}

	public function getIsrecommend()
	{
		return $this->isrecommend;
	}

	public function setIssetfood($issetfood)
	{
		$this->issetfood = $issetfood;
		$this->apiParas["issetfood"] = $issetfood;
	}

	public function getIssetfood()
	{
		return $this->issetfood;
	}

	public function setIstakeout($istakeout)
	{
		$this->istakeout = $istakeout;
		$this->apiParas["istakeout"] = $istakeout;
	}

	public function getIstakeout()
	{
		return $this->istakeout;
	}

	public function setItemCategoryId($itemCategoryId)
	{
		$this->itemCategoryId = $itemCategoryId;
		$this->apiParas["item_category.id"] = $itemCategoryId;
	}

	public function getItemCategoryId()
	{
		return $this->itemCategoryId;
	}

	public function setItemCategoryName($itemCategoryName)
	{
		$this->itemCategoryName = $itemCategoryName;
		$this->apiParas["item_category.name"] = $itemCategoryName;
	}

	public function getItemCategoryName()
	{
		return $this->itemCategoryName;
	}

	public function setItemCategoryParentid($itemCategoryParentid)
	{
		$this->itemCategoryParentid = $itemCategoryParentid;
		$this->apiParas["item_category.parentid"] = $itemCategoryParentid;
	}

	public function getItemCategoryParentid()
	{
		return $this->itemCategoryParentid;
	}

	public function setItemCategorySort($itemCategorySort)
	{
		$this->itemCategorySort = $itemCategorySort;
		$this->apiParas["item_category.sort"] = $itemCategorySort;
	}

	public function getItemCategorySort()
	{
		return $this->itemCategorySort;
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

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setProperties($properties)
	{
		$this->properties = $properties;
		$this->apiParas["properties"] = $properties;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function setPropertiesvalue($propertiesvalue)
	{
		$this->propertiesvalue = $propertiesvalue;
		$this->apiParas["propertiesvalue"] = $propertiesvalue;
	}

	public function getPropertiesvalue()
	{
		return $this->propertiesvalue;
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

	public function setSetfood($setfood)
	{
		$this->setfood = $setfood;
		$this->apiParas["setfood"] = $setfood;
	}

	public function getSetfood()
	{
		return $this->setfood;
	}

	public function setSetfoodlist($setfoodlist)
	{
		$this->setfoodlist = $setfoodlist;
		$this->apiParas["setfoodlist"] = $setfoodlist;
	}

	public function getSetfoodlist()
	{
		return $this->setfoodlist;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStock($stock)
	{
		$this->stock = $stock;
		$this->apiParas["stock"] = $stock;
	}

	public function getStock()
	{
		return $this->stock;
	}

	public function setStoreid($storeid)
	{
		$this->storeid = $storeid;
		$this->apiParas["storeid"] = $storeid;
	}

	public function getStoreid()
	{
		return $this->storeid;
	}

	public function setSyncVersion($syncVersion)
	{
		$this->syncVersion = $syncVersion;
		$this->apiParas["sync_version"] = $syncVersion;
	}

	public function getSyncVersion()
	{
		return $this->syncVersion;
	}

	public function setTaste($taste)
	{
		$this->taste = $taste;
		$this->apiParas["taste"] = $taste;
	}

	public function getTaste()
	{
		return $this->taste;
	}

	public function setUnit($unit)
	{
		$this->unit = $unit;
		$this->apiParas["unit"] = $unit;
	}

	public function getUnit()
	{
		return $this->unit;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentprice,"currentprice");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->isdiscount,"isdiscount");
		RequestCheckUtil::checkNotNull($this->isnew,"isnew");
		RequestCheckUtil::checkNotNull($this->isrecommend,"isrecommend");
		RequestCheckUtil::checkNotNull($this->issetfood,"issetfood");
		RequestCheckUtil::checkNotNull($this->istakeout,"istakeout");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->sellerUsernick,"sellerUsernick");
		RequestCheckUtil::checkNotNull($this->storeid,"storeid");
		RequestCheckUtil::checkNotNull($this->syncVersion,"syncVersion");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
