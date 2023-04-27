<?php
/**
 * 2007-2020 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0).
 * It is also available through the world-wide-web at this URL: https://opensource.org/licenses/AFL-3.0
 */
declare(strict_types=1);

class Customer extends CustomerCore
{
    public function __construct($id = null) {
        // Setting max lenght -> 512:
        self::$definition['fields']['firstname'] = array('type' => self::TYPE_STRING, 'validate' => 'isCustomerName', 'required' => true, 'size' => 512);
        self::$definition['fields']['lastname'] = array('type' => self::TYPE_STRING, 'validate' => 'isCustomerName', 'required' => true, 'size' => 512);
        parent::__construct($id);
    }
}
