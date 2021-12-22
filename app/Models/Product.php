<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'category_sub_id', 'name'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function category_sub()
    {
        return $this->belongsTo(CategorySub::class);
    }
}
