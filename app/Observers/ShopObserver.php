<?php

namespace App\Observers;

use App\Mail\ShopActivated as MailShopActivated;
use App\Models\Shop;
use Illuminate\Support\Facades\Mail;
use App\Observers\ShopActivated;

class ShopObserver
{
    /**
     * Handle the Shop "created" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "updated" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function updated(Shop $shop) {
        
        if ($shop->getOriginal('is_active') == false && $shop->is_active == true) {

            Mail::to($shop->owner)->send(new MailShopActivated($shop));
            $shop->owner()->setRole('seller'); //este còdigo me trae de la relaciòn que esta en el modelo user (owner)

        }

    }

    /**
     * Handle the Shop "deleted" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "restored" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the Shop "force deleted" event.
     *
     * @param  \App\Models\Shop  $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
