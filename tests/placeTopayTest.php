<?php
/**
 * Created by PhpStorm.
 * User: eduardrussy
 * Date: 6/01/17
 * Time: 17:40
 */

namespace bukerllk\placeToPay\tests;


class placeToPayTest extends \PHPUnit_Framework_TestCase
{
    public function nothingTest()
    {
        $this->assertTre(true);
    }

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
        $this->auth = $this->getAuthTest();
        $client = $this->client = new nusoap_client($this->wsdl, 'wsdl');
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>'.$err.'</pre>';
        }
    }


    /**
     * @return mixed
     */
    protected function getAuthTest()
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
    protected function getCallTest($function, $parameters)
    {
        $result = $this->client->call($function, $parameters, '', '', false, true);

        return $result;
    }


    /**
     * @return bankList
     */
    public function getBankListTest()
    {
        $params = [ 'parameters' => $this->auth ];
        $getBankList = $this->getCallTest('getBankList', $params);

        return $getBankList;
    }


    /**
     * @return createTransaction
     */
    function createTransactionTest($parameters)
    {
        $params = [ 'parameters' => $parameters ];

        return $this->getCallTest('createTransaction', $params);
    }


    /**
     * @return createTransactionMultiCredit
     */
    function createTransactionMultiCreditTest($parameters)
    {
        $params = [ 'parameters' => $parameters ];

        return $this->getCallTest('createTransactionMultiCredit', $params);
    }


    /**
     * @return getTransactionInformation
     */
    function getTransactionInformationTest($parameters)
    {
        $params = [ 'parameters' => $parameters ];

        return $this->getCallTest('getTransactionInformation', $params);
    }


    /**
     * @return Functions
     */
    public function getFunctionsTest()
    {
        $proxy = $this->client->getProxyClassCode();

        return $proxy;
    }

}