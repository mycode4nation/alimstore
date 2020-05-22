<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $fillable  = [
        'name','type','description','price','slug','quantity'
    ] ;

    
    protected $hidden  = [
        'name','type','description','price','slug','quantity'
    ];


//     public function transactions_details(){
//         return $this->hasMany(TransactionsDetails::class,'products_id'); 
//    }

    public function galleries(){
         return $this->hasMany(ProductGallery::class,'products_id'); 
    }
}
