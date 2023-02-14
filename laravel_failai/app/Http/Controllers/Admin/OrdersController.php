<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());
        return redirect()->route('orders.show', $order);
    }

    public function show(Order $order)
    {
        return view('orders.show', ['orders' => $order]);
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.show', $order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
