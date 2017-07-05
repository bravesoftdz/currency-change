<?php

namespace Dykyi;

use Error;

/**
 * Class CurrencyList
 */
class CurrencyList
{
    const  CURRENCY_FILE_PATH = 'currency';

    private $currencyList = null;

    private function getHtml($url, $post = null, $headers = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        if (!empty($post)) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }

        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HEADER, $headers);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function loadFromUrl($url)
    {
        try {
            get_headers($url);
        } catch (Error $error) {
            return false;
        }

        $this->currencyList = json_decode($this->getHtml($url));

        return $this->currencyList;
    }

    public function loadFromFile($filePath)
    {
        if (!file_exists($filePath)) {
            return false;
        }
        $this->currencyList = json_decode(file_get_contents($filePath));
        return $this->currencyList;
    }
}