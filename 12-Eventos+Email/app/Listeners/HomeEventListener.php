<?php

namespace App\Listeners;

use App\Events\HomeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HomeEventListener {
    
    public function __construct() {
        
    }

    public function handle(HomeEvent $event) {
        
        info("[HomeEventListener]: $event->msg");
        return false;
    }
}
