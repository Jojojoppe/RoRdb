<?php

namespace RoRdb\App\Providers;

use RoRdb\Illuminate\Support\Facades\Event;
use RoRdb\Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = ['RoRdb\\App\\Events\\Event' => ['RoRdb\\App\\Listeners\\EventListener']];
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        //
    }
}
