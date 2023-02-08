<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return view('addresses.index', ['adresai' => $addresses]);
    }

    public function create()
    {
        return view('addresses.create');
    }

    public function store(AddressRequest $request)
    {
        $address = Address::create($request->all());
        return redirect()->route('addresses.show', $address);
    }

    public function show(Address $address)
    {
        return view('addresses.show', ['address' => $address]);
    }

    public function edit(Address $address)
    {
        return view('addresses.edit', compact('address'));
    }

    public function update(AddressRequest $request, Address $address)
    {
        $address->update($request->all());
        return redirect()->route('addresses.show', $address);
    }

    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('addresses.index');
    }
}
