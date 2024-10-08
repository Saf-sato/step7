<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all();  // 全商品データを取得
        return view('companies.index', compact('companies'));  // 取得したデータをビューに渡す
    }
}