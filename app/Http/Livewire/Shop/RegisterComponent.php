<?php

namespace App\Http\Livewire\Shop;

use App\Mail\ShopActivatedRequest;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class RegisterComponent extends Component {

    public $nombre, $description;

    public function render() {
        return view('livewire.shop.register-component')
        ->extends('layouts.app')
        ->section('content');
    }

    public function registerShop() {

        $this->validate([
            'nombre' => 'required',
            'description' => 'required'            
        ]);

        //Se guarda la tienda el nombre y la descripción shop() es la relación en el modelo user
        $shop = auth()->user()->shop()->create([
            'name' => $this->nombre,
            'description' => $this->description,
        ]);

        //Buscamos a todos los administradores para enviar un correo 
        $admin = User::whereHas('role', function($q){
            $q->where('name', 'admin');
        })->get();        

        //Se envia el mail a los administradores ($admin), $shop contiene todos los datos de la tienda que se esta guardando
        Mail::to($admin)->send(new ShopActivatedRequest($shop));

        //retornamos a la página de inicio despues de guardar la tienda
        return redirect()->route('shop-index');

    }

}
