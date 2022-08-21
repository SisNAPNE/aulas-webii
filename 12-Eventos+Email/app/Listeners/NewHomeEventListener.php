<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\HomeEvent;

class NewHomeEventListener
{
    public function __construct() {
        
    }

    public function handle(HomeEvent $event) {

        info("[NewHomeEventListener]: $event->msg");
    }
}
