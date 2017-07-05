<?php

namespace Dykyi;

/**
 * Class MyCurrency
 */
class CurrencyChange
{
    private $resource = null;

    public function __construct(CurrencyResource $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @param string $code
     * @return mixed
     */
    public function getCurrencyFromCode($code = 'USD')
    {
        return $this->resource->getCurrencyFromCode($code);
    }

    /**
     * @return string
     */
    public function getDataExchange()
    {
        return $this->resource->getDataExchange();
    }
}