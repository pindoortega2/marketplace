@component('mail::message')

# Solicitud de Activación de la tienda

Por favor active la tienda. Aqui estan los detalles de la Tienda
Nombre de la tienda: {{$shop->name}}
Dueño de la tienda: {{$shop->owner->name}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
