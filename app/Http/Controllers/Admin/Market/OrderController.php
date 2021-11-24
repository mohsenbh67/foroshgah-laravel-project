<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function all()
    {
        return view('Admin.Market.Order.index');
    }
    public function newOrders()
    {
        return view('Admin.Market.Order.index');
    }
    public function sending()
    {
        return view('Admin.Market.Order.index');
    }
    public function unpaid()
    {
        return view('Admin.Market.Order.index');
    }
    public function canceled()
    {
        return view('Admin.Market.Order.index');
    }
    public function returned()
    {
        return view('Admin.Market.Order.index');
    }
    public function show()
    {
        return view('Admin.Market.Order.index');
    }
    public function changeSendStatus()
    {
        return view('Admin.Market.Order.index');
    }
    public function changeOrderStatus()
    {
        return view('Admin.Market.Order.index');
    }
    public function cancelOrder()
    {
        return view('Admin.Market.Order.index');
    }
}
