<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;
use TCG\Voyager\Models\Category;

class Categories extends Component {
    public function render() {

        //wherenull trae todas las categorias que tenga en la columna parent_id el valor de nulo,
        // eso quiere decir que es una categoria nula o una categoria padre
        $categories = Category::whereNull('parent_id')->orderBy('id', 'DESC')->get();
        return view('livewire.shop.categories', compact('categories'));

    }
}
