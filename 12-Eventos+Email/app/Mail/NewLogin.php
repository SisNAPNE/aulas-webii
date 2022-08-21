<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewLogin extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    public function __construct($user) {
        $this->user = $user;
    }

    public function build() {

        return $this->view('mail.new-login')->with([
            'user'  => $this->user,
            'data' => now()->setTimezone('America/Sao_Paulo')->format('d-m-Y H:i:s')
        ])->attach(base_path().'/storage/files/anexo.pdf');

    }
}
