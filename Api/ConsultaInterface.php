<?php

namespace Bomagalhaes\Magento2Correios\Api;

interface ConsultaInterface
{
    /**
     * Consulta Cep
     *
     * @param string $cep
     * @return \Bomagalhaes\Magento2Correios\Api\Data\Dados|Bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function consultaCep($cep);

    /**
     * Estima frete do produto
     * @return string
     */
    public function estimarFrete();
}
