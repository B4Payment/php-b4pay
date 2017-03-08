<?php


namespace PaymentGateway\Client\Data\Result;

/**
 * Class ResultData
 *
 * @package PaymentGateway\Client\Data\Result
 */
abstract class ResultData {

    /**
     * @return array
     */
    abstract public function toArray();

}