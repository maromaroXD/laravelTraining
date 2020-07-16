<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function index()
    {
        return view('Customers.showCustomers')->with('Customers',
               Customer::paginate(5));
    }

    public function Debug()
    {
        $id = 363;
        // $Oid = 10100;
        $Cust  = Customer::find($id);
        // $Order  = Order::find($Oid);
        dd($Cust , Customer::find($id)->orders);
    }

    public function CustId($id)
    {

    }

}
