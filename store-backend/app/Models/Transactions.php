<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use SoftDeletes;
    
    protected $fillable =[
        'uuid','name','email','number','address','transaction_total','transaction_status'
    ];

    public function transactions_details()
    {
        return $this->hasMany(TransactionsDetails::class,'transaction_id');
    }
}
