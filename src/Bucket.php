<?php
namespace Zqzl\Mofxsdk;


class Bucket extends Api
{
    /**
     * 获取token
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function getToken(array $params)
    {
        return $this->request(['className'=>'ForeignUser', 'methodName'=>'getToken'], $params);
    }

    /**
     * 获取商品列表
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function goodList(array $params)
    {
        return $this->request(['className'=>'ForeignGoods', 'methodName'=>'goodsList'], $params);
    }

    /**
     * 获取商品详情
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function goodInfo(array $params)
    {
        return $this->request(['className'=>'ForeignGoods', 'methodName'=>'goodsInfo'], $params);
    }

    /**
     * 生成订单
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function createOrder(array $params)
    {
        return $this->request(['className'=>'ForeignOrder', 'methodName'=>'createOrder'], $params);
    }

    /**
     * 订单支付
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function pay(array $params)
    {
        return $this->request(['className'=>'ForeignPay', 'methodName'=>'getAliWapOrderInfo'], $params);
    }

    /**
     * 获取订单列表
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function orderList(array $params)
    {
        return $this->request(['className'=>'ForeignOrder', 'methodName'=>'orderList'], $params);
    }

    /**
     * 获取订单详情
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function orderInfo(array $params)
    {
        return $this->request(['className'=>'ForeignOrder', 'methodName'=>'orderInfo'], $params);
    }

    /**
     * 返回回调信息
     *
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function result(array $params)
    {
        $getParams = $_REQUEST;
        return null;
    }
}