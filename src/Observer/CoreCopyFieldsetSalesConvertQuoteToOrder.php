<?php
/**
 * Copyright (c) 2017 H&O E-commerce specialisten B.V. (http://www.h-o.nl/)
 * See LICENSE.txt for license details.
 */
namespace Paazl\Shipping\Observer;

use Magento\Framework\Event\ObserverInterface;

class CoreCopyFieldsetSalesConvertQuoteToOrder extends AbstractObserver implements ObserverInterface
{
    /**
     * Observer for converting quote to order
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->_copyFieldset($observer, self::CONVERT_ALGORITM_SOURCE_TARGET_WITH_PREFIX, self::CONVERT_TYPE_CUSTOMER);

        return $this;
    }
}
