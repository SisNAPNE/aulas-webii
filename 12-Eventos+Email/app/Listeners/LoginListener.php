<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Support\Facades\Mail;
use \App\Mail\NewLogin;

class LoginListener {

    public function __construct() {
        
    }

    public function handle($event) {        
        
        Mail::to($event->user)->send(
            new NewLogin($event->user)
        ); 
 
    }
}
