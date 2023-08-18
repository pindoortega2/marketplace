<div>

    <div class="container">

        <h3 class="mt-4">Registra tu tienda ahora</h1>

        <div class="form-group">

            <label for="">Nombre</label>
            <input type="text" wire:model="nombre" class="form-control aria-describedby="helpId">

            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group mt-3">

            <label for="">Descripción</label>
            <textarea wire:model="description" class="form-control" rows="3"></textarea>            

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div>
            <button type="button" wire:click="registerShop()" class="btn btn-outline-primary mt-4">Registrar Tienda</button>
        </div>

    </div>
    
</div>

