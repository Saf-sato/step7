<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //以下はGPTで排出した例　適宜変更の可能性あり

    protected $fillable = ['company_name', 'street_address', 'representative_name'];

    // productsテーブルとのリレーション
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}