<div>       
    
    @auth
        {{ \Cart::session(auth()->id())->getContent()->count() }}
    @else 
        0   
    @endauth

</div>
