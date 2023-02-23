<?php

namespace App\Managers;

use App\Http\Requests\CartRequest;
use App\Models\Order_details;
use App\Models\Product;
use App\Models\User;

class CartManager
{
    public function addToCart(CartRequest $request)
    {
        $duomenys = $request->all();
        /** @var User $user */
        $user = auth()->user();         // Siuo metu prisijunges vartotojas

        // Paimame vartotojo paskutinį krepšelį ir priskiriam i masyva saugojimui
        $duomenys['order_id'] = $user->getLatestCart()->id;
        $product = Product::find($request->product_id);


        $oldOrderDetails = Order_Details::where('order_id', $duomenys['order_id'])
            ->where('product_id', $product->id)
            ->first();


        if ($oldOrderDetails) {
            //Update cart
            $oldOrderDetails->quantity = $request->quantity;
            $oldOrderDetails->Total = $product->price * $request->quantity;
            $oldOrderDetails->save();

        } else {
            $manager = new Order_Details(); // Suemuliavau OrderDetail Managerį
            $duomenys['product_name'] = $product->name;    // Paimame produkto pavadinima ir priskiriam i masyva saugojimui
            $duomenys['price'] = $product->price;   // Paimame produkto kaina ir priskiriam i masyva saugojimui
            $duomenys['Total'] = $product->price * $request->quantity; // Calculate the total
            $manager->create($duomenys); // Sukuriu naują OrderDetail įrašą
        }
        return redirect()->back()->with('success', __('messages.product_added_to_cart'));
    }
}
