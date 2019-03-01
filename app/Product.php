<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 01/03/2019
 * Time: 13:08
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'picture', 'description'
    ];
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    public function color()
    {
        return $this->belongsToMany('App\Color');
    }
}
