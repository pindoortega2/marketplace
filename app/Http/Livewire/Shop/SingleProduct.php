<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;

class SingleProduct extends Component {

    public $product;
    public function mount(Product $product) {
        $this->product  = $product;
        dd($product);
    }

    public function render() {
        return view('livewire.shop.single-product');
    }

}
