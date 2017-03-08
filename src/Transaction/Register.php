<?php

namespace PaymentGateway\Client\Transaction;

use PaymentGateway\Client\Transaction\Base\AbstractTransaction;
use PaymentGateway\Client\Transaction\Base\OffsiteInterface;
use PaymentGateway\Client\Transaction\Base\OffsiteTrait;

/**
 * Register: Register the customer's payment data for recurring charges.
 *
 * The registered customer payment data will be available for recurring transaction without user interaction.
 *
 * @package PaymentGateway\Client\Transaction
 */
class Register extends AbstractTransaction implements OffsiteInterface {
    use OffsiteTrait;
}