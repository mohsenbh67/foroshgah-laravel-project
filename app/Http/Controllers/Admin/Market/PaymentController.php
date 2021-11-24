<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('Admin.Market.Payment.index');
    }
    public function online()
    {
        return view('Admin.Market.Payment.index');
    }
    public function offline()
    {
        return view('Admin.Market.Payment.index');
    }
    public function attendence()
    {
        return view('Admin.Market.Payment.index');
    }
    public function confirm()
    {
        return view('Admin.Market.Payment.index');
    }
}
