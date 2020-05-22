<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;


class DashboardController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     function index()
    {   $income = Transactions::where('transaction_status','SUCCESS')->sum('transaction_total');
        $sales  = Transactions::count();
        $items  = Transactions::with('transactions_details')->orderBy('id','DESC')->take(5)->get();

        $pie = [
            'pending'=>Transactions::where('transaction_status','PENDING')->count(),
            'failed'=>Transactions::where('transaction_status','FAILED')->count(),
            'success'=>Transactions::where('transaction_status','SUCCESS')->count(),
        ];
        return view ('pages.dashboard')->with([
            'income'=> $income,
            'sales'=> $sales,
            'items'=> $items,
            'pie'=> $pie,
        ]);
    }

}
