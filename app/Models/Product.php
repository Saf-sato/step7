<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //以下はGPTで排出した例　適宜変更の可能性あり

    protected $fillable = ['company_id', 'product_name', 'price', 'stock', 'comment', 'img_path'];

    // companiesテーブルとのリレーション
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // salesテーブルとのリレーション
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}