<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 14/04/16
 * Time: 10:56
 */

namespace Bomagalhaes\Magento2Correios\Block;


class Email extends \Magento\Framework\View\Element\Template
{
    protected $_helper;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Shipping\Helper\Data $helper, array $data)
    {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    public function getTrackUrl($model){
        return trim($this->_helper->getTrackingPopupUrlBySalesModel($model));
    }
}
