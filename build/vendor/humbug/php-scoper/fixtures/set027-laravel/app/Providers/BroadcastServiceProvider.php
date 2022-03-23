<?php

namespace RoRdb\App\Providers;

use RoRdb\Illuminate\Support\ServiceProvider;
use RoRdb\Illuminate\Support\Facades\Broadcast;
class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();
        require base_path('routes/channels.php');
    }
}
