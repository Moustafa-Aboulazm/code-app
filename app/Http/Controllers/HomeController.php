<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio as PortfolioModel;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome', [
            'categories' => Category::active()->get(),
            'portfolios' => PortfolioModel::active()->get(),
            'services' => Service::all(),
            'sliders' => Slider::active()->get()
        ]);
    }
}
