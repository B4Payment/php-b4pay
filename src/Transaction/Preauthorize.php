<?php

namespace PaymentGateway\Client\Transaction;

use PaymentGateway\Client\Transaction\Base\AbstractTransactionWithReference;
use PaymentGateway\Client\Transaction\Base\AmountableInterface;
use PaymentGateway\Client\Transaction\Base\AmountableTrait;
use PaymentGateway\Client\Transaction\Base\ItemsInterface;
use PaymentGateway\Client\Transaction\Base\ItemsTrait;
use PaymentGateway\Client\Transaction\Base\OffsiteInterface;
use PaymentGateway\Client\Transaction\Base\OffsiteTrait;

/**
 * Preauthorize: Reserve a certain amount, which can be captured (=charging) or voided (=revert) later on.
 *
 * @package PaymentGateway\Client\Transaction
 */
class Preauthorize extends AbstractTransactionWithReference implements AmountableInterface, OffsiteInterface, ItemsInterface {
    use OffsiteTrait;
    use AmountableTrait;
    use ItemsTrait;

    /**
     * @var bool
     */
    protected $withRegister = false;

    /**
     * @return boolean
     */
    public function isWithRegister() {
        return $this->withRegister;
    }

    /**
     * set true if you want to register a user vault together with the preauthorize
     *
     * @param boolean $withRegister
     *
     * @return $this
     */
    public function setWithRegister($withRegister) {
        $this->withRegister = $withRegister;
        return $this;
    }

}