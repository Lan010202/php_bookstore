<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    private $cart;
    private $order;
    public function __construct(Cart $cart, Order $order) {
        $this->cart = $cart;
        $this->order = $order;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $carts = $this->cart->where('user_id', $user->id)->get();
        return view('order.create', [
            'user' => $user,
            'carts' => $carts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $params = $request->all(
            'first_name',
            'last_name',
            'phone',
            'address'
        );
        $params['user_id'] = $user_id;
        $order = $this->order->create($params);
        if ($order) {
            $this->cart->where('user_id', $user_id)->delete();
        }
        return redirect()->route('user.order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
