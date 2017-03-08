<?php

namespace PaymentGateway\Client\Transaction\Base;
use PaymentGateway\Client\Data\Item;

/**
 * Interface ItemsInterface
 *
 * @package PaymentGateway\Client\Transaction\Base
 */
interface ItemsInterface {

    /**
     * @param Item[] $items
     * @return void
     */
    public function setItems($items);

    /**
     * @return Item[]
     */
    public function getItems();

    /**
     * @param Item $item
     * @return void
     */
    public function addItem($item);

}