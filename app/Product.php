<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property int price
 * @property text description

 */
class Product extends Model
{
    /**
     * @var array
     */
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
