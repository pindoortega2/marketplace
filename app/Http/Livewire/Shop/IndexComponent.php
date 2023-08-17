<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;

class IndexComponent extends Component {

    public function render() {

        $producto = Product::all()->take(20);

        return view('livewire.shop.index-component', compact('producto'))
        ->extends('layouts.app')
        ->section('content');

    }

    public function add_to_cart(Product $producto) {
        
        \Cart::session(auth()->id())->add(array(
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $producto
        ));

        $this->emit('message', 'El producto fue agregado correctamente');
        $this->emitTo('shop.cart-component', 'add_to_cart');

    }

}
