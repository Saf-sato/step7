<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();  // 全商品データを取得
        return view('sales.product_register', compact('sales'));  // 取得したデータをビューに渡す
    }
}