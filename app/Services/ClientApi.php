<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Response;

class ClientApi
{
    protected $client;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = app(Client::class);
        $this->baseUrl = config('products.uri');
    }

    /**
     * fetch product api
     *
     * @param string $method
     * @return array
     */
    public function get($method = 'list', $param = null): array
    {
        try {
            $url = $this->baseUrl . $method;
            if ($param) {
                $url .= '?id=' . $param;
            }
            $response = $this->client->get($url);
            $contents = $response->getBody()->getContents();

            return json_decode($contents, true);

        } catch (GuzzleException $e) {
            return response()->json($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
