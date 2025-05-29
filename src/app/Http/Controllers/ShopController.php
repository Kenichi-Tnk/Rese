<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with(['area', 'genre'])->get();
        return view('shops.index', compact('shops'));
    }

    public function detail(shop $shop)
    {
        $shop->load(['area', 'genre']);
        return view('shops.detail', compact('shop'));
    }
}
