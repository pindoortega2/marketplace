<?php

namespace App\Http\Livewire\Shop\Cart;

use Livewire\Component;

class IndexComponent extends Component {

    public function render() {

        $cart_items = \Cart::session(auth()->id())->getContent();

        return view('livewire.shop.cart.index-component', compact('cart_items'))        
        ->extends('layouts.app')
        ->section('content');

    }

    public function update_quantity($itemid, $quantity) { 
        //dd($itemid, $quantity);
        \Cart::session(auth()->id())->update($itemid,[
            'quantity' => $quantity
                 
        ]);

    }


    public function delete($itemId) {
        \Cart::session(auth()->id())->remove($itemId);
    }

}
