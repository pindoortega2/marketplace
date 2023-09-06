<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Livewire\WithPagination;


class ProductComponent extends Component {

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render() {

        $productos = Product::paginate(12);        
        return view('livewire.shop.product-component', compact('productos'));

    }

    public function addToCart(Product $product) {        

        Cart::add($product->id, '$product->nombre', $product->precio, 1, array());                
        $this->emitTo('shop.cart-component', 'add_to_cart');

    }

}
