<div class="container">
    <div class="row">
        @foreach ($producto as $item)
            <div class="card col-md-4 mt-4 pb-4">
                <img class="card-img-top" src="{{asset('images.png')}}" width="20px" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$item->nombre}}</h4>
                    <p class="card-text">{{$item->descripcion}}</p>
                </div>

                <button wire:click="add_to_cart({{$item->id}})" type="button" class="btn btn-primary">Agregar al Carrito modificadogit commit</button>            

            </div>
        @endforeach
    </div>
</div>
