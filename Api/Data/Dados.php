<?php
namespace Bomagalhaes\Magento2Correios\Api\Data;

/**
 * Interface Dados
 * @package Bomagalhaes\Magento2Correios\Api\Data
 */

interface Dados{

    /**
     * Logradouro
     *
     * @return string
     */
    public function getLogradouro();

    /**
     * Bairro
     *
     * @return string
     */
    public function getBairro();

    /**
     * Cep
     *
     * @return string
     */
    public function getCep();

    /**
     * Cidade
     *
     * @return string
     */
    public function getCidade();

    /**
     * Uf
     *
     * @return string
     */
    public function getUf();

    /**
     * Error
     *
     * @return string
     */
    public function getError();

}
