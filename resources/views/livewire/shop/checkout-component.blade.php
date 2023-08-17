<div>

    <div class="container">

        <div class="form-group">

            <label for="">Nombre Completo</label>
            <input type="text" wire:model="fullname" class="form-control @error('fullname') is-invalid @enderror"  aria-describedby="helpId">

            @error('fullname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group mt-4">
            
            <label for="">Región o Estado</label>
            <input type="text" wire:model="state"  class="form-control @error('state') is-invalid @enderror" aria-describedby="helpId">

            @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group mt-4">
            
            <label for="">Ciudad o Distrito</label>
            <input type="text" wire:model="city" class="form-control @error('city') is-invalid @enderror" placeholder="" aria-describedby="helpId">

            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>


        <div class="form-group mt-4">
            
            <label for="">Zip Code</label>
            <input type="text" wire:model="zipcode"  class="form-control @error('zipcode') is-invalid @enderror" placeholder="" aria-describedby="helpId">

            @error('zipcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>


        <div class="form-group mt-4">
            
            <label for="">Dirección</label>
            <input type="text" wire:model="address" class="form-control @error('address') is-invalid @enderror" placeholder="" aria-describedby="helpId">

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

        </div>


        <div class="form-group mt-4">
            
            <label for="">Teléfono</label>
            <input type="text" wire:model="phone" class="form-control @error('phone') is-invalid @enderror" aria-describedby="helpId">

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <h5 class="mt-4">Eliga el método de pagó</h5>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" wire:model="payment_method" name="inlineRadioOptions" id="inlineRadio1" value="cash_on_delivery">
            <label class="form-check-label" for="inlineRadio1">Pago en Efectivo</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" wire:model="payment_method" name="inlineRadioOptions" id="inlineRadio2" value="paypal">
            <label class="form-check-label" for="inlineRadio2">PayPal</label>
        </div>
          
        <div>
            <button type="button" wire:click="make_order()" class="btn btn-outline-primary mt-4">Realizar el Pedido</button>
        </div>

    </div>
</div>
