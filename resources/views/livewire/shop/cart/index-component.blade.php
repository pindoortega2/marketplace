<div>
     
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>

                @php
                     $nun = 1;   
                @endphp

                @foreach ($cart_items->sortBy('id') as  $key =>$item)                        
                    
                    <tr>
                        <td>{{ $nun++ }}</td>
                        <td scope="row">{{ $item->name }}</td>
                        <td>
                            <input type="number" id="v{{$item->id}}" wire:change="update_quantity({{ $item->id }}, 1)" value="{{ $item->quantity}}">
                        </td>
                        <td>${{ $item->price }}</td>                        
                        <td>${{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }}</td>
                        
                        <td><a wire:click="delete({{ $item->id }})" class="btn btn-danger">Eliminar</a></td>
                    
                    </tr>
                    
                @endforeach                

            </tbody>
        </table>

        <h3>Total: $ {{ Cart::getTotal() }} </h3>
        <a href="{{ route('checkout') }}" class="btn btn-success">Pagar</a>

    </div>

</div>
