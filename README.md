# 中企智联分销sdk

## Install

```
composer require zqzl/mofxsdk -vvv
```

# Usage

```php
<?php

$dispatch = new \Zqzl\Mofxsdk\Dispatch([
    'token' => '123',
    'debug' => true,
    'log' => [
        'name' => 'mofx',
        'file' => __DIR__ . '/mofx.log',
        'level' => 'debug',
        'permission' => 0777,
    ],
]);


$params = [];

// 获取token 
$result = $dispatch->getToken($params);

// 获取商品列表
$result = $dispatch->goodList($params);

// 获取商品详情
$result = $dispatch->goodInfo($params);

// 创建订单
$result = $dispatch->createOrder($params);

// 订单支付
$result = $dispatch->pay($params);

```