<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Seller;
use App\Models\ShoppingOrder;
use App\Models\TransactionReport;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::all();
        return view('admin.dashboard',compact('sellers'));
    }
    public function users_detail()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function customers()
    {
        $customers = Customer::all();
        return view('admin.customers',compact('customers'));
    }
    public function products()
    {
        $products = Product::simplePaginate(10);
        return view('admin.products',compact('products'));
    }
    public function reports()
    {
        $reports = TransactionReport::all();
        return view('admin.reports',compact('reports'));
    }
    public function payments()
    {
        $payments = Payment::all();
        return view('admin.payments',compact('payments'));
    }
    public function orders()
    {
        $orders = ShoppingOrder::all();
        return view('admin.orders',compact('orders'));
    }
    public function delivires()
    {
        $deliveries = Delivery::all();
        return view('admin.deliveries',compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function set_status(User $user)
    {
        dd($user);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
