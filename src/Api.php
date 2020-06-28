<?php
namespace Zqzl\Mofxsdk;

use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
{

    const URL = 'https://mall.eqll.top/api/';
    private $token = '';

    public function __construct(string $token)
    {
        if(!$token)  return false;
        $this->token = $token;
    }

    /**
     * @param array $method
     * @param array $params
     * @return mixed
     * @throws MofxDispatchException
     */
    public function request(array $method, array $params)
    {
        $params = array_merge($params,[
            'api' => $method['methodName']
        ]);

        $params['sign'] = $this->signature($params);

        $http = $this->getHttp();

        $response = $http->post(self::URL . $method['className'] . '/index', $params);

        $result = json_decode(strval($response->getBody()), true);

        $this->checkErrorAndThrow($result);

        return $result;
    }

    public function signature(array $params)
    {
        ksort($params);
        $str = '';
        foreach ($params as $k=>$v){
            $str .= $v;
        }
        $str .= $this->token;
        return md5(strtolower($str));
    }

    /**
     * @param $result
     * @throws MofxDispatchException
     */
    private function checkErrorAndThrow($result)
    {
        if (!$result || $result['code'] != 20000) {
            throw new MofxDispatchException($result['message'], $result['code']);
        }
    }

    public function middlewares()
    {
        $this->http->addMiddleware($this->headerMiddleware([
            'token' => $this->token
        ]));
    }
}