<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    //以下はGPTで排出した例　適宜変更の可能性あり

    protected $fillable = ['product_id'];

    // productsテーブルとのリレーション
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
