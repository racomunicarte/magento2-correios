<?php

namespace Bomagalhaes\Magento2Correios\Model\Config;

/**
 * Class Formato
 * @package Bomagalhaes\Magento2Correios\Model\Config
 */
class Formato implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => 'Envelope'),
            array('value' => 2, 'label' => 'Caixa'),
            array('value' => 3, 'label' => 'Cilindro'),
        );
    }
}
