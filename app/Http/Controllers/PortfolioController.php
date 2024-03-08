<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('user.portfolio.portfolio', [
            'portfolios' => Portfolio::active()->get(),
            'categories' => Category::active()->get()
        ]);
    }

    public function show(int $id)
    {
        return view('user.portfolio.portfolio_info', [
            'portfolio' => Portfolio::findOrFail($id)
        ]);
    }
}
