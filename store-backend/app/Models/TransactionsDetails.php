<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionsDetails extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'transaction_id','products_id'
    ];

    public function transactions()
    {
        return $this->belongsTo(Transactions::class,'transaction_id','id');
    }

    
    public function products()
    {
        return $this->belongsTo(Products::class,'products_id','id');
    }

}
