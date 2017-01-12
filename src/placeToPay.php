<?php
/**
 * Created by PhpStorm.
 * User: eduardrussy
 * Date: 6/01/17
 * Time: 16:42
 */
namespace bukerllk\placeToPay;

use nusoap_client;

class placeToPay extends nusoap_client
{

    /**
     * @var string
     */
    protected $wsdl = "https://test.placetopay.com/soap/pse/";

    protected $login = '6dd490faf9cb87a9862245da41170ff2';

    protected $tranKey = '024h1IlD';

    protected $seed;

    protected $auth;

    protected $client;


    /**
     * Client constructor.
     *
     * @param string $wsdl
     * @param string $type
     */
    public function __construct()
    {
        $this->auth = $this->getAuth();
        $client = $this->client = new nusoap_client($this->wsdl, 'wsdl');
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>'.$err.'</pre>';
        }
    }


    /**
     * @return mixed
     */
    protected function getAuth()
    {
        $this->seed = date('c');
        $hashStringData = sha1($this->seed.$this->tranKey, false);
        $auth = [
            'login'   => $this->login,
            'tranKey' => $hashStringData,
            'seed'    => $this->seed,
        ];
        $this->auth = [ 'auth' => $auth ];

        return $this->auth;
    }


    /**
     * @return string
     */
    protected function getCall($function, $parameters)
    {
        $result = $this->client->call($function, $parameters, '', '', false, true);

        return $result;
    }


    /**
     * @return bankList
     */
    public function getBankList()
    {
        $params = [ 'parameters' => $this->auth ];
        $getBankList = $this->getCall('getBankList', $params);

        return $getBankList;
    }


    /**
     * @return createTransaction
     */
    function createTransaction($parameters)
    {
        $params = [ 'parameters' => $parameters ];

        return $this->getCall('createTransaction', $params);
    }


    /**
     * @return createTransactionMultiCredit
     */
    function createTransactionMultiCredit($parameters)
    {
        $params = [ 'parameters' => $parameters ];

        return $this->getCall('createTransactionMultiCredit', $params);
    }


    /**
     * @return getTransactionInformation
     */
    function getTransactionInformation($parameters)
    {
        $params = [ 'parameters' => $parameters ];

        return $this->getCall('getTransactionInformation', $params);
    }


    /**
     * @return Functions
     */
    public function getFunctions()
    {
        $proxy = $this->client->getProxyClassCode();

        return $proxy;
    }

}