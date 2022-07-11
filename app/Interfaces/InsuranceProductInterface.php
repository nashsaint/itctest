<?php

namespace App\Interfaces;

interface InsuranceProductInterface
{
    /**
     * list of products
     */
    public function list();

    /**
     * product info
     */
    public function info(string $slug);
}
