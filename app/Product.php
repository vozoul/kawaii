<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image01',
        'image02',
        'image03',
        'description',
        'feature'
    ];
    public $timestamps = true;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
