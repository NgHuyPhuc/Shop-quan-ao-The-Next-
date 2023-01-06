<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Slug',
        'Name',
        'Code',
        'Info',
        'Describer',
        'Image',
        'Image2',
        'Image3',
        'Price',
        'Featured',
        'State',
        'Category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class,'Category_id','id');
    }
}
