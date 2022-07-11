<?php

namespace Tests\Unit;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Mockery;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * test product list
     * api is mocked to get a consistent result
     * @return void
     */
    public function testProductList()
    {
        $string = json_encode([
            'product 1' => 'Product 1',
            'product 2' => 'Product 2',
        ]);
        $response = new Response(200, ['Content-Type' => 'application/json'], $string);
        $guzzleMock = Mockery::mock(Client::class);
        $guzzleMock->shouldReceive('get')
            ->once()
            ->andReturn($response);

        $this->app->instance(Client::class, $guzzleMock);

        $response = $this->actingAs($this->user())->get(route('products.index'));

        $data = $response->original->getData();

        $response->assertStatus(200);
        $this->assertEquals($string, json_encode($data['list']));
    }
}
