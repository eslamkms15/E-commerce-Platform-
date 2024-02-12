<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
use App\Models\Operation;
use App\Models\Order;

class ProductsController extends Controller
{


    public function index()
    {
        $services = Service::join('operation', 'services.ServiceID', '=', 'operation.ServiceID')
        ->select('services.*', 'operation.operation_id', 'operation.operation_name', 'operation.price', 'services.img')
        ->get();
        return view('products', compact('services'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($operation_id)
    {
        $operation = Operation::with('service')->findOrFail($operation_id);

        $cart = session()->get('cart', []);

        if (isset($cart[$operation_id])) {
            $cart[$operation_id]['quantity'] = $cart[$operation_id]['quantity'] + 1;
        } else {
            $cart[$operation_id] = [
                "product_name" => $operation->operation_name,
                "ServiceName" => $operation->service->ServiceName,
                "photo" => $operation->service->img,
                "price" => $operation->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to the cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
    public function completeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        $order = Order::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'notes' => $request->input('notes'),
        ]);

        $cart = session()->get('cart', []);

        foreach ($cart as $operation_id => $details) {
            $order->operations()->attach($operation_id, [
                'quantity' => $details['quantity'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('success')->with('success', 'Order completed successfully!');
    }

}
