<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return Orders::all();
    }

    public function create()
    {
    }

    public function store()
    {

    }

    public function show(Orders $orders)
    {
        return $orders;
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
