# 中企智联分销sdk

## Install

```
composer require zqzl/mofxsdk -vvv
```

# Usage

```php
<?php

$dispatch = new \Zqzl\Mofxsdk\Dispatch([
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
$dispatch->getToken($params);

// 获取商品列表
$dispatch->goodList($params);

// 获取商品详情
$dispatch->goodInfo($params);

// 创建订单
$dispatch->createOrder($params);

// 订单支付
$dispatch->pay($params);

// 系统返回信息
$dispatch->result($params);

```