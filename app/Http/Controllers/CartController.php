<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class CartController extends Controller
{
          public function index()
    {
        $cart = session()->get('cart', []);
        return view('frontend.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $id = $request->id;
        $tour = Tour::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'name' => $tour->TenTour,
                'price' => $tour->GiaTour,
                'quantity' => 1,
                'date' => $request->input('date') ?? now()->toDateString()
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Đã thêm tour vào giỏ hàng');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            $cart[$id]['date'] = $request->date;
            session()->put('cart', $cart);
        }
        return redirect()->route('cart')->with('success', 'Cập nhật giỏ hàng thành công');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Xóa tour khỏi giỏ hàng');
    }
}
