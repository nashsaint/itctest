<?php

namespace App\Services;

use App\Interfaces\InsuranceProductInterface;

class ITCInsuranceService implements InsuranceProductInterface
{
    protected $client;

    public function __construct(ClientApi $client)
    {
        $this->client = $client;
    }

    /**
     * get product list
     *
     * @return array
     */
    public function list(): array
    {
       return $this->client->get();
    }

    /**
     * get product info
     *
     * @return void
     */
    public function info($slug)
    {
        return $this->client->get('info', $slug);
    }
}
