<?php

namespace PaymentGateway\Client\Transaction;

use PaymentGateway\Client\Transaction\Base\AbstractTransactionWithReference;
use PaymentGateway\Client\Transaction\Base\AmountableInterface;
use PaymentGateway\Client\Transaction\Base\AmountableTrait;
use PaymentGateway\Client\Transaction\Base\ItemsInterface;
use PaymentGateway\Client\Transaction\Base\ItemsTrait;

/**
 * Capture: Charge a previously preauthorized transaction.
 *
 * @package PaymentGateway\Client\Transaction
 */
class Capture extends AbstractTransactionWithReference implements AmountableInterface, ItemsInterface {
    use AmountableTrait;
    use ItemsTrait;
}