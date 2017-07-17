<?php

namespace Dykyi;
/**
 * Class CurrencyGOVUA
 */
class CurrencyGOVUA implements CurrencyResource
{
    private $currencyList;

    /**
     * CurrencyGOVUA constructor.
     * @param $currencyList
     */
    public function __construct($currencyList)
    {
        $this->currencyList = $currencyList;
    }

    /**
     * @return string
     */
    public function getDataExchange()
    {
        return $this->currencyList[0]->exchangedate;
    }

    /**
     * @param $code string
     * @return null
     */
    public function getCurrencyFromCode($code)
    {
        foreach ($this->currencyList as $i => $one) {
            if ($one->cc == $code) {
                return $this->currencyList[$i];
            }
        }
        return null;
    }
}