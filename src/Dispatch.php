<?php
namespace Zqzl\Mofxsdk;

use Hanson\Foundation\Foundation;

/**
 * Class Dispatch
 * @package zqzl\mofxsdk
 *
 * @method array getToken($params)
 * @method array goodList($params)
 * @method array goodInfo($params)
 * @method array createOrder($params)
 * @method array pay($params)
 * @method array orderList($params)
 * @method array orderInfo($params)
 * @method array result($params)
 */
class Dispatch extends Foundation
{

    private $bucket;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->bucket = new Bucket($this);
    }

    public function __call($name, $arguments)
    {
        return $this->bucket->{$name}(...$arguments);
    }
}