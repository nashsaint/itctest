<?php

namespace App\Http\Controllers;

use App\Services\ITCInsuranceService;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ITCInsuranceService $service)
    {
        $this->service = $service;
    }

    /**
     * list of products
     *
     * @param ITCInsuranceService $service
     * @return View
     */
    public function index(ITCInsuranceService $service): View
    {
        $list = $service->list();

        return view('product-list', [
            'list' => $list,
        ]);
    }

    /**
     * show product info
     *
     * @param string $slug
     * @return View
     */
    public function show($slug): View
    {
        $info = $this->service->info($slug);

        return view('product-info', [
            'info' => $info,
            'slug' => $slug,
        ]);
    }
}
