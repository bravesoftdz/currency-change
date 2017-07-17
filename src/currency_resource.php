<?php

namespace Dykyi;

/**
 * Interface CurrencyResource
 */
interface CurrencyResource
{
    public function getDataExchange();

    public function getCurrencyFromCode($code);
}