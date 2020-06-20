<?php
declare(strict_types=1);

namespace Culqi\Pago\Model\Payment;

class Pago extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "culqi";

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}