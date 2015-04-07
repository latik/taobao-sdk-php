Mirror taobao api official package

Installation
------------

php composer.phar composer require latik/taobao-sdk

Usage
-----

Once the library is installed, simply use it in your code by:

```php
<?php

require_once __DIR__ .'/vendor/autoload.php';

$topClient = new TopClient();
$topClient->appkey = '..';
$topClient->secretKey = '..';
var_dump($topClient);
$itemReq = new ItemGetRequest();
$itemReq->setFields("detail_url,nick,props_name,num_iid,title,num_iid,input_str,pic_url,location,price,item_img,prop_img");
$itemReq->setNumIid(123456); // id good

$objResult = $topClient->execute($itemReq);

?>
```
